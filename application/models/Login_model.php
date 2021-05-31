<?php 

class Login_model extends CI_Model {

    function validasi_username($username) {
        $result = $this->db->query("SELECT * FROM users WHERE email='$username' LIMIT 1");
        return $result;
    }

    function validasi_password($username, $password) {
        $result = $this->db->query("SELECT * FROM users WHERE email='$username' AND password=MD5('$password') LIMIT 1");
        return $result;
    }

    public function insertDataRegister($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
