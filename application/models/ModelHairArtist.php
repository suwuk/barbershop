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

}