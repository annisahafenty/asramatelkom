<?php
class admin extends CI_Model {

    public function get_admin($username, $password){
        $query = $this->db->query("SELECT * FROM tbadmin WHERE username = '$username' AND password = '$password'");
        return $query;
    }


}
?>
