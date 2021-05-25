<?php

class M_Auth extends CI_model
{
    public function insertUser($data)
    {
        return $this->db->insert('user', $data);
    }
}
