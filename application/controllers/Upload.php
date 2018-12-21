<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('csv_model');
                $this->load->library('upload');
        }

        public function index()
        {
                $this->load->view('uploadfile', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'csv';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('csv_file')){
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('uploadfile', $error);
                }else{
                        $data = $this->upload->data('file_name');
                        $this->readExcel('/'.$data);
                        redirect('admin/datapenghuni');
                }
        }

        function readExcel($nama_file)
        {
                $this->load->library('csvreader');
                $result =   $this->csvreader->parse_file('./uploads/'.$nama_file);//path to csv file
                $csvData =  $result;
                
                $this->load->model('csv_model');

                foreach($csvData as $field){
                        $nama_penghuni = $field['nama_penghuni'];
                        $jenis_kelamin = $field['jenis_kelamin'];
                        $program_studi = $field['program_studi'];
                        $nomor_hp = $field['nomor_hp'];
                        $kota = $field['kota'];
                        $username = $field['username'];
                        $password = $field['password'];
                        $this->csv_model->insert($nama_penghuni,$jenis_kelamin,$program_studi,$nomor_hp,$kota,$username,$password);                }
        }

}
?>