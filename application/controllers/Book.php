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
        $this->load->model('M_Payment');
    }

    public function check_image($film)
    {
        if ($film == 'The Mentalist') {
            return 'mentalist.jpg';
        } else if ($film == 'Mortal Kombat') {
            return 'MortalKombat.jpg';
        } else if ($film == 'The Avenger') {
            return 'Avenger.jpg';
        } else if ($film == 'Joker') {
            return 'Joker.png';
        } else if ($film == 'Kingsman') {
            return 'Kingsman.jpg';
        } else if ($film == 'Keluarga Cemara') {
            return 'Cemara.jpg';
        } else if ($film == 'Suicide Squad') {
            return 'SuicideSquad.jpg';
        } else if ($film == 'The Raid') {
            return 'TheRaid.jpg';
        } else if ($film == 'Sausage Party') {
            return 'sosis.jpg';
        };
    }

    public function rand_numb()
    {
        return mt_rand(1000000, 99999999);
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('film', 'Film', 'required');
        $this->form_validation->set_rules('cinema', 'Cinema', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        $this->form_validation->set_rules('seat', 'seat', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Book';
            $data['user'] = $this->M_Invoice->getSession();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('book/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $film = $this->input->post('film');
            // $data['user'] = $this->M_Invoice->getSession();

            $data = [
                'name' => $this->M_Invoice->getSessionName(),
                'film' => $this->input->post('film'),
                'cinema'  => $this->input->post('cinema'),
                'date'  => $this->input->post('date'),
                'time'  => $this->input->post('time'),
                'seats'  => $this->input->post('seat'),
                'image' => $this->check_image($film),
                'bcode' => $this->rand_numb()
            ];
            $this->M_Booking->insertBooking($data);
            // $data['title'] = 'Book';
            // $data['user'] = $this->M_Invoice->getSession();
            // $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            // $this->load->view('templates/topbar', $data);
            // $this->load->view('book/choose-seat', $data);
            // $this->load->view('templates/footer', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>Booking successful!</div>'
            );
            redirect('book/index');
        }
    }


    public function payment()
    {
        $data['title'] = 'Payment';
        $data['user'] = $this->M_Payment->getSession();
        $name =  $this->M_Payment->getSessionName();
        $data['pay'] = $this->M_Payment->getPaymentbyName($name);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('book/payment', $data);
        $this->load->view('templates/footer', $data);

    }


    public function deletePayment($id)
    {
        $this->M_Payment->deletePayment($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Payment berhasil!</div>');
        redirect('book/payment');
    }

    public function insertPayment($id)
    {
      $old = $this->M_Payment->getPaymentbyid($id);
      $data = [
          'name' => $old['name'],
          'film' => $old['film'],
          'cinema'  => $old['cinema'],
          'date'  => $old['date'],
          'time'  => $old['time'],
          'harga' => 40000,
          'seats'  => $old['seats'],
          'code' => $this->rand_numb(),
          'image' => $old['image']

      ];
      $this->M_Invoice->insertInvoice($data);
      $this->M_Payment->deletePayment($id);
      $this->session->set_flashdata(
          'message',
          '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>Payment successful!</div>'
      );
      redirect('book/payment');
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
