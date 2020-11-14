<?php

defined('BASEPATH') or exit('No direct script access allowed');

class movie extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('movie/index');
        $this->load->view('template/footer');
    }
}
    
    /* End of file movie.php */
