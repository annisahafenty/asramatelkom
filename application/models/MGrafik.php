<?php
class MGrafik extends CI_Model{ 
    function get_data_stok(){
        $query = $this->db->query("SELECT `tipe_kepribadian`, COUNT(tipe_kepribadian) AS jumlahtipe FROM `tbhasiltes` GROUP by `tipe_kepribadian`");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
 
}