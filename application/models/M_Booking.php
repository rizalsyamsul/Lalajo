<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Booking extends CI_model
{
    
    public function insertBooking($data)
    {
        return $this->db->insert('booking', $data);
    }
    
}
