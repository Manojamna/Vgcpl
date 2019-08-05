<?php

class My_Listing_Controller extends CI_Controller
{
    protected $page_permission=false;

    public function __construct(){
        parent::__construct();
        $this->page_permission  = page_view();
        $this->_admin_template();
        $this->_admin_assets();
        $this->_data_table_asset();
    }

    public function _admin_template(){
        $this->load->library('template', $this->config->item('backend_path') . 'template');
        $this->template->set_template($this->config->item('backend_path') . 'template');
    }

    public function _admin_assets(){
        $this->load->library('dynamic_load');

        $css_files = array(
            asset_url('global', 'plugins/pace/themes/pace-theme-flash.css'),
            asset_url('global', 'plugins/font-awesome/css/font-awesome.min.css'),
            asset_url('global', 'plugins/simple-line-icons/simple-line-icons.min.css'),
            asset_url('global', 'plugins/bootstrap/css/bootstrap.min.css'),
            asset_url('global', 'css/components-md.min.css'),
            asset_url('global', 'css/plugins-md.min.css'),
            asset_url('layouts', 'layout/css/layout.min.css'),
            asset_url('layouts', 'layout/css/themes/darkblue.min.css"'),
            asset_url('layouts', 'layout/css/custom.min.css'),
            asset_url('global', 'plugins/bootstrap-toastr/toastr.min.css'),
            asset_url('global', 'plugins/icheck/skins/all.css')
        );

        foreach ($css_files as $css_file)
            $this->dynamic_load->add_css(array('href' => $css_file, 'rel' => 'stylesheet', 'type' => 'text/css'));

        $js_files = array(
            asset_url('global', 'plugins/jquery.min.js'),
            asset_url('global', 'plugins/bootstrap/js/bootstrap.min.js'),
            asset_url('global', 'plugins/js.cookie.min.js'),
            asset_url('global', 'plugins/bootstrap-toastr/toastr.min.js'),
            asset_url('custom_js', 'custom_js/app.js'),
            asset_url('layouts', 'layout/scripts/layout.min.js'),
            asset_url('layouts', 'layout/scripts/demo.min.js'),
            asset_url('global', 'plugins/bootbox/bootbox.min.js'),
            asset_url('global', 'plugins/pace/pace.min.js'),
            asset_url('global', 'plugins/icheck/icheck.min.js')
        );

        foreach ($js_files as $js_file)
            $this->dynamic_load->add_js('footer', array('src' => $js_file, 'type' => 'text/javascript'));
    }

    public function _data_table_asset(){
        $this->dynamic_load->add_css(array('href' => asset_url('global', 'plugins/datatables/datatables.min.css'), 'rel' => 'stylesheet', 'type' => 'text/css'));
        $this->dynamic_load->add_css(array('href' => asset_url('global', 'plugins/datatables/plugins/bootstrap/datatables.bootstrap.css'), 'rel' => 'stylesheet', 'type' => 'text/css'));
        $this->dynamic_load->add_css(array('href' => asset_url('custom_css', 'custom_css/fontawesome-iconpicker.min.css'), 'rel' => 'stylesheet', 'type' => 'text/css'));
        $this->dynamic_load->add_js('footer', array('src' => asset_url('global', 'plugins/datatables/datatables.min.js'), 'type' => 'text/javascript'));
        $this->dynamic_load->add_js('footer', array('src' => asset_url('global', 'plugins/datatables/plugins/bootstrap/datatables.bootstrap.js'), 'type' => 'text/javascript'));
        $this->dynamic_load->add_js('footer', array('src' => asset_url('global', 'plugins/jquery-validation/js/jquery.validate.min.js'), 'type' => 'text/javascript'));
        $this->dynamic_load->add_js('footer', array('src' => asset_url('global', 'plugins/jquery-validation/js/additional-methods.min.js'), 'type' => 'text/javascript'));
    }

}