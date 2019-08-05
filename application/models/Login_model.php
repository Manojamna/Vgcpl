<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function authenticate($email, $password) {

        if (!empty($email) && !empty($password)) {

            $this->db->select('*');
            $this->db->from('user as u');
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->db->where('mobile',$email);
            }else{
                $this->db->where('email',$email);
            }
            $this->db->where('password', $password);
            $this->db->where('is_deleted', '0');
            $row = $this->db->get()->row_array();
            if (!empty($row)) {
                $row['profile_image'] = imageexists(AUTHOR_IMAGE_PATH, IMG_URL.AUTHOR_IMAGE_URL, $row['profile_image']);
                return $row;
            } else {
                return FALSE;
            }
        }
    }

    public function Getprofile($id) {
        $this->db->select('*');
        $this->db->where('id', base64_decode($id));
        $this->db->from('user');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
            $data['profile_image'] = imageexists(AUTHOR_IMAGE_PATH, IMG_URL.AUTHOR_IMAGE_URL, $data['profile_image']);
            return $data;
        }
    }

    public function Editprofile($profile_data, $u_id) {

        $this->db->where("id", base64_decode($u_id));
        $this->db->update("user", $profile_data);
        return TRUE;
    }

    public function current_password_check($current_password, $id, $email) {
       // _pre($email);
        $this->db->select('id');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('id', $id);
        $this->db->where('password', md5($current_password));
        $row = $this->db->get();
        $data = $row->row();
        if ($row->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
//
    public function check_mail($email) {
        $this->db->select('name');
        $this->db->from('user');
        $this->db->where('email', $email);
        $row = $this->db->get();
        $data = $row->row();
        if ($row->num_rows() == 1) {
            return $data;
        } else {
            return FALSE;
        }
    }
//
    public function check_token($token) {
        $decoded_token = base64_decode($token);
        $this->db->select('name');
        $this->db->from('user');
        $this->db->where('temp_token', $decoded_token);
        $row = $this->db->get();
        $data = $row->row();
        if ($row->num_rows() == 1) {
            return TRUE;
        }
    }

    public function passwordreset($q1, $token, $new_password) {
        $email = base64_decode($q1);
        $decoded_token = base64_decode($token);
        $this->db->select('name');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('temp_token', $decoded_token);
        $row = $this->db->get();
        $data = $row->row();
        if ($row->num_rows() == 1) {
            $data = array("password" => md5($new_password), "temp_token" => "");
            $this->db->where('email', $email);
            $this->db->update("user", $data);
            return TRUE;
        } else {
            return FALSE;
        }
    }
//
    public function updated_token($token, $email) {
        $data = array('temp_token' => $token);
        $this->db->where("email", $email);
        $this->db->update("user", $data);

        return TRUE;
    }
//
    public function update_password($user_new_data,$user_id) {
        $this->db->where("id", $user_id);
        $this->db->update("user", $user_new_data);

        return TRUE;
    }


    
}
