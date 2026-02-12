<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_jadwal extends CI_Controller
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
        $data['title'] = 'Data Jadwal';
        $data['jadwal'] = $this->Jadwal_model->get_all_jadwal();

        $this->load->helper('active');
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/data_jadwal', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_data_jadwal()
    {
        $data['title'] = 'Form Tambah Data Siswa';
        $data['kelas'] = $this->db->get('kelas')->result();      // Ambil semua data kelas
        $data['jurusan'] = $this->db->get('jurusan')->result();  // Ambil semua data jurusan
        $data['mapel'] = $this->db->get('mapel')->result();  // Ambil semua data jurusan

        $this->load->helper('active');
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_jadwal', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_data_jadwal_simpan()
    {
        $this->load->model('Jadwal_model');

        $id_kelas = $this->input->post('id_kelas');
        $id_jurusan = $this->input->post('id_jurusan');
        $id_mapel = $this->input->post('id_mapel');
        $hari = $this->input->post('hari');
        $jam_mulai = $this->input->post('jam_mulai');
        $jam_selesai = $this->input->post('jam_selesai');

        $data = array(
            'id_kelas' => $id_kelas,
            'id_jurusan' => $id_jurusan,
            'id_mapel' => $id_mapel,
            'hari' => $hari,
            'jam_mulai' => $jam_mulai,
            'jam_selesai' => $jam_selesai
        );

        $this->Jadwal_model->insert_data($data, 'jadwal');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Jadwal berhasil ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden">&times;</span></button></div>');
        redirect('admin/data_jadwal');
    }

    public function edit_data_jadwal($id)
    {
        // Ambil data jadwal dari model
        $data['jadwal'] = $this->Jadwal_model->get_detail_jadwal($id);

        // Jika data tidak ditemukan
        if (!$data['jadwal']) {
            show_404(); // jika data tidak ditemukan
        }

        $jadwal = $this->User_model->get_all_kelas_jurusan_dan_mapel();

        $data['kelas_list'] = $jadwal['kelas'];
        $data['jurusan_list'] = $jadwal['jurusan'];
        $data['mapel_list'] = $jadwal['mapel'];

        $data['title'] = 'Form Edit Data Jadwal';

        $this->load->helper('active');
        // Load view
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_edit_jadwal', $data);
        $this->load->view('templates_admin/footer');
    }

    function edit_data_jadwal_simpan()
    {
        $id = $this->input->post('id');

        // Pastikan data jadwal ada
        $jadwal = $this->db->get_where('jadwal', ['id' => $id])->row();

        if (!$jadwal) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Data jadwal tidak ditemukan.</div>');
            redirect('admin/data_jadwal');
            return;
        }

        // Ambil data input
        $data = array(
            'id_kelas' => $this->input->post('id_kelas'), //KELAS
            'id_jurusan' => $this->input->post('id_jurusan'), //JURUSAN
            'id_mapel' => $this->input->post('id_mapel'), //MAPEL
            'hari' => htmlspecialchars($this->input->post('hari')),
            'jam_mulai' => $this->input->post('jam_mulai'), //JAM MULAI
            'jam_selesai' => $this->input->post('jam_selesai'), //JAM SELESAI
        );

        $this->db->where('id', $id);
        $update = $this->db->update('jadwal', $data);

        if ($update) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data siswa berhasil diperbarui.</div>');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal memperbarui data siswa.</div>');
        }
        redirect('admin/data_jadwal');
    }

    public function hapus_data_jadwal($id)
    {
        $where = [
            'id' => $id
        ];
        $hapus = $this->User_model->hapus('jadwal', $where);
        if ($hapus) {
            echo "<script>";
            echo "alert('Data Jadwal berhasil dihapus')";
            echo "</script>";
            redirect('admin/data_jadwal', 'refresh');
        } else {
            echo "<script>";
            echo "alert('Data Jadwal gagal dihapus')";
            echo "</script>";
            redirect('admin/data_jadwal', 'refresh');
        }
    }
}
