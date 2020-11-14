<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah_model extends CI_Model {

    public function getAllmatakuliah()
    {
        $query=$this->db->get('matakuliah');
        return $query->result_array();
    }

    public function tambahdatamatkul(){
        $data=[
        "kode" => $this->input->post('kode',true),
        "matakuliah" => $this->input->post('matakuliah',true),
        "jam" => $this->input->post('jam',true),
        "semester" => $this->input->post('semester',true),
        ];
        $this->db->insert('matakuliah', $data);
    }

    public function hapusdatamatkul($id_matkul) {
        $this->db->where('id_matkul', $id_matkul);
        $this->db->delete('matakuliah');
    }

    public function getmatakuliahByID($id_matkul)
    {
        return $this->db->get_where('matakuliah',['id_matkul'=> $id_matkul])->row_array();
    }

    public function ubahdatamatkul() {
        $data=[
            "kode" => $this->input->post('kode',true),
            "matakuliah" => $this->input->post('matakuliah',true),
            "jam" => $this->input->post('jam',true),
            "semester" => $this->input->post('semester',true),
            ];
        $this->db->where('id_matkul', $this->input->post('id_matkul'));
        $this->db->update('matakuliah', $data);
    }

    public function cariDataMatakuliah() {
        $keyword=$this->input->post('keyword');
        $this->db->like('matakuliah',$keyword);
        $this->db->or_like('semester',$keyword);
        return $this->db->get('matakuliah')->result_array();
    }
}


/* End on file matakuliah_model.php */

?>