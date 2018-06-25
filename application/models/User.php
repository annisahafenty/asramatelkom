<?php
class User extends CI_Model {

    public function get_admin($username, $password){
        $query = $this->db->query("SELECT * FROM tbadmin WHERE username = '$username' AND password = '$password'");
        return $query;
    }

    public function get_user($username, $password){
        $query = $this->db->query("SELECT * FROM tbpenghuni WHERE username = '$username' AND password = '$password'");
        return $query;
    }    

    public function get_hasiltes(){
        $id_mahasiswa = $_SESSION['id_mahasiswa'];
        $query = $this->db->query("SELECT * FROM tbhasiltes INNER JOIN tbpenghuni ON tbhasiltes.id_penghuni=tbpenghuni.id_penghuni WHERE tbhasiltes.id_penghuni='$id_mahasiswa'");
        return $query;  
    }

    public function get_kepribadian(){
        $tipe_kepribadian = $_SESSION['tipe_kepribadian'];
        $query = $this->db->query("SELECT * FROM tbtipekepribadian WHERE tipe_kepribadian = '$tipe_kepribadian'");
        return $query;

    }

}
?>