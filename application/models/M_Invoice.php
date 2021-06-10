<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Invoice extends CI_model
{
  public function getInvoicebyName($name)
  {
    $this->db->where('name', $name);
    return $this->db->get('invoice')->result_array();
  }
  public function getSession()
  {
    return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
  }
  public function getSessionName()
  {
    return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row('name');
  }
}
