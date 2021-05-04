<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    /**
     * Memuat model 'M_Auth' yang akan dibutuhkan untuk mengecek session user
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Auth');
    }

    /**
     * Memeriksa role user, role 1 untuk manager dan role 2 untuk member biasa atau customer
     */
    public function index()
    {
        if ($this->session->userdata('role_id') == "1") {
            redirect('manager');
        } else if ($this->session->userdata('role_id') == "2") {
            redirect('user');
        } else {
            $data['title'] = 'lalajoFilm';
            $this->load->view('templates/header', $data);
            $this->load->view('Main');
            $this->load->view('templates/footer');
        }
    }
}
