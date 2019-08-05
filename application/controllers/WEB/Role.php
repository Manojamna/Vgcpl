<?php
/**
 * Created by PhpStorm.
 * User: sureshkerai
 * Date: 14/06/19
 * Time: 9:48 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Role extends My_Listing_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->dynamic_load->add_js('footer', array('src' => asset_url('custom_js', 'custom_js/role.js'), 'type' => 'text/javascript'));
        $this->load->model('role_model');
    }
    public function index() {
        $data['header_menu'] = 'role';
        $this->template->view(backend_view() . 'role/role');
    }

    public function add_role() {
        $data['header_menu'] = 'addrole';
        $this->template->view(backend_view() . 'role/add_role', $data);
    }
}
