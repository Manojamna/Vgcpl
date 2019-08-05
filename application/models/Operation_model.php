<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Operation_model extends My_Base_model {
    protected $table_name = 'operation';
    protected $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

    public function getAllOperationWithStatus($roleID){
       // SELECT ro.operation_id, role.name FROM `role_operation` as ro , `operation`  as role  WHERE ro.id = role.id AND ro.role_id = 43
        $this->db->select('*');
        $this->db->from('role_operation');
        $this->db->join('operation', 'role_operation.id = operation.id');
        $this->db->where('role_operation.role_id=', $roleID);
        $query = $this->db->get();
        $result = $query->result_array();

        foreach($result as $row){
            $data['id'] = $row['id'];
            $data['name'] = $row['name'];
           // $data['lineColor'] = '#b7e021';
            $alldata[] = $data;
        }
        _pre($this->db->last_query());
        return $alldata;
    }
    public function getOperatrionByID($roleID){
        $this->db->select('*');
        $this->db->from('role_operation');
        $this->db->where('role_operation.role_id=', $roleID);
        $query = $this->db->get();
        $result = $query->result_array();
        $alldata = [];
        foreach($result as $row){
            array_push($alldata, $row['operation_id']);
        }
        return $alldata;
    }

    public function operationlist(){
        $this->db->select('o.id,o.name,o.parent_id,is_menu,ic_name');
        $this->db->from('operation as o');
        $this->db->where('o.is_deleted', '0');
        $this->db->where('o.parent_id', '0');
        $this->db->order_by('o.order_index', 'ASC');
        $query = $this->db->get();
        $result = $query->result_array();

        foreach($result as $key => $row){
            $result[$key]['child'] = self::child_operation($row['id']);
        }
        return $result;
    }

    private function child_operation($parent){
        $this->db->select('o.id,o.name,o.parent_id,is_menu,ic_name');
        $this->db->from('operation as o');
        $this->db->where('o.is_deleted', '0');
        $this->db->where('o.parent_id', $parent);
        $this->db->order_by('o.order_index', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getprentfromchild($ids){
        $this->db->select('DISTINCT(parent_id)');
        $this->db->from('operation as o');
        $this->db->where_in('o.id', $ids);
        $query = $this->db->get();
        $result = $query->result_array();
        $parents = [];
        foreach($result as $key => $row){
            array_push($parents, $row['parent_id']);
        }
        return $parents;
    }

}