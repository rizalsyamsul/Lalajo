<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manager extends CI_Controller
{
    /**
     * Memeriksa apakah user sudah melakukan login sebagai manager.
     */
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    /**
     * Mengambil data menggunakan session user yang akan dibutuhkan pada dashboard
     */
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard';
        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('manager/index', $data);
        // $this->load->view('templates/footer');
    }
}
