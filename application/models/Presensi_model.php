<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presensi_model extends CI_Model {

    public function addPresensi($data) {
        $this->db->insert('presensi', $data);
        return $this->db->insert_id(); // Return the inserted ID
    }
}
