<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ppdb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url', 'form', 'autonumber'));
    }
    public function index()
    {
        $data['title'] = 'PPDB';

        $this->load->view('templates_user/header');
        $this->load->view('ppdb', $data);
        $this->load->view('templates_user/footer');
    }

    public function tambah_siswa_simpan()
    {
        $this->load->model('user_model');

        $id_siswa = $this->input->post('id_siswa');
        $nik = $this->input->post('nik');
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $no_telp = $this->input->post('no_telp');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $provinsi = $this->input->post('provinsi');
        $kabupaten = $this->input->post('kabupaten');
        $kecamatan = $this->input->post('kecamatan');
        $kelurahan = $this->input->post('kelurahan');
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
        $pekerjaan_wali = $this->input->post('pekerjaan_wali');
        $no_telp_ortu = $this->input->post('no_telp_ortu');
        $nama_ayah = $this->input->post('nama_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $nama_wali = $this->input->post('nama_wali');
        $penghasilan_ortu = $this->input->post('penghasilan_ortu');
        $foto_siswa = $_FILES['foto_siswa']['name'];

        if ($foto_siswa = '') {
        } else {
            $config['upload_path'] = './assets/upload/user';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_siswa')) {
                echo "Foto Siswa Gagal Di-Upload";
            } else {
                $foto_siswa = $this->upload->data('file_name');
            }
        }

        $foto_kk = $_FILES['foto_kk']['name'];

        if ($foto_kk = '') {
        } else {
            $config['upload_path'] = './assets/upload/user';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_kk')) {
                echo "Foto KK Gagal Di-Upload";
            } else {
                $foto_kk = $this->upload->data('file_name');
            }
        }

        $foto_ijazah = $_FILES['foto_ijazah']['name'];

        if ($foto_ijazah = '') {
        } else {
            $config['upload_path'] = './assets/upload/user';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_ijazah')) {
                echo "Foto Ijazah Gagal Di-Upload";
            } else {
                $foto_ijazah = $this->upload->data('file_name');
            }
        }

        $foto_akte = $_FILES['foto_akte']['name'];

        if ($foto_akte = '') {
        } else {
            $config['upload_path'] = './assets/upload/user';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_akte')) {
                echo "Foto Akte Gagal Di-Upload";
            } else {
                $foto_akte = $this->upload->data('file_name');
            }
        }
        $alamat = $this->input->post('alamat');
        $level = 2;

        $data = array(
            'id_siswa' => getAutoNumber('user', 'id_siswa', 'SIS', 8),
            'nik' => $nik,
            'nis' => $nis,
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'no_telp' => $no_telp,
            'jenis_kelamin' => $jenis_kelamin,
            'tgl_lahir' => $tgl_lahir,
            'provinsi' => $provinsi,
            'kabupaten' => $kabupaten,
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'pekerjaan_ayah' => $pekerjaan_ayah,
            'pekerjaan_ibu' => $pekerjaan_ibu,
            'pekerjaan_wali' => $pekerjaan_wali,
            'no_telp_ortu' => $no_telp_ortu,
            'nama_ayah' => $nama_ayah,
            'nama_ibu' => $nama_ibu,
            'nama_wali' => $nama_wali,
            'penghasilan_ortu' => $penghasilan_ortu,
            'foto_siswa' => $foto_siswa,
            'foto_kk' => $foto_kk,
            'foto_ijazah' => $foto_ijazah,
            'foto_akte' => $foto_akte,
            'alamat' => $alamat,
            'level' => $level,
        );

        $this->user_model->insert_data($data, 'user');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Registrasi berhasil, silahkan login.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('auth');
    }
}

/* End of file Register.php */
