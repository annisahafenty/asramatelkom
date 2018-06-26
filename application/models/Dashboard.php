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

    public function get_jumlahkamar(){
      $query = $this->db->query("SELECT COUNT(id_kamar) FROM tbkamar;");
      return $query->result();
    }

    public function get_datapenghuni(){
        $query = $this->db->query("SELECT * FROM tbpenghuni LEFT JOIN tbhasiltes ON tbpenghuni.id_penghuni=tbhasiltes.id_penghuni");
        return $query;
    }


    public function get_jumlahpenghuni(){
      $query = $this->db->query("SELECT COUNT(id_penghuni) FROM tbpenghuni;");
      return $query->result();
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

    public function get_soal_ei(){
        $query = $this->db->query("SELECT * FROM soal_ei");
        return $query;
    }

    public function get_soal_sn(){
        $query = $this->db->query("SELECT * FROM soal_sn");
        return $query;
    }

    public function get_soal_tf(){
        $query = $this->db->query("SELECT * FROM soal_tf");
        return $query;
    }

    public function get_soal_jp(){
        $query = $this->db->query("SELECT * FROM soal_jp");
        return $query;
    }

    public function editsoalei($id){
        $query = $this->db->query("SELECT * FROM soal_ei WHERE id='$id'");
        return $query;
    }
    public function editsoalsn($id){
        $query = $this->db->query("SELECT * FROM soal_sn WHERE id='$id'");
        return $query;
    }
    public function editsoaltf($id){
        $query = $this->db->query("SELECT * FROM soal_tf WHERE id='$id'");
        return $query;
    }
    public function editsoaljp($id){
        $query = $this->db->query("SELECT * FROM soal_jp WHERE id='$id'");
        return $query;
    }
}
?>
