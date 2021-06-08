<?php

class Asuransi_model extends CI_Model
{

    public function tampil_data_asuransi()
    {
        return $this->db->query("SELECT
        asuransi.id_asuransi,
        asuransi.nama_client,
        asuransi.alamat,
        asuransi.cp_orang,
        asuransi.no_hp_cp,
        asuransi.email_cp,
        asuransi.no_kantor,
        asuransi.email_kantor,
        asuransi.daftar_asuransi_id,
        asuransi.target_premi,
        asuransi.detail_spesifikasi_produk,
        asuransi.status_pengajuan_id,
        daftar_asuransi.nama_asuransi, 
        status_pengajuan.nama_status
      FROM
        asuransi
        INNER JOIN daftar_asuransi
          ON asuransi.daftar_asuransi_id = daftar_asuransi.id_daftar_asuransi
        INNER JOIN status_pengajuan 
          ON asuransi.status_pengajuan_id = status_pengajuan.id");
    }

    // public function edit_data_register($where,$table){		
    //     return $this->db->get_where($table,$where);
    // }

    // public function update_registrasi($where, $table)
    // {
    //     return $this->db->get_where($table, $where);
    // }
}
