<?php

class M_Film extends CI_model
{
  // Mengembalikan seluruh film yang ada pada database
  public function getAllFilm()
  {
    return $this->db->get('film')->result_array();
  }

  // Memasukkan data film kedalam database
  public function insertFilm($data)
  {
    return $this->db->insert('film', $data);
  }

  // Mengupdate data film berdasarkan ID film 
  public function editFilm($id)
  {
        // Data akan di input secara post ke dalam database
        $data = [
          'Deskripsi' => $this->input->post('Deskripsi'),
          'Rating' => $this->input->post('Rating'),
          'Judul' => $this->input->post('Judul'),
          'Kategori' => $this->input->post('Kategori')
        ];
     $this->db->where('id', $id);
     $this->db->update('film', $data);
  }

  // Menghapus data film pada database berdasarkan ID film
  public function deleteFilm($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('film');
  }

}
