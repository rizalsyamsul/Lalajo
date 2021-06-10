<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Invoice extends CI_model
{
  public function getInvoicebyName($name)
  {
    $this->db->where('name', $name);
    return $this->db->get('invoice')->result_array();
  }

  
}
