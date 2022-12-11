<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelService extends CI_Model
{
    public function getServices()
    {
        return $this->db->get('services');
    }
    
    public function getHaircut(){
        return $this->db->get('haircut');
    }

    public function getShave(){
        return $this->db->get('shave');
    }

    public function getColoring(){
        return $this->db->get('coloring');
    }
    
    public function insert_data($data,$table){
        $this->db->insert($table, $data);
    }

    public function update_data($data,$table){
        $this->db->where('id', $data['id']);
        $this->db->update($table, $data);
    }

    public function delete_data($where, $table)
    {
        $this->db->where('id',$where['id']);
        $this->db->delete($table);
    }
   
}