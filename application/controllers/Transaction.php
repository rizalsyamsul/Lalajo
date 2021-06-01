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
     * Memuat view halaman transaksi pembayaran
     */
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Pembayaran';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('Pembayaran', $data);
        $this->load->view('templates/footer');
    }

    public function pembayaran()
    {

        if ($transaksi['status'] == 'success') {
            $data = [
                'film' => $this->input->post('deskripsi', true),
                'jumlah' => $this->input->post('rating', true),
                'harga' => $this->input->post('judul'),
                'total' => $this->input->post('kategori', true)
            ];
            $this->M_Transaksi->insertTransaksi($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Pembayaran berhasil</div>');
            redirect('Pembayaran/success');
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pembayaran gagal!</div>');
            redirect('Pembayaran/cancel');
        }
}
