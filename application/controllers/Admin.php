<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Admin extends CI_Controller {

  public function login(){
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
		redirect('admin/dashboard');
	}else{
		$this->session->set_flashdata('warning', 'gagal');
		redirect('admin/login');
	}
  }

    public function admin_logout(){
		$this->session->sess_destroy();
		redirect('admin/login');
	}

    public function dashboard(){
        $this->load->model('mgrafik');		
        $this->load->model('dashboard');
        $data['tipe'] = $this->mgrafik->get_jml_tipe()->result();
        $data['jk'] = $this->mgrafik->get_jml_jk()->result();
        $data['jmlgedung'] = $this->dashboard->get_jumlahgedung()->result();
        $data['jmlkamar'] = $this->dashboard->get_jumlahkamar()->result();
        $data['jmlpenghuni'] = $this->dashboard->get_jumlahpenghuni()->result();
        $this->load->view('dashboard', $data);
    }

    public function soal(){
        $this->load->view('soal');
    }

    public function datagedung(){
        $this->load->model('dashboard');
        $data['gedung'] = $this->dashboard->get_datagedung()->result();
        $data['jmlgedung'] = $this->dashboard->get_jumlahgedung()->result();
		$this->load->view('datagedung', $data);
    }

    public function editgedung(){
        $this->load->model('dashboard');
        $gedung = $this->uri->segment(3);
        $data['editgedung'] = $this->dashboard->editgedung($gedung)->result();        
        $this->load->view('editgedung', $data);
    }

    public function datakamar(){
        $this->load->model('dashboard');
        $data['kamar'] = $this->dashboard->get_datakamar()->result();
        $data['bobot'] = $this->dashboard->bobot($kamar)->result();
		$this->load->view('datakamar', $data);
    }

    public function detailkamar(){	
        $this->load->model('kamar');
        $kamar = $this->uri->segment(3);
        $data['kamar'] = $this->kamar->datakamar($kamar)->result();
        $data['isi_kamar'] = $this->kamar->lihat_isikamar($kamar)->result();        
        $this->load->view('detailkamar', $data);
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

    public function index_upload(){
        $this->load->view('uploadfile');
    }

    public function soal_ei(){
        $this->load->model('dashboard');
        $data['soal_ei'] = $this->dashboard->get_soal_ei()->result();
        $this->load->view('soalei', $data);
    }

    public function soal_sn(){
        $this->load->model('dashboard');
        $data['soal_sn'] = $this->dashboard->get_soal_sn()->result();
        $this->load->view('soalsn', $data);
    }

    public function soal_tf(){
        $this->load->model('dashboard');
        $data['soal_tf'] = $this->dashboard->get_soal_tf()->result();
        $this->load->view('soaltf', $data);
    }

    public function soal_jp(){
        $this->load->model('dashboard');
        $data['soal_jp'] = $this->dashboard->get_soal_jp()->result();
        $this->load->view('soaljp', $data);
    }

    public function tipe_kepribadian(){
      $this->load->view('deskripsi');
    }

    public function editsoalei(){
        $this->load->model('dashboard');
        $data['editsoal'] = $this->dashboard->editsoalei($id)->result();
        $this->load->view('editsoalei', $data);    
    }
    public function editsoalsn(){
        $this->load->model('dashboard');
        $data['editsoal'] = $this->dashboard->editsoalsn($id)->result();
        $this->load->view('editsoalsn', $data);    
    }
    public function editsoaltf(){
        $this->load->model('dashboard');
        $data['editsoal'] = $this->dashboard->editsoaltf($id)->result();
        $this->load->view('editsoaltf', $data);    
    }
    public function editsoaljp(){
        $this->load->model('dashboard');
        $data['editsoal'] = $this->dashboard->editsoaljp($id)->result();
        $this->load->view('editsoaljp', $data);    
    }
}
?>
