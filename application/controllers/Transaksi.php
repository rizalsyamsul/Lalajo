<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    /**
     * Memuat model 'M_Transaksi' untuk mengambil data dari database ketika dibutuhkan
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Transaksi');
    }

    /**
     * Memuat view halaman transaksi
     */
    public function display()
    {
        $this->load->view('Transaksi');
    }
}
