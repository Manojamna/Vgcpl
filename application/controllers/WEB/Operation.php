<?php
/**
 * Created by PhpStorm.
 * User: sureshkerai
 * Date: 14/06/19
 * Time: 9:48 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Operation extends My_Listing_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->dynamic_load->add_js('footer', array('src' => asset_url('custom_js', 'custom_js/operation.js'), 'type' => 'text/javascript'));
        $this->load->model('operation_model');
    }
    public function index() {
        $data['header_menu'] = 'operation';
        $this->template->view(backend_view() . 'operation/operation');
    }

    public function add_operation() {
        $data['header_menu'] = 'addrole';
        $this->template->view(backend_view() . 'operation/add_operation', $data);
    }


    public function operation_detail($id) {
        $data['header_menu'] = 'operationdetail';
        $data['data'] = $this->operation_model->get_detail($id);

        $this->template->view(backend_view() . 'operation/edit_operation', $data);
    }

    public function geltabledata() {

        $column_order = array('name'); //set column field database for datatable orderable
        $column_search = array('name'); //set column field database for datatable searchable
        $list = $this->operation_model->get_data($_POST,$column_order,$column_search);
        $data = array();
        //_pre($data);
        $no = $_POST['iDisplayStart'];
        foreach ($list as $val) {
            $no++;
            $row['no'] = $no;
            $row['id'] = $val['id'];
            $row['name'] = $val['name'];
            $row['url'] = $val['url'];
            $data[] = $row;
        }

        $output = array(
            "sEcho" => $_POST['sEcho'],
            "recordsTotal" => $this->operation_model->count_all(),
            "recordsFiltered" => $this->operation_model->count_filtered($_POST,$column_order,$column_search),
            "data" => $data,
        );
        echo json_encode($output);
    }
    public function insert_data(){
        $input_data = $this->input->post(null,true);
        $ins = array(
            'name'=>$input_data['name'],
            'url'=>$input_data['url']
        );
        $status = $this->operation_model->add($ins);

        echo getSuccessFailJson($status);
    }

    public function edit_data(){
        $input_data = $this->input->post(null,true);

        $ins = array(
            'name'=>$input_data['name'],
            'url'=>$input_data['url']
        );
        $status = $this->operation_model->edit($ins, $input_data['id']);
        echo getSuccessFailJson($status);
    }

    public function deletedata() {
        $PostData = $this->input->post();
        if (isset($PostData) && count($PostData) > 0) {
            //remove space from post data
            $Params = array_map('trim', $PostData['data']);
            //process data
            extract($Params);
            //call function to change status
            $status = $this->operation_model->delete($id);
            //print response
            echo json_encode($status);
        }
        exit;
    }
}
