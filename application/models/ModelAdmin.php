<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAdmin extends CI_Model
{
    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    
}