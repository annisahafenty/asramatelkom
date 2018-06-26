<?php
class Dashboard extends CI_Model {

    public function get_admin($username, $password){
        $query = $this->db->query("SELECT * FROM tbadmin WHERE username = '$username' AND password = '$password'");
        return $query;
    }

    public function get_datagedung(){
        $query = $this->db->query("SELECT * FROM tbgedung");
        return $query;
    }
    public function editgedung($id_gedung){
        $query = $this->db->query("SELECT * FROM tbgedung WHERE id_gedung='$id_gedung'");
        return $query;
    }

    public function get_jumlahgedung(){
      $query = $this->db->query("SELECT COUNT(id_gedung) as 'jml' FROM tbgedung");
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

    public function bobot($kamar){
        $query = $this->db->query("SELECT
        SUM(case when SUBSTRING(tipe_kepribadian, 2,2) = 'SF' then 1 else 0 end) as SF,
        SUM(case when SUBSTRING(tipe_kepribadian, 2,2) = 'ST' then 1 else 0 end) as ST,
        SUM(case when SUBSTRING(tipe_kepribadian, 2,2) = 'NT' then 1 else 0 end) as NT,
        SUM(case when SUBSTRING(tipe_kepribadian, 2,2) = 'NF' then 1 else 0 end) as NF
        FROM tbisikamar i JOIN tbhasiltes t ON i.id_penghuni = t.id_penghuni WHERE i.id_kamar = '$kamar'");
        return $query;
    }

    
}
?>
