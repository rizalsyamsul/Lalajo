<?php
class M_invoice extends CI_model
{

  // Mengembalikan seluruh kode film berdasarkan ID film.
  public function getKodeById($id)
  {
    $this->db->where('IdInvoice', $id);
    return $this->db->get('Kode')->row_array();
  }

}
