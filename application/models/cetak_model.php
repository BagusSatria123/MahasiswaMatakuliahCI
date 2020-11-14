<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cetak_model extends CI_Model{

    public function view (){
        $this->db->select('nama','email','jurusan');
        $query= $this->db->get('mahasiswa');
        return $query->result();
    }
}
?>