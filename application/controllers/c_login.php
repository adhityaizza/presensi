<?php
 
class c_login extends CI_Controller {
 
    function __construct() {
        parent::__construct();     
        $this->load->model('m_login');
    }
 
    function index() {
        $this->load->view('v_login');
    }
 
    function aksi_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );

        $user_data = $this->m_login->cek_login("dosen", $where)->row();
        
        if ($user_data) {
            // If login is successful, store user data in session
            $data_session = array(
                'id_dosen' => $user_data->id_dosen,
                'nama' => $username,
                'status' => "login"
            );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("index.php/pages"));
        } else {
            echo "Username dan password salah !";
        }
    }
 
    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
