<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model'); // Memuat model Mahasiswa_model
    }
    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa(); // Mendapatkan data
        $this->load->view('mahasiswa_view', $data); // Menampilkan data mahasiswa ke view
    }
    public function search()
    {
        $keyword = $this->input->post('keyword'); // Ambil kata kunci pencarian dari form
        $data['mahasiswa'] = $this->Mahasiswa_model->search_mahasiswa($keyword); // Cari
        $this->load->helper('url');
        $this->load->view('Mahasiswa_view', $data); // Menampilkan hasil pencarian ke view
    }
}
