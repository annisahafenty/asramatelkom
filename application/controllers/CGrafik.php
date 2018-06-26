<?php
class CGrafik extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('mgrafik');
    }
    function index(){
        $x['data']=$this->mgrafik->get_data_stok();
        $this->load->view('dashboard',$x);
    }
}