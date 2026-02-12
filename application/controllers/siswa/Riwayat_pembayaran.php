<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat_pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Riwayat Pembayaran SPP';

        $id_user = $this->session->userdata('id_user');
        $data['riwayat'] = $this->Transaksi_model->get_riwayat_pembayaran_by_user($id_user);

        $this->load->helper('active');
        $this->load->view('templates_siswa/header', $data);
        $this->load->view('templates_siswa/sidebar');
        $this->load->view('siswa/riwayat_pembayaran', $data);
        $this->load->view('templates_siswa/footer');
    }

    //fitur cetak invoice
    public function cetak_invoice($id)
    {
        check_not_login();

        $data['title'] = 'Detail Invoice';
        $data['detail'] = $this->Transaksi_model->get_transaksi_id($id);

        $this->load->view('siswa/cetak_invoice', $data);
    }
}
