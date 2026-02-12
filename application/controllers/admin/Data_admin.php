<?php

class Data_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('User_model');
        $this->load->helper(array('url', 'form', 'autonumber'));
    }

    public function index()
    {
        $data_user['data_user'] = $this->User_model->get_data_admin();
        $user = $this->User_model->cekData(['email' => $this->session->userdata('email')])->row_array();

        foreach ($user as $a) {
            $data = [
                'nama' => $user['nama'],
                'foto_siswa' => $user['foto_siswa']
            ];
        }

        $data['title'] = 'Data Admin';

        $this->load->helper('active');
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/data_admin', $data_user);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_data_admin()
    {
        $data['title'] = 'Form Tambah Data Admin';
        $id_user = $this->session->userdata('id_user'); // atau parameter

        $data['user'] = $this->User_model->get_user_by_id($id_user);

        $this->load->helper('active');
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_admin', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_data_admin_simpan()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');
        $level = 1;

        $data = array(
            'nik' => $nik,
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'jenis_kelamin' => $jenis_kelamin,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
            'level' => $level
        );

        $this->User_model->insert_data($data, 'users');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Registrasi berhasil, silahkan login.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/data_admin');
    }

    public function edit_data_admin($id_user)
    {
        // Ambil data admin dari model
        $data['admin'] = $this->User_model->get_detail_admin($id_user);

        // Jika data tidak ditemukan
        if (!$data['admin']) {
            show_404(); // jika data tidak ditemukan
        }

        $data['title'] = 'Form Edit Data Admin';

        $this->load->helper('active');
        // Load view
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_edit_admin', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_data_admin_simpan()
    {
        $id_user = $this->input->post('id_user');

        // Pastikan data siswa ada
        $siswa = $this->db->get_where('users', ['id_user' => $id_user])->row();
        if (!$siswa) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Data siswa tidak ditemukan.</div>');
            redirect('admin/data_admin');
            return;
        }

        // Ambil data input
        $data = array(
            'nik' => htmlspecialchars($this->input->post('nik')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'email' => htmlspecialchars($this->input->post('email')),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_telp' => htmlspecialchars($this->input->post('no_telp')),
            'alamat' => htmlspecialchars($this->input->post('alamat'))
        );

        $this->db->where('id_user', $id_user);
        $update = $this->db->update('users', $data);

        if ($update) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data siswa berhasil diperbarui.</div>');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal memperbarui data siswa.</div>');
        }
        redirect('admin/data_admin');
    }

    public function hapus_data_admin($id)
    {
        $where = [
            'id_user' => $id
        ];
        $hapus = $this->User_model->hapus('users', $where);
        if ($hapus) {
            echo "<script>";
            echo "alert('Data Admin berhasil dihapus')";
            echo "</script>";
            redirect('admin/data_admin', 'refresh');
        } else {
            echo "<script>";
            echo "alert('Data Admin gagal dihapus')";
            echo "</script>";
            redirect('admin/data_admin', 'refresh');
        }
    }
}
