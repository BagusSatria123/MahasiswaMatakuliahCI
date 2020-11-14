<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {

    public function getAllmahasiswa()
    {
        $query=$this->db->get('mahasiswa');
        return $query->result_array();
    }

    public function tambahdatamhs(){
        $data=[
        "nama" => $this->input->post('nama',true),
        "nim" => $this->input->post('nim',true),
        "email" => $this->input->post('email',true),
        "jurusan" => $this->input->post('jurusan',true),
        "jeniskelamin" => $this->input->post('jeniskelamin',true),
        "foto" => $this->uploadFoto(),
        ];
        $this->db->insert('mahasiswa', $data);
    }
    private function uploadFoto()
    {
        $config['upload_path']          = './foto';
        $config['allowed_types']        = 'jpeg|jpg|png|gif|svg';
        $config['max_size']             = '2048';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name');
        }
    }
        private function ubahFoto()
    {
        $id = $this->input->post('id');
        $mahasiswa = $this->getmahasiswaByID($id);

        if ($mahasiswa['foto'] == null) {
            # code...
            $foto = $this->uploadFoto();

        }else if (empty($_FILES['foto']['name'])) {
            $foto = $this->input->post('fotoLama');
        } else {
            $this->deleteFoto($this->input->post('id'));
            $foto = $this->uploadFoto();
        }
        return $foto;
    }
    private function deleteFoto($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('mahasiswa');
        $row = $query->row();
        unlink(".foto/$row->foto");
    }

    public function hapusdatamhs($id) {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
        $this->deleteFoto($id);
    }

    public function getmahasiswaByID($id)
    {
        return $this->db->get_where('mahasiswa',['id'=> $id])->row_array();
    }

    public function ubahdatamhs() {
        $data=[
            "nama" => $this->input->post('nama',true),
            "nim" => $this->input->post('nim',true),
            "email" => $this->input->post('email',true),
            "jurusan" => $this->input->post('jurusan',true),
            "jeniskelamin" => $this->input->post('jeniskelamin',true),
            "foto" => $this->ubahFoto(),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa() {
        $keyword=$this->input->post('keyword');
        $this->db->like('nama',$keyword);
        $this->db->or_like('jurusan',$keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
    public function datatabels(){
        $query = $this->db->order_by('id','DESC')->get('mahasiswa');
        return $query->result();
    }
}

/* End on file mahasiswa_model.php */

?>