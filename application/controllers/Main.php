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
		$data['user'] = $this->M_Auth->getSession();
		$data['title'] = 'LalajoFilm: Cheapest Movie Tickets Online Booking';
		$this->load->view('templates/main_header', $data);
		$this->load->view('Main');
		$this->load->view('templates/main_footer');
	}

	public function theater()
	{
		$data['user'] = $this->M_Auth->getSession();
		$data['title'] = 'Theater of LalajoFilm';
		$this->load->view('templates/main_header', $data);
		$this->load->view('Theater');
		$this->load->view('templates/main_footer');
	}

	public function action()
	{
		$data['user'] = $this->M_Auth->getSession();
		$data['title'] = 'Category Action';
		$this->load->view('templates/main_header', $data);
		$this->load->view('Action');
		$this->load->view('templates/main_footer');
	}

	public function romance()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Category Romance';
		$this->load->view('templates/main_header', $data);
		$this->load->view('Romance');
		$this->load->view('templates/main_footer');
	}
	public function comedy()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Category Comedy';
		$this->load->view('templates/main_header', $data);
		$this->load->view('Comedy');
		$this->load->view('templates/main_footer');
	}
	public function thriller()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Category Thriller';
		$this->load->view('templates/main_header', $data);
		$this->load->view('Thriller');
		$this->load->view('templates/main_footer');
	}
	public function Horror()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = 'Category Horror';
		$this->load->view('templates/main_header', $data);
		$this->load->view('Horror');
		$this->load->view('templates/main_footer');
	}
}
