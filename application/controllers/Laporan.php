<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    /**
     * Memeriksa apakah user sudah melakukan login sebagai manager.
     * Memuat model 'M_invoice' untuk mengambil data dari database ketika dibutuhkan
     */
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Invoice');
    }

    /**
     * Memuat view halaman laporan
     */
    public function display()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Laporan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('manager/Laporan', $data);
        $this->load->view('templates/footer');
    }
}
