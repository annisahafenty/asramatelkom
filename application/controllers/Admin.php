<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Admin extends CI_Controller {
  // public function __construct(){
  // $this->load->model('admin');
  // }

  // public function login(){
  //   $this->load->view('loginadmin');
  // }
  //
  // public function admin_login(){
  //   $this->output->enable_profiler(TRUE);
  //   $username = $this->input->post('username');
  //   $password = $this->input->post('password');
  //   //$query = $this->db->query("SELECT * FROM tbpenghuni WHERE username = '$username' AND password = '$password'");
  //   $this->load->model('admin');
  //   $query = $this->admin->get_user($username, $password);
  //
  //
  //   if($query->num_rows()>0 && $tipe_kepribadian == FALSE){
  //
  //     $newdata = array(
  //       'username'  => $username,
  //       'password'     => $password,
  //       'logged_in' => TRUE
  //     );
  //     $this->session->set_userdata('login',$newdata);
  //     $this->load->view('dashboard');
  //   }else if ($query->num_rows()>0 && $tipe_kepribadian == TRUE){
  //     $this->session->set_userdata($newdata);
  //     redirect('asrama/lihatkamar');
  //   }else{
  //     $this->session->set_flashdata('warning', 'gagal');
  //
  //     redirect('home/login');
  //   }
  // }

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
