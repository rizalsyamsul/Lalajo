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
		$data['title'] = 'Lalajo Film';
		$this->load->view('templates/main_header');
		$this->load->view('Main');
		$this->load->view('templates/main_footer');
	}
}
