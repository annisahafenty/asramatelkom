<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Admin extends CI_Controller {
    public function dashboard(){
        $this->load->view('dashboard');
    }

    public function soal(){
        $this->load->view('soal');
    }    

    public function datagedung(){
        $this->load->model('dashboard');
        $data['tbgedung'] = $this->dashboard->get_datagedung()->result();	
		$this->load->view('datagedung', $data);
    }

    public function datakamar(){
        $this->load->view('datakamar');
    }    

    public function datapenghuni(){
        $this->load->model('dashboard');
        $data['penghuni'] = $this->dashboard->get_datapenghuni()->result();	
		$this->load->view('datapenghuni', $data);
    }    

    public function detailnilai(){
        $this->load->view('detailnilai');
    }    
    
    public function upload_file(){
        $this->load->view('uploadfile');
    }    
}
?>
