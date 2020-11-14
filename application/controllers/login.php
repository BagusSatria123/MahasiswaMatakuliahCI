<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

   public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
    }

   public function index(){
      $data['title']='login';
      $this->load->view('template/header_login',$data);
      $this->load->view('login/index');
      $this->load->view('template/footer');
   }

   public function proses_login()
    {
        $username = htmlspecialchars($this->input->post('uname1'));
        $password = htmlspecialchars($this->input->post('pwd1'));

        

        $ceklogin = $this->login_model->login($username,$password);

        if($ceklogin){
            foreach($ceklogin as $row);
            $this->session->set_userdata('user',$row->username);
            $this->session->set_userdata('level',$row->level);


            if($this->session->userdata('level')=="admin"){
                redirect('mahasiswa/index');
            }elseif($this->session->userdata('level')=="user"){
                $nama = $this->session->userdata('user');
                if ($nama!='user') {
                    $data['title'] = 'Detail Mahasiswa';
                    $data['mahasiswa'] = $this->login_model->getById($nama);
                    $this->load->view('template/header', $data);
                    $this->load->view('mahasiswa/detail', $data);
                    $this->load->view('template/footer');

                }else{
                    redirect('user','refresh');
                }
            }
        

        }else{
            $data['pesan']="username dan password anda salah";
            $data['title']='login';
            $this->load->view('template/header_login',$data);
            $this->load->view('login/index',$data);
            $this->load->view('template/footer');

            //redirect('login/index','refresh');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('login','refresh');
    }
}
?>