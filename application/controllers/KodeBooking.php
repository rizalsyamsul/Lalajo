<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KodeBooking extends CI_Controller
{

  //Memeriksa apakah user sudah melakukan login sebagai manager.
  //Memuat model 'M_Booking' untuk mengambil data dari database ketika dibutuhkan
  public function __construct()
  {
      parent::__construct();
      is_logged_in();
      $this->load->model('M_Booking');
  }
  //function index memanggil default halaman invoice
  public function index()
  {
      //mengambil data invoice user melalui model getallinvoice
      $data['all'] = getAllInvoice();
      //membuat data title invoice
      $data['title'] = 'Invoice';
      //memanggil header
      $this->load->view('templates/header', $data);
      //memanggil sidebar
      $this->load->view('templates/sidebar', $data);
      //memanggil view index invoice
      $this->load->view('Invoice/index', $data);
      //memanggil footer
      $this->load->view('templates/footer');
  }

  //function invoice memanggil halaman invoice untuk melihat invoice
  public function invoice($id)
  {
      //mengambil data invoice yang sudah dipilih user melalui getdatabyid
      $data['invoice'] = getdataById($id);
      //membuat data title invoice
      $data['title'] = 'Invoice';
      //memanggil header
      $this->load->view('templates/header', $data);
      //memanggil sidebar
      $this->load->view('templates/sidebar', $data);
      //memanggil view  invoice
      $this->load->view('Invoice/invoice', $data);
      //memanggil footer
      $this->load->view('templates/footer');
  }

  //function see_invoice memanggil halaman invoice untuk melihat invoice dan menampilkan kode booking
  public function see_invoice($id)
  {
      //mengambil data invoice yang sudah dipilih user melalui getdatabyid
      $data['invoice'] = getdataById($id);
      //mengambil data kode yang sudah dipilih user
      $data['kode'] = getkodeById($id);
      //membuat data title invoice
      $data['title'] = 'Invoice';
      //memanggil header
      $this->load->view('templates/header', $data);
      //memanggil sidebar
      $this->load->view('templates/sidebar', $data);
      //memanggil view  invoice
      $this->load->view('Invoice/invoice', $data);
      //memanggil footer
      $this->load->view('templates/footer');
  }


}
