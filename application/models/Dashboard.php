<?php
class Dashboard extends CI_Model {

    public function get_datagedung(){
        $query = $this->db->query("SELECT * FROM tbgedung");
        return $query;
    }

    public function get_datakamar(){
        $query = $this->db->query("SELECT * FROM tbkamar");
        return $query;
    }

    public function get_datapenghuni(){
        $query = $this->db->query("SELECT * FROM tbpenghuni LEFT JOIN tbhasiltes ON tbpenghuni.id_penghuni=tbhasiltes.id_penghuni");
        return $query;
    }
}
?>