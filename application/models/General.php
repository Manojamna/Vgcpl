<?php

class General extends CI_Model {

    public function __construct() {
        parent::__construct();
        /*
          Argument should be in this format only
          $table='xyz table name';
          $column='xyz column name';
          $where=array('xyzkey'=>'xyzvalue');
          $offset=123 or $limit=123
         */
    }

    public function insert($table, $data) {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function insert_batch($table, $data) {
        /*
          $data = array(
          array(
          'title' => 'My title',
          'name' => 'My Name',
          'date' => 'My date'
          ),
          array(
          'title' => 'Another title',
          'name' => 'Another Name',
          'date' => 'Another date'
          )
          );
         */
        return $this->db->insert_batch($table, $data);
    }

    public function edit($table, $data, $where) {
        return $this->db->update($table, $data, $where);
    }

    public function edit_batch($table, $data, $where) {
        /* $data = array(
          array(
          'token'           => '657871316787544',
          'device'          => 'none',
          'new_token_value' => ''
          ),
          array(
          'token'           => '757984513154644',
          'device'          => 'none',
          'new_token_value' => ''
          )
          );
          Produces:
          UPDATE `tablexyz` SET
          `token` = CASE
          WHEN `token` = '657871316787544' THEN '123'
          WHEN `token` = '757984513154644' THEN '789'
          ELSE token END,
          `device` = CASE
          WHEN `token` = '657871316787544' THEN 'none'
          WHEN `token` = '757984513154644' THEN 'none'
          ELSE device END
          WHERE token IN (657871316787544,757984513154644)
         */
        return $this->db->update_batch($table, $data, $where);
    }

    public function delete($table, $where) {
        return $this->db->delete($table, $where);
    }

    public function getData($table, $column, $where = '', $limit = '', $offset = '') {
        if (!$where) {
            if ($column)
                $this->db->select($column);
            $query = $this->db->get($table, $limit, $offset);
        }
        else {
            if ($column)
                $this->db->select($column);
            $query = $this->db->get_where($table, $where, $limit, $offset);
        }
        return $query->result();
    }
    public function get_where($table,$where)
    {
        $result = $this->db->get_where($table,$where);
        return $result->row_array();
    }

    public function rowCount($table, $where = '') {
        if (!$where) {
            return $this->db->count_all($table);
        } else {
            return $this->db->where($where)->count_all_results($table);
        }
    }

    public function query($query) {
        $query = $this->db->query($query);
        return $query->result();
    }
    
    public function insert_invite($promocode,$email) {
        $data = array(
            'promocode' =>$promocode,
            'friend_email' => $email
        );
        $this->db->insert('friend_invite',$data);
        
        return true;
    }
    
    public function accept_invite($promocode,$email) {
        
        $this->db->select('*');
        $this->db->from('friend_invite');
        $this->db->where('promocode like binary',$promocode, NULL, FALSE);
        $this->db->where('friend_email',$email);
        $query = $this->db->get();
        $data = $query->row_array();
        $num = $query->num_rows();
        if($num > 0)
        {
            $this->db->where('promocode',$promocode);
            $this->db->where('friend_email',$email);
            $this->db->update('friend_invite',array('status'=>1));
            return true;
        }
        else
        {
            return FALSE;
        }
    }
    
    public function invitedata($promocode) {
        $this->db->select('COUNT(invite_id) as total_accepted_invite');
        $this->db->from('friend_invite');
        $this->db->where('promocode',$promocode);
        $this->db->where('status',1);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function payment_count($user_id) {
        $this->db->select('COUNT(payment_history_id) as pay_count');
        $this->db->from('payment_history');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function getplan($user_id) {
        $result = array();
        $this->db->select('subscription_id');
        $this->db->from('payment_history');
        $this->db->where('user_id',$user_id);
        $this->db->where('subscription_id !=',0);
        $query = $this->db->get();
        $data = $query->result_array();
        
        if(!empty($data))
        {
            if($data[0]['subscription_id'] == 4){
                $result = array();
            }else{
                foreach($data as $row){
                    $this->db->select('plan_id, subscription_name, total_month, price, price_content');
                    $this->db->from('subscription_plans as s');
                    //$this->db->where('plan_id !=',$row['subscription_id']);
                    $this->db->where('plan_id !=',1);
                    $this->db->where('plan_id !=',4);
                    $this->db->limit(2);
                    $query2 = $this->db->get();
                    $result = $query2->result_array();
//                    foreach($res as $v)
//                    {
//                        $data_row['plan_id'] = $v['plan_id'];
//                        $data_row['subscription_name'] = $v['subscription_name'];
//                        $data_row['price'] = $v['price'];
//                        $data_row['price_content'] = $v['price_content'];
                       // $result = $res;
                    //}
                }
            } 
        }
        else
        {
            $this->db->select('plan_id, subscription_name, total_month, price, price_content');
            $this->db->from('subscription_plans as s');
            $this->db->limit(3);
            $query3 = $this->db->get();
            $result = $query3->result_array();
        }
        return $result;
    }
     
}