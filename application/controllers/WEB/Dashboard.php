<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class dashboard extends MY_Base_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('dashboard_model');
        $this->page_permission  = page_view();
    }

    public function index() {
        $this->dynamic_load->add_js('footer', array('src' => asset_url('pages','scripts/dashboard.min.js'), 'type' => 'text/javascript'));
        $this->dynamic_load->add_js('footer', array('src' => asset_url('global','plugins/moment.min.js'), 'type' => 'text/javascript'));
        $this->dynamic_load->add_js('footer', array('src' => asset_url('global','plugins/morris/morris.min.js'), 'type' => 'text/javascript'));
        $this->dynamic_load->add_js('footer', array('src' => asset_url('global','plugins/counterup/jquery.waypoints.min.js'), 'type' => 'text/javascript'));
        $this->dynamic_load->add_js('footer', array('src' => asset_url('global','plugins/counterup/jquery.counterup.min.js'), 'type' => 'text/javascript'));
        $this->dynamic_load->add_js('footer', array('src' => asset_url('global', 'plugins/jquery-validation/js/jquery.validate.min.js'), 'type' => 'text/javascript'));
        $this->dynamic_load->add_js('footer', array('src' => asset_url('global', 'plugins/jquery-validation/js/additional-methods.min.js'), 'type' => 'text/javascript'));
        $this->dynamic_load->add_js('footer', array('src' => asset_url('custom_js', 'custom_js/dashboard.js'), 'type' => 'text/javascript'));

        $data['header_menu'] = 'dashboard';

        $this->template->view(backend_view() . 'dashboard',$data);

    }
}
