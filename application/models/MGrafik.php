<?php
class MGrafik extends CI_Model{ 
    function get_jml_tipe(){
        $query = $this->db->query("SELECT `tipe_kepribadian`, COUNT(tipe_kepribadian) AS jumlahtipe FROM `tbhasiltes` GROUP by `tipe_kepribadian`");
        return $query;        
    } 
    function get_jml_jk(){
        $query = $this->db->query("SELECT `jenis_kelamin`, COUNT(jenis_kelamin) AS jumlahjk FROM `tbpenghuni` GROUP by `jenis_kelamin`");
        return $query;        
    } 
}
?>