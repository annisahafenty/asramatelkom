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
		//$query = $this->db->query("SELECT * FROM tbpenghuni WHERE username = '$username' AND password = '$password'");
		$this->load->model('user');
		$query = $this->user->get_user($username, $password);
		$get_tipe = $this->user->get_hasiltes();
		foreach($get_tipe->result() as $row){
			$tipe_kepribadian = $row->tipe_kepribadian;
		}

		if($query->num_rows()>0 && $tipe_kepribadian == FALSE){
			$id_mahasiswa = '';

			foreach ($query->result() as $row){
				$id_mahasiswa = $row->id_penghuni;
				$jenis_kelamin = $row->jenis_kelamin;
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
			$this->load->view('indextes');
		}else if ($query->num_rows()>0 && $tipe_kepribadian == TRUE){	
			$this->session->set_userdata($newdata);	
			redirect('asrama/lihatkamar');		
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
