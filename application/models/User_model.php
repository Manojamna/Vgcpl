<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends My_Base_model {
    protected $table_name = 'user';
    protected $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }
    public function addUser($data){
        $session_data = $this->session->userdata('user_data');
        $data['created_at'] =  date('Y-m-d H:i:s');
        $data['created_by'] = $data['created_by'] = $session_data['id'];
        $data['updated_at'] = date('Y-m-d H:i:s');
        $data['updated_by'] = $data['updated_by'] = $session_data['id'];
    
        $returnVal = $this->db->insert($this->table_name, $data);
        $insertID = $this->db->insert_id();
        $data['record_id'] = $insertID;
        // $this->db->insert($this->table_history, $data);
        return $insertID;
    }
    
    private function hash_password($password){
        return password_hash($password, PASSWORD_BCRYPT);
    }
    
    public function userdetail($id){
        $this->db->select('id,name,mobile,email,gender,profile_image,photo_document,is_driver,bio_info,date_of_birth,(SELECT GROUP_CONCAT(role_id) as role FROM user_role WHERE user_id='.$id.') as role');
        $this->db->from('user as u');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
}