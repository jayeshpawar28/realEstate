<?php

namespace App\Models;

use CodeIgniter\Model;

class CommonModel extends Model
{
    function insertData($table, $dataArray){
        return $this->db->table($table)->insert($dataArray);
    }
    
    function getData($table){

        if($table == 'add_property'){
            return $this->db->table($table)
            ->join('add_broker', 'add_broker.broker_id = add_property.broker_id')
            ->get()->getResult();

        } else if ($table == 'enquiry') {
            return $this->db->table($table)
            ->join('tbl_user', 'tbl_user.user_id = enquiry.user_id')
            ->join('add_property', 'add_property.property_id = enquiry.property_id')
            ->get()->getResult();

        }else{
            return $this->db->table($table)->get()->getResult();
        }
    }

    function deleteData($table, $column, $value){
        return $this->db->table($table)->where($column, $value)->delete();
    }

    function getDatawhere($table, $column, $id){

        if($table == 'add_property'){
            return $this->db->table($table)
            ->where($column, $id)
            ->join('add_broker', 'add_broker.broker_id = add_property.broker_id')
            ->get()->getResult();

        }else if($table == 'enquiry'){
            return $this->db->table($table)
            ->orderBy('enquiry_id', 'DESC')
            ->where($column, $id)
            ->join('add_broker', 'add_broker.broker_id = enquiry.broker_pk')
            ->join('add_property', 'add_property.property_id = enquiry.property_id')
            ->get()->getResult();

        }else {
            return $this->db->table($table)->where($column, $id)->get()->getResult();
        }
    }

    function updateData($table, $column, $value, $dataArray){
        return $this->db->table($table)->where($column, $value)->update($dataArray);
    }

    function checkWhere($table, $dataArray){
        return $this->db->table($table)->where($dataArray)->get()->getResult();
    }

    function searchResult($table, $keyword){
        return $this->db->table($table)
        ->like('title', $keyword)
        ->orLike('city', $keyword)
        ->orLike('property_type', $keyword)
        ->orLike('address', $keyword)
        ->orLike('state', $keyword)
        ->get()->getResult();
    }

    function totalCount($table){
        return $this->db->table($table)->countAll();
    }
}