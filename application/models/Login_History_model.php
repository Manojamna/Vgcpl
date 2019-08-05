<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_History_model extends My_Base_model {
    protected $table_name = 'history_login';
    protected $primary_key = 'id';


    public function __construct() {
        parent::__construct();
    }
    public function add_login_history($data){
        $this->load->helper('url');
        $this->load->library('user_agent');

        $data['platform'] = $this->agent->platform();
        $data['browser'] = $this->agent->browser();
        $data['ipaddress'] = $this->input->ip_address();
        $data['os'] = $this->agent->platform();
        $data['browser_version'] = $this->agent->version();
        $data['full_user_agent_string'] = $_SERVER['HTTP_USER_AGENT'];

        $data['created_at'] =  date('Y-m-d H:i:s');
       // $data['created_by'] = $data['created_by'] = $session_data['id'];
      //  $data['updated_at'] = date('Y-m-d H:i:s');
       // $data['updated_by'] = $data['updated_by'] = $session_data['id'];

        $returnVal = $this->db->insert($this->table_name, $data);
      //  $insertID = $this->db->insert_id();
      //  $data['record_id'] = $insertID;
        // $this->db->insert($this->table_history, $data);
        return $returnVal;
    }

}