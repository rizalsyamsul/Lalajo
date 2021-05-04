<?php

class M_transaksi extends CI_model
{

  // Memasukkan data film ke dalam database
  public function insertTransaksi($data)
  {
    return $this->db->insert('transaksi', $data);
  }

  // Mengupdate data film berdasarkan id film
  public function editTransaksi($id)
  {
    // Data akan di input secara post ke dalam database
    $data = [
      'film' => $this->input->post('deskripsi', true),
      'jumlah' => $this->input->post('rating', true),
      'harga' => $this->input->post('judul'),
      'total' => $this->input->post('kategori', true)
    ];
    $this->db->where('idTransaksi', $id);
    $this->db->update('transaksi', $data);
  }

  // Menghapus data kursi di database berdasarkan ID Kursi
  public function deleteTransaksi($id)
  {
    $this->db->where('idTransaksi', $id);
    $this->db->delete('transaksi');
  }
}
