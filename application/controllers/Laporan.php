<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    /**
     * Memuat model 'M_invoice' untuk mengambil data dari database ketika dibutuhkan
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_invoice');
    }

    /**
     * Memuat view halaman laporan
     */
    public function display()
    {
        $this->load->view('Laporan');
    }
}
