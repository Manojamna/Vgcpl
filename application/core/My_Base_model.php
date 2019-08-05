<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_Base_model extends CI_Model
{
    protected $table_name = '';
    protected $primary_key = 'id';

    public function __construct(){
        parent::__construct();
    }

    public function add($data){
        $session_data = $this->session->userdata('user_data');
        $data['created_at'] =  date('Y-m-d H:i:s');
        $data['created_by'] = $data['created_by'] = $session_data['id'];
        $data['updated_at'] = date('Y-m-d H:i:s');
        $data['updated_by'] = $data['updated_by'] = $session_data['id'];

        return $this->db->insert($this->table_name, $data);

    }

    public function edit($data,$id){
        $session_data = $this->session->userdata('user_data');
        $data['updated_at'] =  date('Y-m-d H:i:s');
        $data['updated_by'] =  $session_data['id'];

        $this->db->where($this->primary_key,$id);
        $this->db->update($this->table_name,$data);
        return true;
    }

    public function delete($id){
        $data = array('is_deleted'=>'1');
        $session_data = $this->session->userdata('user_data');
        $data['updated_at'] =  date('Y-m-d H:i:s');
        $data['updated_by'] = $data['updated_by'] = $session_data['id'];

        $this->db->where($this->primary_key,$id);
        $this->db->update($this->table_name,$data);

        //_pre($this->db->last_query());
        return true;
    }

    public function get_detail($id) {
        $id = base64_decode($id);
        return $this->db->get_where($this->table_name, array($this->primary_key => $id))
            ->row_array();
    }

    public function count_all() {
        return $this->db->from($this->table_name)->count_all_results();
    }

    public function get_where($where) {
        return $this->db->where($where)->get($this->table_name)->result();
    }

    //For Data Table
    private function _get_query($post,$column_order = array(),$column_search = array()) {
      //  $column_order = array('name'); //set column field database for datatable orderable
       // $column_search = array('name'); //set column field database for datatable searchable
        $order = array('id' => 'desc'); // default order

        $this->db->from($this->table_name);
        $this->db->where('is_deleted', '0');
        $i = 0;
        foreach ($column_search as $emp) { // loop column
            if (isset($post['sSearch']) && !empty($post['sSearch'])) {
                $post['sSearch'] = $post['sSearch'];
            } else
                $post['sSearch'] = '';
            if ($post['sSearch']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start();
                    $this->db->like($emp,$post['sSearch']);
                } else {
                    $this->db->or_like($emp,$post['sSearch']);
                }
                if (count($column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
        if (isset($post['iSortingCols']) && !empty($post['iSortingCols'])) { // here order processing
            $this->db->order_by($column_order[$post['iSortCol_0']-1], $post['sSortDir_0']);
        } else if (isset($order)) {
            //$order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_data($post,$column_order,$column_search) {

        $this->_get_query($post,$column_order,$column_search);
        if (isset($post['iDisplayLength']) && $post['iDisplayLength'] < 1) {
            $post['iDisplayLength'] = '10';
        } else
            $post['iDisplayLength'] = $post['iDisplayLength'];

        if (isset($post['iDisplayStart']) && $post['iDisplayStart'] > 1) {
            $_POST['iDisplayStart'] = $_POST['iDisplayStart'];
        }

        $this->db->limit($post['iDisplayLength'], $post['iDisplayStart']);
        $query = $this->db->get();
        //_pre($this->db->last_query());
        return $query->result_array();
    }

    function count_filtered($post,$column_order,$column_search) {
        $this->_get_query($post,$column_order,$column_search);
        $query = $this->db->get();
        return $query->num_rows();
    }


}