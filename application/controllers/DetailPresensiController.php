<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPresensiController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DetailPresensi_model');
    }

    public function view($id_presensi) {
        $data['detail_presensi'] = $this->DetailPresensi_model->getDetailPresensiByIdPresensi($id_presensi);
        $this->load->view('detail_presensi_view', $data);
    }

    public function updateStatus() {
        $nim = $this->input->post('nim');
        $status = 'hadir'; // Update status to 'hadir'

        $this->DetailPresensi_model->updateStatusByNim($nim, $status);

        // Redirect to a page or reload the current page
        redirect(base_url('detailpresensicontroller/view/' . $this->input->post('id_presensi')));
    }
}
