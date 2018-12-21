<?php
class Csv_model extends CI_Model{
    function insert($nama_penghuni,$jenis_kelamin,$program_studi,$nomor_hp,$kota,$username,$password){
        // $insert_data['nama_penghuni'] = $data['nama_penghuni'];
        // $insert_data['jenis_kelamin'] = $data['jenis_kelamin'];
        // $insert_data['program_studi'] = $data['program_studi'];
        // $insert_data['nomor_hp'] = $data['nomor_hp'];
        // $insert_data['kota'] = $data['kota'];
        // $insert_data['username'] = $data['username'];
        // $insert_data['password'] = $data['password'];

        // $query = $this->db->insert('tbpenghuni', $data);
        $query = $this->db->query("INSERT INTO tbpenghuni(nama_penghuni,jenis_kelamin,program_studi,nomor_hp,kota,username,password) VALUES('$nama_penghuni','$jenis_kelamin','$program_studi','$nomor_hp','$kota','$username','$password')");
        
        // return $query;
    }
}
?>