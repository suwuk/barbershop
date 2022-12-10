<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelProduk extends CI_Model
{
    public function getProduk()
    {
        return $this->db->get('produk');
    }

    public function insert_data($data,$table){
        $this->db->insert($table, $data);
    }
}