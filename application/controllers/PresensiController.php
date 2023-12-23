<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PresensiController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Presensi_model');
        $this->load->model('DetailPresensi_model');
    }

    public function tambahPresensiForm() {
        $this->load->view('tambah_presensi_view');
    }

    public function tambahPresensi() {
        $id_matkul = $this->input->post('id_matkul');
        $tgl_presensi = $this->input->post('tgl_presensi');

        // Prepare data for presensi
        $presensi_data = array(
            'id_matkul' => $id_matkul,
            'tgl_presensi' => $tgl_presensi
        );

        // Insert presensi and get the inserted ID
        $presensi_id = $this->Presensi_model->addPresensi($presensi_data);

        // Get all mahasiswa (you might need to adjust this based on your actual mahasiswa data retrieval)
        $mahasiswa_data = $this->db->get('mahasiswa')->result_array();

        // Prepare data for detail presensi
        $detail_presensi_data = array();
        foreach ($mahasiswa_data as $mahasiswa) {
            $detail_presensi_data[] = array(
                'id_presensi' => $presensi_id,
                'id_mahasiswa' => $mahasiswa['id_mahasiswa'],
                'waktu' => date('Y-m-d H:i:s'), // Adjust this based on your requirement
                'status' => 'belum hadir' // Default status when adding presensi
            );
        }

        // Insert detail presensi
        $this->DetailPresensi_model->addDetailPresensiBatch($detail_presensi_data);

        redirect(base_url('detailpresensicontroller/view/' . $presensi_id));
    }
}
