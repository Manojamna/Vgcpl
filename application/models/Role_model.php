<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends My_Base_model {
    protected $table_name = 'role';
    protected $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

}