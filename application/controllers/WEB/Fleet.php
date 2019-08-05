<?php
/**
 * Created by PhpStorm.
 * User: sureshkerai
 * Date: 14/06/19
 * Time: 9:48 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Fleet extends My_Listing_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->dynamic_load->add_js('footer', array('src' => asset_url('custom_js', 'custom_js/fleet.js'), 'type' => 'text/javascript'));
        $this->load->model('fleet_model');
    }

    public function index() {
        $data['header_menu'] = 'fleet';
        $this->template->view(backend_view() . 'fleet/list_fleet');
    }

    public function add_fleet() {
        $data['header_menu'] = 'addfleet';
        $this->template->view(backend_view() . 'fleet/add_fleet');
    }
}
