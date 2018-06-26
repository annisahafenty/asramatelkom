<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Admin extends CI_Controller {
  // public function __construct(){
  // $this->load->model('admin');
  // }

  public function loginadmin(){
    $this->load->view('loginadmin');
  }

  public function admin_login(){
    $username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('dashboard');
		$query = $this->dashboard->get_admin($username, $password);
		if($query->num_rows()>0){
			$newdata = array(
				'username'  => $username,
				'password'  => $password,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			$this->load->view('dashboard');
		}else{
			$this->session->set_flashdata('warning', 'gagal');
			redirect('admin/loginadmin');
		}
  }

  public function admin_logout(){
		$this->session->sess_destroy();
		redirect('admin/loginadmin');
	}

    public function dashboard(){
        $this->load->view('dashboard');
    }

    public function soal(){
        $this->load->view('soal');
    }

    public function datagedung(){
        $query= $this->db->query("SELECT COUNT('id_gedung') FROM tbgedung;");
        $this->load->model('dashboard');
        $data['gedung'] = $this->dashboard->get_datagedung()->result();
		$this->load->view('datagedung', $data);
    }

    public function datakamar(){
        $this->load->model('dashboard');
        $data['kamar'] = $this->dashboard->get_datakamar()->result();
		$this->load->view('datakamar', $data);
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
