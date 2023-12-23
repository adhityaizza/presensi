<?php

class m_dashboard extends CI_Model{
    public function matkul_simple(){
        return $this->db->get('matkul')->result_array();
    }

    public function list_presensi(){
        $this->db->select('presensi.*, matkul.nama_matkul');
        $this->db->from('presensi');
        $this->db->join('matkul', 'presensi.id_matkul = matkul.id_matkul');
        $query = $this->db->get();
        return $query->result_array();
    }
}