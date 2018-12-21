<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Home extends CI_Controller {

	public function index(){
		$this->load->view('home');
	}

	public function login(){
		$this->load->view('login');
	}

	public function user_login(){
		$this->output->enable_profiler(TRUE);
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('user');
		$query = $this->user->get_user($username, $password);

		
		if($query->num_rows()>0){
			$id_mahasiswa = '';
			$jenis_kelamin = '';
			foreach ($query->result() as $row){
				$id_mahasiswa = $row->id_penghuni;
				$jenis_kelamin = $row->jenis_kelamin;
				$tipe_kepribadian = $row->tipe_kepribadian;
			}
			$newdata = array(
				'username'  => $username,
				'password'     => $password,
				'id_mahasiswa' => $id_mahasiswa,
				'jenis_kelamin' => $jenis_kelamin,
				'tipe_kepribadian' => $tipe_kepribadian,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);	
			if($tipe_kepribadian==NULL){
				redirect('tes/indextes');
			}else{
				redirect('asrama/lihatkamar');
			}			
		}else{
			$this->session->set_flashdata('warning', 'gagal');
			redirect('home/login');
		}
	}

	public function user_logout(){
		$this->session->sess_destroy();
		redirect('home');
	}
}
?>
