<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Beranda';

        $this->load->view('templates_user/header');
        $this->load->view('user/kontak', $data);
        $this->load->view('templates_user/footer');
    }

    public function tambah_pesan_simpan()
    {
        $this->load->model('user_model');

        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $subjek = $this->input->post('subjek');
        $pesan = $this->input->post('pesan');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'subjek' => $subjek,
            'pesan' => $pesan
        );

        $this->user_model->insert_pesan($data, 'kontak');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Pesan berhasil dikirim.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('user/kontak');
    }
}
