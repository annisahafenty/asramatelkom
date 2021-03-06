<?php
class Kamar extends CI_Model {

    public function get_datakamar(){
        $query = $this->db->query("SELECT * FROM tbkamar JOIN tbgedung WHERE tbkamar.id_gedung = tbgedung.id_gedung");
        return $query;
    }

    public function get_datakamarperempuan(){
        $query = $this->db->query("SELECT * FROM tbkamar JOIN tbgedung ON tbkamar.id_gedung=tbgedung.id_gedung WHERE tbgedung.tipe_gedung='Asrama Perempuan'");
        return $query;
    }

    public function get_datakamarlakilaki(){
        $query = $this->db->query("SELECT * FROM tbkamar JOIN tbgedung ON tbkamar.id_gedung=tbgedung.id_gedung WHERE tbgedung.tipe_gedung='Asrama Laki-Laki'");
        return $query;
    }

    public function get_datakamarperempuan_isikamar($id_kamar_perempuan){
        $query = $this->db->query("SELECT * FROM tbisikamar WHERE id_kamar = '$id_kamar_perempuan' ORDER BY id_kamar ASC");
        return $query;
    }

    public function get_datakamarlaki_isikamar($id_kamar_laki){
        $query = $this->db->query("SELECT * FROM tbisikamar WHERE id_kamar = '$id_kamar_laki' ORDER BY id_kamar ASC");
        return $query;
    }

    public function get_penghuniisikamar($id_penghuni_isi_kamar){
        $query = $this->db->query("SELECT * FROM tbhasiltes INNER JOIN tbisikamar ON tbhasiltes.id_penghuni = tbisikamar.id_penghuni WHERE tbisikamar.id_penghuni = '$id_penghuni_isi_kamar'");
        return $query;
    }

    public function cek_kriteria($tipekepribadian_penghuni, $id_kamar_isi_kamar){
        $tipe_kepribadian = $this->session->userdata('tipe_kepribadian');
        $query = $this->db->query("SELECT * FROM tbkriteria k WHERE k.kriteria1 LIKE SUBSTR('$tipe_kepribadian',2,2) AND k.kriteria2 IN
            (SELECT SUBSTR('$tipekepribadian_penghuni',2,2) FROM tbisikamar i JOIN tbhasiltes h ON  i.id_penghuni = h.id_penghuni WHERE i.id_kamar = '$id_kamar_isi_kamar')");
        return $query;
    }

    public function input_penghuniperempuan($id_kamar_perempuan){
        $id_mahasiswa = $this->session->userdata('id_mahasiswa');
        $query = $this->db->query("INSERT IGNORE INTO tbisikamar (id_kamar, id_penghuni) VALUES ($id_kamar_perempuan, $id_mahasiswa)");
        return $query;
    }

    public function input_penghunilaki($id_kamar_laki){
        $id_mahasiswa = $this->session->userdata('id_mahasiswa');
        $query = $this->db->query("INSERT IGNORE INTO tbisikamar (id_kamar, id_penghuni) VALUES ($id_kamar_laki, $id_mahasiswa)");
        return $query;
    }

    public function lihatkamar(){
        $id_mahasiswa = $this->session->userdata('id_mahasiswa');
        $query = $this->db->query("SELECT * FROM tbpenghuni
                    INNER JOIN tbhasiltes ON tbpenghuni.id_penghuni=tbhasiltes.id_penghuni
                    INNER JOIN tbisikamar ON tbisikamar.id_penghuni=tbhasiltes.id_penghuni
                    INNER JOIN tbkamar ON tbisikamar.id_kamar=tbkamar.id_kamar
                    INNER JOIN tbgedung ON tbgedung.id_gedung = tbkamar.id_gedung WHERE tbpenghuni.id_penghuni='$id_mahasiswa'");
        return $query;
    }

    public function lihat_isikamar($kamar){
        $query = $this->db->query("SELECT * FROM tbpenghuni
                    INNER JOIN tbhasiltes ON tbpenghuni.id_penghuni=tbhasiltes.id_penghuni
                    INNER JOIN tbisikamar ON tbisikamar.id_penghuni=tbhasiltes.id_penghuni
                    INNER JOIN tbkamar ON tbisikamar.id_kamar=tbkamar.id_kamar WHERE tbisikamar.id_kamar='$kamar'");
        return $query;
    }    

    public function datakamar($kamar){
        $query = $this->db->query("SELECT * FROM tbkamar INNER JOIN tbgedung ON tbgedung.id_gedung = tbkamar.id_gedung WHERE tbkamar.id_kamar='$kamar'");
        return $query;
    }

    // public function bobot($kamar){
    //     $query = $this->db->query("SELECT
    //                 SUM(case when SUBSTRING(tipe_kepribadian, 2,2) = 'SF' then 1 else 0 end) as SF,
    //                 SUM(case when SUBSTRING(tipe_kepribadian, 2,2) = 'ST' then 1 else 0 end) as ST,
    //                 SUM(case when SUBSTRING(tipe_kepribadian, 2,2) = 'NT' then 1 else 0 end) as NT,
    //                 SUM(case when SUBSTRING(tipe_kepribadian, 2,2) = 'NF' then 1 else 0 end) as NF
    //                 FROM tbisikamar i JOIN tbhasiltes t ON i.id_penghuni = t.id_penghuni WHERE i.id_kamar = '$kamar'");
    //     return $query;
    // } 

    public function editgedung(){
        $query = $this->db->query("UPDATE `tbgedung` SET `nama_gedung`='$nama_gedung',`tipe_gedung`='$tipe_gedung' WHERE `tbgedung`.`id_gedung`='$id_gedung'");
        return $query;
    }
}
?>
