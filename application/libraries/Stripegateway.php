<?php if (! defined('BASEPATH')) { exit('No direct script access allowed');}

require_once('vendor/autoload.php');

class Stripegateway
{
    public function __construct()
    {
        $stripe = array("secret_key" => STRIPE_SK, "public_key" => STRIPE_PK);
        \Stripe\Stripe::setApiKey($stripe['secret_key']);
    }

    public function checkout($data){
        $message = array();
        try{
            /*if($data['usertype'] == 'guest'){
               $data['remtype'] = 'notremember';  
            }*/
            
            /*if($data['remtype']!='remember')
            {*/
                $mycard = array(
                    'number' => $data['number'],
                    'exp_month' => $data['exp_month'],
                    'exp_year' => $data['exp_year'],
                    'cvc' => $data['cvv'],
                    'name' =>  $data['first_name']     // SHOW FOR PAYMENT CARD */
                );
                // GENERATE NEW CARD TOKEN
                $token = Stripe\Token::create(array(    
                    'card' => $mycard,
                    ));
                if($token!=''){
                       /* if($data['usertype'] != 'guest'){
                            $result = $this->get_exist_user($data['email']);
                        }else{
                            $result = 0;
                        }*/
                        
                     /*   if($result->count > 0){ // EXISTING CUSTOMER,    This result update from API will take 1 or 2 min.
                                $cu = \Stripe\Customer::retrieve($result->data[0]->customer); // stored in your application
                                $cu->source = $token; // obtained with Checkout
                                $cu->save();
                                $charge = \Stripe\Charge::create(array(
                                        'amount' => $data['amount'],
                                        'currency' => 'usd',
                                        'receipt_email' => $data['email'],
                                        'customer' =>$result->data[0]->customer,     // PASS CUSTOMER ID.
                                        ));    
                        }else{*/

                             $customer = \Stripe\Customer::create(array(
                                  "email" => $data['email'],
                                  "metadata" => array(
                                        'FirstName' => $data['first_name'],                                        
                                    ),
                                  "source" => $token,
                                  "description" =>$data['description'])
                            );


                            $charge = \Stripe\Charge::create(array(
                                'amount' => $data['amount'],
                                'currency' => 'usd',
                                'receipt_email' => $data['email'],
                                'customer' => $customer->id,
                                'source' => $token->card,
                                ));

                        }
                        $message['ACK'] = $charge->status;
                        $message['TRANSACTIONID'] = $charge->id;
                        $message['strip_responce'] = $charge;
                        $message['customer_id']   =  $customer->id;
                //}
           /* }else{
                $message = $this->remember_me($data);
            }*/
          
        }
        catch(Exception $e)
        {
            $message['ACK'] = $e->getMessage();
        }
        return $message;
    }

    public function remember_me($data){   // EXISTING CUSTOMER PAYMENT.
        $message = array();
        try{
            $result = $this->get_exist_user($data['email']);
            
            if($result->count > 0){     // PAYMENT ON EXISTING CARD CUSTOMER.
                $charge = \Stripe\Charge::create(array(
                            'amount' => $data['amount'],
                            'currency' => 'usd',
                            'receipt_email' => $data['email'],
                            'customer' =>$result->data[0]->customer,     // PASS CUSTOMER ID.

                            ));    

                $message['ACK'] = $charge->status;
                $message['TRANSACTIONID'] = $charge->id;
            }else{
                $message['ACK'] = 'Card not found.';
            }
        }catch(Exception $e)
        {
            $message['ACK'] = $e->getMessage();
        }
        return $message;
        
     }

      public function create($data){
        $message = array();
        try
        {
            $charge = \Stripe\Charge::create($data);
            $message['ACK'] = $charge->status;
            $message['TRANSACTIONID'] = $charge->id;
            $message['strip_responce'] = $charge;
        }
        catch(Exception $e)
        {
            $message['ACK'] = $e->getMessage();
        }
        return $message;
    }
     
    public function create_user($data){
        $mycard = array(
            'number' => $data['number'],
            'exp_month' => $data['exp_month'],
            'exp_year' => $data['exp_year'],
            'cvc' => $data['cvc'],
            'name' => $data['name'],
          );
        // GENERATE NEW CARD TOKEN
        $token = Stripe\Token::create(array(
            'card' => $mycard,
        ));
        
        if (!empty($token)) {
            $customer = \Stripe\Customer::create(
                array(
                    "email" => $data['email'],
                    "metadata" => array(
                        'FirstName' => $data['name'],
                    ),
                    "source" => $token->id,
                    "description" => 'This is customer'
                )
            );
        }
        return $customer;
    }
     
    public function get_exist_user($email)
    {
        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/search?query='.$email.'&prefix=false');
        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Authorization: Bearer '.STRIPE_TEST_SK.' ','Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res);
    }


    public function get_customer($customer){
         $cu = \Stripe\Customer::Retrieve(
              array("id" => $customer, "expand" => array("default_source"))
            );

         return $cu;
    }

}
