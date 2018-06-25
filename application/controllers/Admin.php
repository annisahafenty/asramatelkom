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
        $this->load->view('datagedung');
    }

    public function datakamar(){
        $this->load->view('datakamar');
    }    

    public function datapenghuni(){
        $this->load->view('datapenghuni');
    }    

    public function detailnilai(){
        $this->load->view('detailnilai');
    }    

	public function get_datagedung(){
		$this->load->model('admin');
        $data['tbgedung'] = $this->admin->get_datagedung()->result();	
		$this->load->view('dashboard', $data);
    }	
    
    public function upload_file(){
        $this->load->view('uploadfile');
    }
}
?>
