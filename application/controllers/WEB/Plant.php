<?php
/**
 * Created by PhpStorm.
 * User: sureshkerai
 * Date: 14/06/19
 * Time: 9:48 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Plant extends My_Listing_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->dynamic_load->add_js('footer', array('src' => asset_url('custom_js', 'custom_js/plant.js'), 'type' => 'text/javascript'));
        $this->load->model('plant_model');
    }
    public function index() {
        $data['header_menu'] = 'plant';
        $this->template->view(backend_view() . 'plant/list_plant');
    }

    public function add_plant() {
        $data['header_menu'] = 'addplant';
        $this->template->view(backend_view() . 'plant/add_plant');
    }
}
