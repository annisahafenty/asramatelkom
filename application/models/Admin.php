<?php
class Admin extends CI_Model {

    public function get_datagedung(){
        $query = $this->db->query("SELECT COUNT(id_gedung) FROM tbgedung");
        return $query;
    }

    public function get_datakamar(){
        $query = $this->db->query("SELECT * FROM tbadmin WHERE username = '$username' AND password = '$password'");
        return $query;
    }

    public function get_datapenghuni(){
        $query = $this->db->query("SELECT * FROM tbadmin WHERE username = '$username' AND password = '$password'");
        return $query;
    }
    

}
?>