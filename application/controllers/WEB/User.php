<?php
/**
 * Created by PhpStorm.
 * User: sureshkerai
 * Date: 14/06/19
 * Time: 9:48 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class User extends My_Listing_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->dynamic_load->add_js('footer', array('src' => asset_url('custom_js', 'custom_js/user.js'), 'type' => 'text/javascript'));
        $this->load->model('user_model');
        $this->load->model('role_model');
    }
    public function index() {
        $data['header_menu'] = 'user';
        $this->template->view(backend_view() . 'user/users');
    }

    public function add_user() {
        $data['header_menu'] = 'adduser';
        $data['role']=$this->role_model->get_role();
        $this->template->view(backend_view() . 'user/add_user', $data);
    }


    public function user_detail($id) {
        $data['header_menu'] = 'userdetail';
        $data['data'] = $this->user_model->get_detail($id);

        $this->template->view(backend_view() . 'user/edit_user', $data);
    }

    public function geltabledata() {

        $column_order = array('name'); //set column field database for datatable orderable
        $column_search = array('name'); //set column field database for datatable searchable
        $list = $this->user_model->get_data($_POST,$column_order,$column_search);
        $data = array();
        //_pre($data);
        $no = $_POST['iDisplayStart'];
        foreach ($list as $val) {
            $no++;
            $row['no'] = $no;
            $row['id'] = $val['id'];
            $row['name'] = $val['name'];
            $row['mobile'] = $val['mobile'];
            $row['email'] = $val['email'];
            $row['gender'] = $val['gender'];
            $row['bio_info'] = $val['bio_info'];
            $row['date_of_birth'] = $val['date_of_birth'];
            $row['profile_image'] = $val['profile_image'];
            $data[] = $row;
        }

        $output = array(
            "sEcho" => $_POST['sEcho'],
            "recordsTotal" => $this->user_model->count_all(),
            "recordsFiltered" => $this->user_model->count_filtered($_POST,$column_order,$column_search),
            "data" => $data,
        );
        echo json_encode($output);
    }
    public function insert_data(){
        $input_data = $this->input->post(null,true);
        $ins = array(
            'name'=>$input_data['name'],
            'mobile'=>$input_data['mobile'],
            'email'=>$input_data['email'],
            'gender'=>$input_data['gender'],
            'password'=>md5($input_data['password']),
            'is_driver'=>$input_data['is_driver'],
            'user_for_plant'=>$input_data['user_for_plant'],
            'role'=>$input_data['role'],
            'bio_info'=>$input_data['bio_info'],
            'date_of_birth'=>$input_data['date_of_birth'],
        );

        $status = $this->user_model->add($ins);
        echo getSuccessFailJson($status);

    }

    public function edit_data(){
        $input_data = $this->input->post(null,true);

        $img = $this->change_img();
        if (!empty($img)) {
            $ins = array(
                'name' => $input_data['name'],
                'mobile' => $input_data['mobile'],
                'email' => $input_data['email'],
                'gender' => $input_data['gender'],
                'bio_info' => $input_data['bio_info'],
                'date_of_birth' => $input_data['date_of_birth'],
                'profile_image' => $img,
                'password' => md5($input_data['password']),
                'order_index' => $input_data['order_index']
            );
            $status = $this->user_model->edit($ins, $input_data['id']);
        }
        else{
            $ins = array(
                'name' => $input_data['name'],
                'mobile' => $input_data['mobile'],
                'email' => $input_data['email'],
                'gender' => $input_data['gender'],
                'bio_info' => $input_data['bio_info'],
                'date_of_birth' => $input_data['date_of_birth'],
                'password' => md5($input_data['password']),
                'order_index' => $input_data['order_index']
            );
            $status = $this->user_model->edit($ins, $input_data['id']);

        }

        echo getSuccessFailJson($status);


    }
    function change_img()
    {
        $f_name = $_FILES["profile_image"]["name"];
        $ext = substr($f_name, strpos($f_name, '.'), strlen($f_name) - 1);
        $file_name = $f_name;//ic_cate + category id + image extension
        $temp_name = $_FILES["profile_image"]["tmp_name"];
        $target_path = 'assets/images/' . $file_name;
        if (move_uploaded_file($temp_name, $target_path) == FALSE) {
            echo "<h1>Error in Uploading Image...</h1>";
        } else {
            $return['sucess'] = "Sucess";
        }
        return $file_name;
    }
    public function deletedata() {
        $PostData = $this->input->post();
        if (isset($PostData) && count($PostData) > 0) {
            //remove space from post data
            $Params = array_map('trim', $PostData['data']);
            //process data
            extract($Params);
            //call function to change status
            $status = $this->user_model->delete($id);
            //print response
            echo json_encode($status);
        }
        exit;
    }
}
