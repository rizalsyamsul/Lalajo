<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Booking extends CI_model
{

    public function insertBooking($data)
    {
        return $this->db->insert('booking', $data);
    }
    
    public function getSessionName()
    {
      return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row('name');
    }


}
