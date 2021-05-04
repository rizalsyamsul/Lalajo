<?php


class M_Auth extends CI_model
{
    //Input username, lalu verifikasi username dari database. Bila ada pada database akan mengembalikan true
    public function login($username)
    {
        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        if ($user) {
            // usernya ada
            return true;
        } else {
            return false;
        }
    }
    
    // Mengambil seluruh user dari database
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }
    
    // Memasukkan user ke dalam database
    public function insertUser($data)
    {
        return $this->db->insert('user', $data);
    }
    
    // Edit data user yang meliputi nama depan, nama belakang, email, dan password. Lalu mencari ID kemudian update data
    public function editUser($id)
    {
        // Data akan di input secara post ke dalam database
        $data = [
            'nama_depan' => $this->input->post('namadepan', true),
            'nama_belakang' => $this->input->post('namabelakang', true),
            'email' => $this->input->post('email', true),
            'password' => $this->input->post('password')
        ];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    // Menghapus user dengan mencari IDnya terlebih dahulu
    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    // Mengambil data user berdasarkan IDnya
    public function getUserById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('user')->row_array();
    }
}
