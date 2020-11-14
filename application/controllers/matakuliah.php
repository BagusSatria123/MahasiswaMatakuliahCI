<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah extends CI_Controller {

    //fungsi yang akan dijalankan saat class diintansiasinya
    public function __construct()
    {
        //digunakan untuk menjalankan fungsi construct pada class parent(ci_controller)
       parent::__construct();
       $this->load->model('matakuliah_model');
       $this->load->library('form_validation');
       
    }

    public function index()
    {

        // modul untuk load database
        // $this->load->database();
        $data['title']='List Mata Kuliah';
        $data['matakuliah']=$this->matakuliah_model->getAllmatakuliah();
        if ($this->input->post('keyword')) {
            # code ...
            $data['matakuliah']=$this->matakuliah_model->cariDataMatakuliah();
        }
        $this->load->view('template/header',$data);
        $this->load->view('matakuliah/index',$data);
        $this->load->view('template/footer');

    }


    public function tambah()
    {
        $data['title']='Form Menambahkan Data Matakuliah';

        //$this->form->validation->set_rules('fieldname', 'fieldlabel', trim|required|min_length[5]max_length[12]');

        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('matakuliah', 'Matakuliah', 'required|min_length[5]');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('matakuliah/tambah', $data);
            $this->load->view('template/footer');
        } else {
            #code...
            $this->matakuliah_model->tambahdatamatkul();
            //untuk flashdata mempunyai parameter (nama flashdata/alias,isi dari flashdatanya)
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('matakuliah','refresh');
        } 
    }
    public function hapus($id_matkul) {
        $this->matakuliah_model->hapusdatamatkul($id_matkul);

        $this->session->set_flashdata('flash-data','dihapus dari database');
        redirect('matakuliah','refresh');
    }

    public function detail($id_matkul)
    {

        $data['title']='Detail Matakuliah';
        $data['matakuliah']=$this->matakuliah_model->getmatakuliahByID($id_matkul);
        $this->load->view('template/header', $data);
        $this->load->view('matakuliah/detail', $data);
        $this->load->view('template/footer');
        
    }

    public function edit($id_matkul) {

        $data['title']= 'Form Edit Data matakuliah';
        $data['matakuliah']=$this->matakuliah_model->getmatakuliahByID($id_matkul);
        
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code ...
            $this->load->view('template/header', $data);
            $this->load->view('matakuliah/edit', $data);
            $this->load->view('template/footer');
        } else {
            #code ...
            $this->matakuliah_model->ubahdatamatkul();
            $this->session->set_flashdata('flash-data','diedit');
            redirect('matakuliah','refresh');

        }
    }
}

/* End of file Controllername.php */

?>