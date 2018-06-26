<?php
class Soal extends CI_Model {

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

    public function input_hasiltes($id_mahasiswa, $totalE, $totalI, $totalS, $totalN, $totalT, $totalF, $totalJ, $totalP, $hasil){
        $query = $this->db->query("INSERT IGNORE INTO tbhasiltes (id_penghuni, nilai_e, nilai_i, nilai_s, nilai_n, nilai_t, nilai_f, nilai_j, nilai_p, tipe_kepribadian) VALUES ($id_mahasiswa, $totalE, $totalI, $totalS, $totalN, $totalT, $totalF, $totalJ, $totalP, '$hasil')");
        return $query;

    }

    public function get_deskripsitipe(){
        $query = $this->db->query("SELECT * FROM tipe_kepribadian");
        return $query;
    }

  //   function get_admin_soal_ei(){
  //   $this->db->select("id,soal_e,soal_i");
  //   $this->db->from('soal_ei');
  //   $query = $this->db->get();
  //   return $query->result();
  //  }
  // }

}
?>
