<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Auth');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'LalajoFilm: Cheapest Movie Tickets Online Booking';
		$this->load->view('templates/main_header', $data);
		$this->load->view('Main');
		$this->load->view('templates/main_footer');
	}

	public function theater()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Theater of LalajoFilm';
		$this->load->view('templates/main_header', $data);
		$this->load->view('Theater');
		$this->load->view('templates/main_footer');
	}
}
