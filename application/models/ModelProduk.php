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

    public function update_data($data,$table){
        $this->db->where('id_produk', $data['id_produk']);
        $this->db->update($table, $data);
    }

    public function delete_data($where, $table)
    {
        $this->db->where('id_produk',$where['id_produk']);
        $this->db->delete($table);
    }
}