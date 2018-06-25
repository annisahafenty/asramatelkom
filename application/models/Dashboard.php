<?php
class Dashboard extends CI_Model {

    public function get_datagedung(){
        $query = $this->db->query("SELECT * FROM tbgedung");
        return $query;
    }

    public function get_datakamar(){
        $query = $this->db->query("SELECT tbkamar.nama_kamar, tbgedung.nama_gedung, tbkamar.id_kamar, COUNT(tbisikamar.id_kamar) AS total FROM tbkamar JOIN tbgedung ON tbkamar.id_gedung=tbgedung.id_gedung LEFT JOIN tbisikamar ON tbisikamar.id_kamar=tbkamar.id_kamar GROUP BY tbkamar.id_kamar ORDER BY tbkamar.id_kamar ASC");
        return $query;
    }

    public function get_datapenghuni(){
        $query = $this->db->query("SELECT * FROM tbpenghuni LEFT JOIN tbhasiltes ON tbpenghuni.id_penghuni=tbhasiltes.id_penghuni");
        return $query;
    }
}
?>