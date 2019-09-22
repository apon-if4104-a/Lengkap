<?php

class Obat_Model extends CI_Model
{
    public function Input_Obat()
    {
        $Obat = [
            "ID_Obat" => $this->input->post('nama2', true),
            "Nama_Obat" => $this->input->post('nama3', true),
            "Keterangan_Obat" => $this->input->post('nama4', true),
            "Harga_Obat" => $this->input->post('nama5', true),
            "Deskripsi_Obat" => $this->input->post('nama6', true),
            "Foto_Obat" => $this->input->post('nama1', true)
        ];

        $this->db->insert('obat', $Obat);
    }
}
