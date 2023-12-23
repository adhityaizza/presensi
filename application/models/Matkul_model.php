<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul_model extends CI_Model {

    public function insertMatkul($data) {
        // Insert the data into the 'matkul' table
        $this->db->insert('matkul', $data);
    }
}
