<?php
/**
 * Created by PhpStorm.
 * User: sureshkerai
 * Date: 14/06/19
 * Time: 9:48 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Product extends My_Listing_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->dynamic_load->add_js('footer', array('src' => asset_url('custom_js', 'custom_js/product.js'), 'type' => 'text/javascript'));
        $this->load->model('product_model');
        $this->load->model('role_model');
    }
    public function index() {
        $data['header_menu'] = 'product';
        $this->template->view(backend_view() . 'product/list_product');
    }

    public function add_product() {
        $data['header_menu'] = 'addproduct';
        $this->template->view(backend_view() . 'product/add_product');
    }
}
