<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in(); // pastikan user login
        $this->load->model('User_model');
        $this->load->model('Jadwal_model');
    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $user = $this->User_model->get_user_by_id($id_user);

        $jadwal = $this->Jadwal_model->get_jadwal_by_siswa($user->id_kelas, $user->id_jurusan);

        $data = [
            'title' => 'Jadwal Pelajaran',
            'jadwal' => $jadwal,
            'user' => $user
        ];

        $this->load->helper('active');
        $this->load->view('templates_siswa/header', $data);
        $this->load->view('templates_siswa/sidebar');
        $this->load->view('siswa/jadwal_pelajaran', $data);
        $this->load->view('templates_siswa/footer');
    }
}
