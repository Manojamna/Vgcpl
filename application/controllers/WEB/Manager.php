<?php
/**
 * Created by PhpStorm.
 * User: sureshkerai
 * Date: 14/06/19
 * Time: 9:48 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Manager extends My_Listing_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->dynamic_load->add_js('footer', array('src' => asset_url('custom_js', 'custom_js/manager.js'), 'type' => 'text/javascript'));
        $this->load->model('manager_model');
    }

    public function index() {
        $data['header_menu'] = 'manager';
        $this->template->view(backend_view() . 'manager/list_manager');
    }
}
