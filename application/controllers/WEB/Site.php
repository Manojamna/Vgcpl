<?php
/**
 * Created by PhpStorm.
 * User: sureshkerai
 * Date: 14/06/19
 * Time: 9:48 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Site extends My_Listing_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->dynamic_load->add_js('footer', array('src' => asset_url('custom_js', 'custom_js/site.js'), 'type' => 'text/javascript'));
        $this->load->model('site_model');
        $this->load->model('role_model');
    }
    public function index() {
        $data['header_menu'] = 'site';
        $this->template->view(backend_view() . 'site/add_site');
    }

    public function add_sitet1() {
        $data['header_menu'] = 'addsitet1';
        $this->template->view(backend_view() . 'site/add_site_type1');
    }

    public function add_sitet2() {
        $data['header_menu'] = 'addsitet2';
        $this->template->view(backend_view() . 'site/add_site_type2');
    }
}
