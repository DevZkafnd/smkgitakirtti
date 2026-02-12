<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in(); // pastikan user login
        $this->load->model('User_model');
    }

    public function index()
    {
        // Ambil data user lengkap
        $id_user = $this->session->userdata('id_user');
        $user = $this->User_model->get_user_by_id($id_user);

        if (!$user) {
            show_error('Data user tidak ditemukan');
        }

        $data = [
            'title' => 'Dashboard',
            'user' => $user,
            'nama' => $user->nama,
            'email' => $user->email,
            'id_kelas' => $user->id_kelas,
            'id_jurusan' => $user->id_jurusan,
            'foto_siswa' => $user->foto_siswa
        ];

        $this->load->helper('active');
        $this->load->view('templates_siswa/header', $data);
        $this->load->view('templates_siswa/sidebar');
        $this->load->view('siswa/dashboard', $data);
        $this->load->view('templates_siswa/footer');
    }
}
