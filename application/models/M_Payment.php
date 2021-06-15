<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Payment extends CI_model
{
  public function getPaymentbyName($name)
  {
    $this->db->where('name', $name);
    return $this->db->get('booking')->result_array();
  }
  public function getSession()
  {
    return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
  }
  public function getSessionName()
  {
    return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row('name');
  }

  public function insertPayment($data)
  {
      return $this->db->insert('invoice', $data);
  }

  public function get1PaymentbyName($name)
  {
    $this->db->where('name', $name);
    return $this->db->get('booking')->row_array();
  }

}
