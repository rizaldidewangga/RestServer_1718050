<?php

class Kendaraan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kendaraan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mobil';
        $data['kendaraan'] = $this->Kendaraan_model->getAllKendaraan();
        $this->load->view('templates/header', $data);
        $this->load->view('kendaraan/kendaraan', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Mobil';

        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('nama', 'NAMA', 'required');
        $this->form_validation->set_rules('plat', 'PLAT', 'required');
        $this->form_validation->set_rules('harga', 'HARGA', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('kendaraan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Kendaraan_model->tambahDataKendaraan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kendaraan');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Mobil';
        $data['kendaraan'] = $this->Kendaraan_model->getKendaraanById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('kendaraan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Edit Data Kendaraan';
        $data['kendaraan'] = $this->Kendaraan_model->getKendaraanById($id);
        
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('nama', 'NAMA', 'required');
        $this->form_validation->set_rules('plat', 'PLAT', 'required');
        $this->form_validation->set_rules('harga', 'HARGA', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('kendaraan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kendaraan_model->ubahDataKendaraan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kendaraan');
        }
    }

    public function hapus($id)
    {
        $this->Kendaraan_model->hapusDataKendaraan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kendaraan');
    }


}
