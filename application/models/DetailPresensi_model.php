<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPresensi_model extends CI_Model {

    public function getDetailPresensiByIdPresensi($id_presensi) {
        $this->db->select('id_detail_presensi.*, mahasiswa.nim, mahasiswa.nama_mahasiswa');
        $this->db->from('id_detail_presensi');
        $this->db->join('mahasiswa', 'id_detail_presensi.id_mahasiswa = mahasiswa.id_mahasiswa');
        $this->db->where('id_presensi', $id_presensi);

        $query = $this->db->get();
        return $query->result();
    }

    public function updateStatusByNim($nim, $status) {
        // Assuming 'id_mahasiswa' is the foreign key in 'id_detail_presensi' table
        $this->db->select('id_mahasiswa');
        $this->db->where('nim', $nim);
        $query = $this->db->get('mahasiswa');

        if ($query->num_rows() > 0) {
            $id_mahasiswa = $query->row()->id_mahasiswa;

            // Update status in 'id_detail_presensi' table
            $this->db->where('id_mahasiswa', $id_mahasiswa);
            $this->db->update('id_detail_presensi', array('status' => $status));
        }
    }

    public function addDetailPresensiBatch($data) {
        $this->db->insert_batch('id_detail_presensi', $data);
    }
}
