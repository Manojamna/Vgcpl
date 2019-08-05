<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Partunit extends My_Listing_Controller {

    public function __construct() {
        parent::__construct();
        $this->dynamic_load->add_js('footer', array('src' => asset_url('custom_js', 'custom_js/partunit.js'), 'type' => 'text/javascript'));

        // load user model
        $this->load->model('partunit_model');
    }

    public function index() {
        $data['header_menu'] = 'partunit';
        $this->template->view(backend_view() . 'partunit/partunit');
//        if($this->page_permission==true){
//            $data['header_menu'] = 'partunit';
//            $this->template->view(backend_view() . 'partunit/partunit');
//        }else{
//            $data['header_menu'] = 'permission';
//            $this->template->view(backend_view() . 'permission/permission', $data);
//        }
    }

    public function add_partunit() {
        $data['header_menu'] = 'addpartunit';
        $this->template->view(backend_view() . 'partunit/add_partunit', $data);
//        if ($this->page_permission == true)
//        {
//            $data['header_menu'] = 'addpartunit';
//            $this->template->view(backend_view() . 'partunit/add_partunit', $data);
//        }else{
//            $data['header_menu'] = 'permission';
//            $this->template->view(backend_view() . 'permission/permission', $data);
//        }
    }

    public function partunit_detail($id) {
        $data['header_menu'] = 'partunitdetail';
        $data['data'] = $this->partunit_model->get_detail($id);

        $this->template->view(backend_view() . 'partunit/edit_partunit', $data);
    }    
    public function getpartunit() {

        $column_order = array('name'); //set column field database for datatable orderable
        $column_search = array('name'); //set column field database for datatable searchable
        $list = $this->partunit_model->get_data($_POST,$column_order,$column_search);
        $data = array();
        //_pre($data);
        $no = $_POST['iDisplayStart'];
        foreach ($list as $val) {
            $no++;
            $row['no'] = $no;
            $row['id'] = $val['id'];
            $row['name'] = $val['name'];
            $data[] = $row;
        }

        $output = array(
            "sEcho" => $_POST['sEcho'],
            "recordsTotal" => $this->partunit_model->count_all(),
            "recordsFiltered" => $this->partunit_model->count_filtered($_POST,$column_order,$column_search),
            "data" => $data,
        );
        echo json_encode($output);
    }

    public function insert_partunit(){
        $input_data = $this->input->post(null,true);
        $ins = array(
            'name'=>$input_data['name']
        );
        $status = $this->partunit_model->add($ins);
        echo getSuccessFailJson($status);
    }

    public function edit_partunit(){
        $input_data = $this->input->post(null,true);
        $ins = array(
            'name'=>$input_data['name']
        );
        $status = $this->partunit_model->edit($ins,$input_data['id']);
        echo getSuccessFailJson($status);
    }

    public function deletepartunit() {
        $PostData = $this->input->post();
        if (isset($PostData) && count($PostData) > 0) {
            //remove space from post data
            $Params = array_map('trim', $PostData['data']);
            //process data
            extract($Params);
            //call function to change status
            $status = $this->partunit_model->delete($id);
            //print response
            echo json_encode($status);
        }
        exit;
    }
}