<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in(); // pastikan user login
        $this->load->model('User_model');
        $this->load->model('Transaksi_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['total_siswa'] = $this->User_model->count_by_level(2); // Level 2 = Siswa
        $data['total_transaksi_bulan_ini'] = $this->Transaksi_model->get_total_transaksi_bulan_ini();
        $data['total_nominal_transaksi'] = $this->Transaksi_model->get_total_nominal_transaksi();
        $data['transaksi_hari_ini'] = $this->Transaksi_model->get_transaksi_hari_ini();

        $this->load->helper('active');
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer');
    }
}
