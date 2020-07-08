<?php

class Barang extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }

    public function index ()
    {
        $data['judul'] = 'Daftar Barang';
        $data['barang'] = $this->Barang_model->getAllBarang();
        if( $this->input->post('keyword') ) 
        {
            $data['barang'] = $this->Barang_model->cariDataBarang();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Barang';

        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|max_length[4]|min_length[4]');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('jumlah_barang', 'Jumlah Barang', 'required');

        if($this->form_validation->run() == FALSE ) 
        {
            $this->load->view('templates/header', $data);
            $this->load->view('barang/tambah');
            $this->load->view('templates/footer');
        }
        else
        {
           $this->Barang_model->tambahDataBarang();
           $this->session->set_flashdata('flash', 'Ditambahkan');
           redirect('Barang');
        }
    }

    public function hapus($id)
    {
        $this->Barang_model->hapusDataBarang($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('barang');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Barang';
        $data['barang'] = $this->Barang_model->getBarangById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('barang/detail', $data);
        $this->load->view('templates/footer');
    }


    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Barang';
        $data['barang'] = $this->Barang_model->getBarangById($id);
        $data['jenis_barang'] = ['Input Device', 'Proces Device', 'Output Device', 'Storage Unit'];

        $this->form_validation->set_rules('id_barang', 'Id Barang', 'required|max_length[4]|min_length[4]');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jenis_barang', 'Jenis Barang', 'required');
        $this->form_validation->set_rules('jumlah_barang', 'Jumlah Barang', 'required');

        if($this->form_validation->run() == FALSE ) 
        {
            $this->load->view('templates/header', $data);
            $this->load->view('barang/ubah', $data);
            $this->load->view('templates/footer');
        }
        else
        {
           $this->Barang_model->ubahDataBarang();
           $this->session->set_flashdata('flash', 'Diubah');
           redirect('Barang');
        }
    }
}