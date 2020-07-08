<?php

class Barang_model extends CI_model {
    public function getAllBarang()
    {
        return $this->db->get('Barang')->result_array();
    }

    public function tambahDataBarang()
    {
        $data = [
            "id_barang" => $this->input->post('id_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "jenis_barang" => $this->input->post('jenis_barang', true),
            "jumlah_barang" => $this->input->post('jumlah_barang', true)
        ];

        $this->db->insert('barang', $data);
    }

    public function hapusDataBarang($id)
    {
        // $this->db->where('id_barang', $id);
        $this->db->delete('Barang', ['id_barang' => $id]);

    }

    public function getBarangById($id)
    {
        return $this->db->get_where('barang', ['id_barang' => $id])->row_array();
    }

    public function ubahDataBarang()
    {
        $data = [
            "id_barang" => $this->input->post('id_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "jenis_barang" => $this->input->post('jenis_barang', true),
            "jumlah_barang" => $this->input->post('jumlah_barang', true)
        ];

        $this->db->where('id_barang', $this->input->post('id_barang'));
        $this->db->update('barang', $data);
    }

    public function cariDataBarang()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('Id_Barang', $keyword);
        $this->db->or_like('Nama_Barang', $keyword);
        $this->db->or_like('Jenis_Barang', $keyword);
        $this->db->or_like('Jumlah_Barang', $keyword);
        return $this->db->get('barang')->result_array();
    }
}