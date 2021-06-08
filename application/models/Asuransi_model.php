<?php 

class Asuransi_model extends CI_Model {

    public function tampil_data_asuransi()
    {
        return $this->db->query("SELECT * FROM asuransi");
    }

    // public function edit_data_register($where,$table){		
    //     return $this->db->get_where($table,$where);
    // }

    // public function update_registrasi($where, $table)
    // {
    //     return $this->db->get_where($table, $where);
    // }
}
