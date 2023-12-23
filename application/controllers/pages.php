<?php
 
class pages extends CI_Controller{
 
    function __construct(){
        parent::__construct();
   
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }
 
    function index(){
        $this->load->model('m_dashboard');
        
        $data['simple']= $this->m_dashboard->matkul_simple();
        $data['pres']= $this->m_dashboard->list_presensi();
        $this->load->view('dashboard',$data);
    }
}