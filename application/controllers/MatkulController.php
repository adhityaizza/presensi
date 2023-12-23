<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MatkulController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the model
        $this->load->model('Matkul_model');
    }

    public function tambahMatkulForm() {
        // Check if the user is logged in
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('login'));
        }

        // Load the form helper
        $this->load->helper('form');

        // Load the view for adding a new course
        $this->load->view('tambah_matkul');
    }

    public function tambahMatkulProcess() {
        // Check if the user is logged in
        if ($this->session->userdata('status') != 'login') {
            redirect(base_url('login'));
        }

        // Load form validation library
        $this->load->library('form_validation');

        // Set validation rules
        $this->form_validation->set_rules('nama_matkul', 'Nama Matkul', 'required');
        // Add more rules as needed

        if ($this->form_validation->run() == FALSE) {
            // If validation fails, load the form again
            $this->load->view('tambah_matkul');
        } else {
            // If validation passes, save the data to the database
            $id_dosen = $this->session->userdata('id_dosen');

            $data = array(
                'id_dosen' => $id_dosen,
                'nama_matkul' => $this->input->post('nama_matkul'),
                // Add more fields as needed
            );

            // Call the method in the model to insert data
            $this->Matkul_model->insertMatkul($data);

            // Redirect to the dashboard upon successful data input
            redirect('pages/index');
        }
    }
}
