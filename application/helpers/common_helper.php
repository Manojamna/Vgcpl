<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if(!function_exists('test_method'))
{
    function _set_header_status($code = 200, $text = '')
    {
        if (is_cli())
        {
          return;
        }
        if (empty($code) OR ! is_numeric($code))
        {
          show_error('Status codes must be numeric', 500);
        }
        if (empty($text))
        {
            is_int($code) OR $code = (int) $code;
            $stati = array(
                100 => 'Continue',
                101 => 'Switching Protocols',

                200 => 'OK',
                201 => 'Created',
                202 => 'Accepted',
                203 => 'Non-Authoritative Information',
                204 => 'No Content',
                205 => 'Reset Content',
                206 => 'Partial Content',

                300 => 'Multiple Choices',
                301 => 'Moved Permanently',
                302 => 'Found',
                303 => 'See Other',
                304 => 'Not Modified',
                305 => 'Use Proxy',
                307 => 'Temporary Redirect',

                400 => 'Bad Request',
                401 => 'Unauthorized',
                402 => 'Payment Required',
                403 => 'Forbidden',
                404 => 'Not Found',
                405 => 'Method Not Allowed',
                406 => 'Not Acceptable',
                407 => 'Proxy Authentication Required',
                408 => 'Request Timeout',
                409 => 'Conflict',
                410 => 'Gone',
                411 => 'Length Required',
                412 => 'Precondition Failed',
                413 => 'Request Entity Too Large',
                414 => 'Request-URI Too Long',
                415 => 'Unsupported Media Type',
                416 => 'Requested Range Not Satisfiable',
                417 => 'Expectation Failed',
                422 => 'Unprocessable Entity',
                429 => 'Too Many Requests',

                500 => 'Internal Server Error',
                501 => 'Not Implemented',
                502 => 'Bad Gateway',
                503 => 'Service Unavailable',
                504 => 'Gateway Timeout',
                505 => 'HTTP Version Not Supported'
            );

            if (isset($stati[$code]))
            {
                $text = $stati[$code];
            }
            else
            {
                show_error('No status text available. Please check your status code number or supply your own message text.', 500);
            }
        }
        if (strpos(PHP_SAPI, 'cgi') === 0)
        {
          header('Status: '.$code.' '.$text, TRUE);
        }
        else
        {
          $server_protocol = isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.1';
          header($server_protocol.' '.$code.' '.$text, TRUE, $code);
        }
    }
    function _success($status_code=200,$text="SUCCESS",$data="")
    {
        _set_header_status($status_code, $text);
        header('Content-type: application/json');
        echo json_encode(
            array(
            'status'=>$status_code,
            'msg'=>$text,
            'data'=>$data
            )); exit;
    }
    function _error($status_code=400,$text="FAILD",$data="")
    {
        _set_header_status($status_code, $text);
        header('Content-type: application/json');
        echo json_encode(
            array(
            'status'=>$status_code,
            'msg'=>$text,
            'data'=>$data
            )); exit;  
    }
    function _lang_msg($text)
    {
    	$ci=&get_instance();
        return $ci->lang->line($text);
    }   
    function _is_login()
    {
        $CI = & get_instance();
        $isLoggedIn = $CI->session->userdata('is_logged_in');
        if($isLoggedIn) 
        {
            return 'TRUE';
        }
          return 'FALSE';  
    }
    function _pre($data)
    {
    	echo"<pre>";
    	print_r($data);
    	echo"</pre>";
    	exit();
    }
    function _br()
    {
        echo"<br>";
    }
    function _set_expire_time($time)
    {
        $exipretime = date('Y-m-d H:i:s', strtotime($time));
        /*echo date('Y-m-d H:i:s'); bre();
        echo date('Y-m-d H:i:s', strtotime('4 minute')); bre();
        echo date('Y-m-d H:i:s', strtotime('6 hour')); bre();
        echo date('Y-m-d H:i:s', strtotime('2 day')); bre();
        echo date('Y-m-d H:i:s', strtotime('1 month')); bre();
        echo date('Y-m-d H:i:s', strtotime('1 year'));*/
        return $exipretime;
    }
    function _date_time()
    {
        return date('Y-m-d H:i:s');
    }
    function _is_empty($data) // $data=array("name"=>'');
    {
        header('Content-type: application/json');
        $empty_str='';
        foreach ($data as $key => $value) 
        {
            if(empty($value))
            {
                $empty_str.=$key.',';
            }
        }
        
        if(!empty(rtrim($empty_str,',')))
        {
            _error(400,$text="Failer",rtrim($empty_str,','));    
        } 
    }
    function _GeraHash($length)
    { 
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    function _json($data)
    {
        _success(200,"SUCCESS",$data);
    } 
    function _get_header()
    {
        return getallheaders();
    }
        
    function imageexists($path, $url, $image) {
        $physicalfilename = $path . $image;
        if (file_exists($physicalfilename) && $image != '') {
            $filename = $url.$image;
        } else {
            $filename = $url.'base_image.jpg';
        }
        return $filename;
    }

    function dateformate($date)
    {
        return date('F d, Y', strtotime($date));
    }
    
    function is_menu_active($class="")
    {
        $CI = & get_instance();
        if($CI->uri->segment("1")==$class)
        {
            return "active";
        }
    }
    
    function is_menu_open($class="")
    {
        $CI = & get_instance();
        if($CI->uri->segment("1")==$class)
        {
            return "open";
        }
    }
    
    function check_empty_array($array)
    {
        if (in_array(null, $array)) {
            return false;
        } else {
            return true;
        }
    }
    
    function get_setting($label){
        $CI = & get_instance();
        $CI->db->select('label_value');
        $CI->db->from('app_setting');
        $CI->db->where('label',$label);
        $query = $CI->db->get();
        //_pre($CI->db->last_query());
        $data = $query->row_array();
        return $data['label_value'];
    }
    
    function authentication_check() {

        //if (!isset($_SERVER['PHP_AUTH_USER'])) {
          //  header('WWW-Authenticate: Basic realm="viiny is a tiny service"');
            //header('HTTP/1.0 401 Unauthorized');
           // _error(401, "Unauthorized");
            //exit();
        //}
        //if ($_SERVER['PHP_AUTH_USER'] == 'kruti' AND $_SERVER['PHP_AUTH_PW'] == 123123) {
            return true;
        //} else {
          //  header('WWW-Authenticate: Basic realm="viiny is a tiny service"');
            //header('HTTP/1.0 401 Unauthorized');
            //_error(401, "Incaorrect username and password access denied");
            //exit();
        //}
    }
    
    function header_check($header) {
        $CI = & get_instance();
        
        $required_key = array('Os-Type'); //'Device-Token'
        $missing = array_diff_key(array_flip($required_key), $header);
        if (isset($missing) && !empty($missing)) {
            _error(401, 'key missing', $missing);
        }
    }

    function updateheaderdata($header, $user_id) {
        //$CI = & get_instance();
        //update device token and os 
        // $data = array(
        //     'device_token' => $header['Device-Token'],
        //     'os_type' => $header['Os-Type']
        // );
        // $where_data = array(
        //     'user_id' => $user_id
        // );
        // $CI->gm->edit('users', $data, $where_data);
    }
    
    function otpgenerator($digits)
    {
        $i = 0; //counter
        $pin = ""; //our default pin is blank.
        while($i < $digits){
            //generate a random number between 0 and 9.
            $pin .= mt_rand(0, 9);
            $i++;
        }
        return $pin;
    }
    
    function status_lable($status){
        if($status == 'completed'){
            return '<span class="label label-sm label-success">'.ucfirst($status).'</span>';
        }else if($status == 'pending'){
            return '<span class="label label-sm label-warning">'.ucfirst($status).'</span>';
        }else if($status == 'pending'){
            return '<span class="label label-sm label-warning">'.ucfirst($status).'</span>';
        }
        else if($status == '2'){
            return '<span class="label label-sm label-success">Publice</span>';
        }
        else if($status == '1'){
            return '<span class="label label-sm label-info">Created</span>';
        }
        else if($status == '4'){
            return '<span class="label label-sm label-info">Sent for Approval</span>';
        }
        else if($status == '5'){
            return '<span class="label label-sm label-danger">Rejected</span>';
        }
        else if($status == '6'){
            return '<span class="label label-sm label-danger">Blocked</span>';
        }
        else if($status == '3'){
            return '<span class="label label-sm label-warning">Unpublice</span>';
        }
    }
    
    function validate_url($url) {
        $path = parse_url($url, PHP_URL_PATH);
        $encoded_path = array_map('urlencode', explode('/', $path));
        $url = str_replace($path, implode('/', $encoded_path), $url);

        return filter_var($url, FILTER_VALIDATE_URL) ? true : false;
    }
    
    function get_value($table,$select,$column,$id){
        $CI = & get_instance();
        $CI->db->select($select);
        $CI->db->from($table);
        $CI->db->where($column,$id);
        $query = $CI->db->get();
        //_pre($CI->db->last_query());
        $data = $query->row_array();
        return $data[$select];
    }
    
    function toSeconds($hours, $minutes, $seconds) {
        return ($hours * 3600) + ($minutes * 60) + $seconds;
    }
    
    function secToHR($seconds) {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds / 60) % 60);
        $seconds = $seconds % 60;
        return "$hours:$minutes:$seconds";
    }
    
    function x_week_range($date) {
        $ts = strtotime($date);
        $start = (date('w', $ts) == 0) ? $ts : strtotime('last monday', $ts);
        return array(date('Y-m-d', $start),
                     date('Y-m-d', strtotime('next sunday', $start)));
    }

    // For display Success Fail Alert Dialog
    function getSuccessFailJson($status){
        if(!empty($status))
        {
            $return['success'] = true;
            $return['id'] = $status;
            $return['message'] = 'Added Successfully';
           // return json_encode($return);
        }else
        {
            $return['success'] = false;
            $return['message'] = 'Something wrong.';

        }
        return json_encode($return);
    }
    
}