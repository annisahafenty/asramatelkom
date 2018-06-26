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
