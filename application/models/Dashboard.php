<?php
class Dashboard extends CI_Model {

    public function get_datagedung(){
        if ($perempuan) {
            $query_data_gedung = mysqli_query($db,"SELECT * FROM tbgedung WHERE tipe_gedung='Asrama Perempuan'");
          } else {
            $query_data_gedung = mysqli_query($db,"SELECT * FROM tbgedung WHERE tipe_gedung='Asrama Laki-Laki'");
          }
    }

    public function get_datakamar(){
        // $query = $this->db->query("SELECT * FROM tbadmin WHERE username = '$username' AND password = '$password'");
        // return $query;
    }

    public function get_datapenghuni(){
        $query = $this->db->query("SELECT * FROM tbpenghuni LEFT JOIN tbhasiltes ON tbpenghuni.id_penghuni=tbhasiltes.id_penghuni");
        return $query;
    }
}
?>