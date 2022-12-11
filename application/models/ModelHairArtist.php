<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelHairArtist extends CI_Model
{
    public function getHairArtist()
    {
        // $this->db->select('nama');
        // $this->db->from('hair_artist');
        // return $this->db->get();
        return $this->db->get('hair_artist'); 
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