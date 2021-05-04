<?php
class M_Booking extends CI_model
{
  // Mengembalikan data yang berisi list invoice untuk kemudian dipilih
  public function getAllInvoice()
  {
    //mengembalikan seluruh data yang ada di seluruh tabel invoice
    return $this->db->get('invoice')->result_array();
  }

  // Mengembalikan data invoice berdasarkan id invoice
  public function getdataById($id)
  {
    // mencari idinvoice yang sesuai dengan id yang ingin dicari
    $this->db->where('IdInvoice', $id);
    // mengembalikan data dari database yang sudah di sortir berdasarkan idnya
    return $this->db->get('invoice')->row_array();
  }

  // Mengembalikan kode booking invoice berdasarkan id invoice
  public function getkodeById($id)
  {
    // mencari idinvoice yang sesuai dengan id yang ingin dicari
    $this->db->where('IdInvoice', $id);
    // mengembalikan data kode booking dari database yang sudah di sortir berdasarkan idnya
    return $this->db->get('tiket')->row_array('KodeBooking');
  }

}
