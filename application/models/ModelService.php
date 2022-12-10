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
}