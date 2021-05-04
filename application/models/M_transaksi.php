<?php

class M_transaksi extends CI_model
{

  // Memasukkan data film ke dalam database
  public function insertFilm($data)
  {
    return $this->db->insert('film', $data);
  }

  // Mengupdate data film berdasarkan id film
  public function editFilm($id)
  {
    // Data akan di input secara post ke dalam database
    $data = [
      'deskripsi' => $this->input->post('deskripsi', true),
      'rating' => $this->input->post('rating', true),
      'judul' => $this->input->post('judul'),
      'kategori' => $this->input->post('kategori', true)
    ];
    $this->db->where('idFilm', $id);
    $this->db->update('film', $data);
  }

  // Memasukkan data kursi ke dalam database
  public function insertKursi($data)
  {
    return $this->db->insert('kursi', $data);
  }

  // mengupdate data kursi dalam database berdasarkan ID Kursi
  public function editKursi($id)
  {
    // Data akan di input secara post ke dalam database
    $data = [
      'noKursi' => $this->input->post('noKursi', true)
    ];
    $this->db->where('idKursi', $id);
    $this->db->update('kursi', $data);
  }

  // Menghapus data kursi di database berdasarkan ID Kursi
  public function deleteKursi($id)
  {
    $this->db->where('idKursi', $id);
    $this->db->delete('kursi');
  }
}
