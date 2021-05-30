<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Auth');
	}

	public function index()
	{
		if($this->session->userdata('role_id') == "1") {
			redirect('admin');	
		} else if($this->session->userdata('role_id') == "2") {
			redirect('user');
		} else{
			$data['title'] = 'Lalajo Film';
			$this->load->view('templates/auth_header',$data);
			$this->load->view('Main');
			$this->load->view('templates/auth_footer');
		}
		

	}
}
