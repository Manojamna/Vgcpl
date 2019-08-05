<?php
/**
 * Created by PhpStorm.
 * User: sureshkerai
 * Date: 14/06/19
 * Time: 9:48 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Supplier extends My_Listing_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->dynamic_load->add_js('footer', array('src' => asset_url('custom_js', 'custom_js/supplier.js'), 'type' => 'text/javascript'));
        $this->load->model('supplier_model');
        $this->load->model('role_model');
    }
    public function index() {
        $data['header_menu'] = 'supplier';

        $this->template->view(backend_view() . 'supplier/list_supplier');
    }

    public function add_supplier() {
        $data['header_menu'] = 'addsupplier';

        $this->template->view(backend_view() . 'supplier/add_supplier');
    }
}
