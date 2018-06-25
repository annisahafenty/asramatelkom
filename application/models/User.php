<?php
class User extends CI_Model {

    public function get_user($username, $password){
        $query = $this->db->query("SELECT * FROM tbpenghuni WHERE username = '$username' AND password = '$password'");
        return $query;
    }   

    public function get_hasiltes(){
        $id_penghuni = $this->session->userdata['login']['id_mahasiswa'];
        $query = $this->db->query("SELECT * FROM tbhasiltes INNER JOIN tbpenghuni ON tbhasiltes.id_penghuni=tbpenghuni.id_penghuni WHERE tbhasiltes.id_penghuni='$id_penghuni'");
        return $query;
    }

    public function get_kepribadian(){
        $tipe_kepribadian = $this->session->userdata('tipe_kepribadian');
        $query = $this->db->query("SELECT * FROM tbtipekepribadian WHERE tipe_kepribadian = '$tipe_kepribadian'");
        return $query;

    }

}
?>
