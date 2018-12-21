<?php
class User extends CI_Model {

    public function get_user($username, $password){
        $query = $this->db->query("SELECT a.id_penghuni, a.nama_penghuni, a.jenis_kelamin, a.username, a.password, b.tipe_kepribadian FROM tbpenghuni a LEFT JOIN tbhasiltes b ON b.id_penghuni=a.id_penghuni 
        WHERE a.username = '$username' AND a.password = '$password'");
        return $query;
    }

    public function get_hasiltes(){
        $id_penghuni = $this->session->userdata('id_mahasiswa');
        $query = $this->db->query("SELECT * FROM tbhasiltes INNER JOIN tbpenghuni ON tbhasiltes.id_penghuni=tbpenghuni.id_penghuni 
                            INNER JOIN   tbtipekepribadian ON tbtipekepribadian.tipe_kepribadian=tbhasiltes.tipe_kepribadian
                            WHERE tbhasiltes.id_penghuni='$id_penghuni'");
        return $query;
    }

    // public function get_kepribadian(){
    //     $tipe_kepribadian = $this->session->userdata('tipe_kepribadian');
    //     $query = $this->db->query("SELECT * FROM tbtipekepribadian WHERE tipe_kepribadian = '$tipe_kepribadian'");
    //     return $query;

    // }
}
?>
