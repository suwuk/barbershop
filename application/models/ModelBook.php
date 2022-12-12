<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBook extends CI_Model
{
    public function getBook()
    {
        return $this->db->get('data_booking'); 
    }

    public function insert_data($data,$table){
        $this->db->insert($table, $data);
    }

    public function delete_data($where, $table)
    {
        $this->db->where('id_booking',$where['id_booking']);
        $this->db->delete($table);
    }

    public function getBookByUser($where)
    {  
        return $this->db->get_where('data_booking', $where); 
    }
}