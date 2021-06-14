<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('M_Booking');
        $this->load->model('M_Invoice');
    }

    public function index()
    {


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('film', 'Film', 'required');
        $this->form_validation->set_rules('cinema', 'Cinema', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        $this->form_validation->set_rules('tickets_amount', 'Amount of Tickets', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Book';
            $data['user'] = $this->M_Invoice->getSession();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('book/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'film' => $this->input->post('film'),
                'cinema'  => $this->input->post('cinema'),
                'date'  => $this->input->post('date'),
                'time'  => $this->input->post('time'),
                'tickets_amount'  => $this->input->post('tickets_amount')
            ];
            $this->M_Booking->insertBooking($data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>Booking successful!</div>'
            );
            redirect('book/index');
        }
    }

    public function choose_seat()
    {
        $data['title'] = 'Choose your Seat';
        $data['user'] = $this->M_Invoice->getSession();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('book/choose-seat', $data);
        $this->load->view('templates/footer', $data);
    }

    public function payment()
    {
        $data['title'] = 'Payment';
        $data['user'] = $this->M_Invoice->getSession();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('book/payment', $data);
        $this->load->view('templates/footer', $data);
    }
    public function invoice()
    {
        $data['title'] = 'Invoice';
        $data['user'] =  $this->M_Invoice->getSession();
        $name =  $this->M_Invoice->getSessionName();
        $data['inv'] = $this->M_Invoice->getInvoicebyName($name);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('book/invoice', $data);
        $this->load->view('templates/footer', $data);
    }
}
