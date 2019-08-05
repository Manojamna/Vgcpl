<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_role_model extends My_Base_model {
    protected $table_name = 'user_role';
    protected $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }



}