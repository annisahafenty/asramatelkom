<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Admin extends CI_Controller {

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
        $this->load->model('dashboard');
        $data['gedung'] = $this->dashboard->get_datagedung()->result();
		$this->load->view('datagedung', $data);
    }

    public function jumlahgedung(){
        $this->load->model('dashboard');
        $data['jmlgedung'] = $this->dashboard->get_jumlahgedung()->result();
		$this->load->view('dashboard', $data);
    }

    public function editgedung(){
        $this->load->model('dashboard');
        $data['editgedung'] = $this->dashboard->editgedung($id_gedung)->result();
        $this->load->view('editgedung', $data);
    }

    public function datakamar(){
        $this->load->model('dashboard');
        $data['kamar'] = $this->dashboard->get_datakamar()->result();
        $data['bobot'] = $this->dashboard->bobot($kamar)->result();
		$this->load->view('datakamar', $data);
    }

    public function detailkamar(){
        $this->load->view('detailkamar');
    }

    public function datapenghuni(){
        $this->load->model('dashboard');
        $data['penghuni'] = $this->dashboard->get_datapenghuni()->result();
        $this->load->view('datapenghuni', $data);
    }

    public function detailnilai(){
        $this->load->model('dashboard');
        $data['nilai'] = $this->dashboard->get_datapenghuni()->result();
        $this->load->view('detailnilai', $data);
    }

    public function upload_file(){
        $this->load->view('uploadfile');
    }

    // public function soal_ei(){
    //   $this->load->view('soalei');
    // }
    public function soal_ei(){

    $query = $this->Soal->get_soal_ei();
    $data['soal_ei'] = null;
    if($query){
     $data['soal_ei'] =  $query;
    }

      $this->load->view('soalei.php', $data);
    }

    public function soal_sn(){
      $this->load->view('soalsn');
    }

    public function soal_tf(){
      $this->load->view('soaltf');
    }

    public function soal_jp(){
      $this->load->view('soaljp');
    }

    public function tipe_kepribadian(){
      $this->load->view('deskripsi');
    }

}
?>
