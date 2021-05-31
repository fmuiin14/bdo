<?php 

class Admin_model extends CI_Model {

    public function tampil_data_register()
    {
        return $this->db->query("SELECT * FROM users WHERE is_active = '0'");
    }

    public function edit_data_register($where,$table){		
        return $this->db->get_where($table,$where);
    }

    public function update_registrasi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
