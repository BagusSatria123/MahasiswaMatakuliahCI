<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

   public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        $this->load->model('mahasiswa_model');
        $this->load->model('cetak_model');


        if($this->session->userdata['level']!="user"){
            redirect('login','refresh');
        }
    }

   public function index()
   {
        $data = array(
            'title'=>'data mahasiswa',
            'mahasiswa'=>$this->mahasiswa_model->datatables()
        );
        $this->load->view('template/header_datatables_user',$data);
        $this->load->view('mahasiswa/user',$data);
        $this->load->view('template/footer_datatables_user');
   }

   public function laporan_pdf()
   {
    $this->load->library('pdf');

    $data['mahasiswa']=$this->cetak_model->view();
    $this->load->library('pdf');

    $this->pdf->setPaper('A4','potrait');
    $this->pdf->filename="laporan-petanikode.pdf";
    $this->pdf->load_view('mahasiswa/laporan', $data);  
    }
}
