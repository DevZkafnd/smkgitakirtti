<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat_transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Riwayat Transaksi';
        $data['semua_transaksi'] = $this->Transaksi_model->get_all_transaksi();

        $this->load->helper('active');
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_transaksi', $data);
        $this->load->view('templates_admin/footer');
    }

    public function delete_transaksi($id)
    {
        $where = array('order_id' => $id);

        $this->Transaksi_model->delete_data($where, 'tb_requesttransaksi');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Transaksi Berhasil Dihapus
        <button transaksi="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('admin/riwayat_transaksi');
    }
}
