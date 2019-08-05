<?php
/**
 * Created by PhpStorm.
 * User: sureshkerai
 * Date: 14/06/19
 * Time: 9:48 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Customer extends My_Listing_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->dynamic_load->add_js('footer', array('src' => asset_url('custom_js', 'custom_js/customer.js'), 'type' => 'text/javascript'));
        $this->load->model('customer_model');
    }

    public function index() {
        $data['header_menu'] = 'customer';
        $this->template->view(backend_view() . 'customer/list_customer');
    }

    public function add_customer() {
        $data['header_menu'] = 'addcustomer';
        $this->template->view(backend_view() . 'customer/add_customer', $data);
    }

    public function customer_site() {
        $data['header_menu'] = 'customersite';
        $this->template->view(backend_view() . 'customer/site_customer', $data);
    }
}
