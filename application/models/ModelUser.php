<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function update_data($data,$table){
        $this->db->where('id', $data['id']);
        $this->db->update($table, $data);
    }

    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(['role_id' => 2]);
        $this->db->limit(10, 0);
        return $this->db->get();
    }
    
    public function delete_data($where, $table)
    {
        $this->db->where('id',$where['id']);
        $this->db->delete($table);
    }
}