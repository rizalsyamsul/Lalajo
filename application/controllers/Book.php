<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Invoice');
    }

    public function index()
    {
        $data['title'] = 'Book';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('book/index', $data);
        $this->load->view('templates/footer', $data);
    }
    public function payment()
    {
        $data['title'] = 'Payment';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('book/payment', $data);
        $this->load->view('templates/footer', $data);
    }
    public function invoice()
    {

        $data['title'] = 'Invoice';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $name = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row('name');
        $data['inv'] = $this->M_Invoice->getInvoicebyName($name);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('book/invoice', $data);
        $this->load->view('templates/footer', $data);
    }
}
