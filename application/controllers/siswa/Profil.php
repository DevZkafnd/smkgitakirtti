<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        check_siswa();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Data User';
        $user = $this->User_model->cekData(['email' => $this->session->userdata('email')])->row_array();

        foreach ($user as $a) {
            $data = [
                'nik' => $user['nik'],
                'nis' => $user['nis'],
                'nama' => $user['nama'],
                'email' => $user['email'],
                'no_telp' => $user['no_telp'],
                'jenis_kelamin' => $user['jenis_kelamin'],
                'tgl_lahir' => $user['tgl_lahir'],
                'provinsi' => $user['provinsi'],
                'kabupaten' => $user['kabupaten'],
                'kecamatan' => $user['kecamatan'],
                'kelurahan' => $user['kelurahan'],
                'pekerjaan_ayah' => $user['pekerjaan_ayah'],
                'pekerjaan_ibu' => $user['pekerjaan_ibu'],
                'pekerjaan_wali' => $user['pekerjaan_wali'],
                'no_telp_ortu' => $user['no_telp_ortu'],
                'sekolah_asal' => $user['sekolah_asal'],
                'jurusan' => $user['jurusan'],
                'kelas' => $user['kelas'],
                'thn_lulus' => $user['thn_lulus'],
                'nama_ayah' => $user['nama_ayah'],
                'nama_ibu' => $user['nama_ibu'],
                'nama_wali' => $user['nama_wali'],
                'penghasilan_ortu' => $user['penghasilan_ortu'],
                'foto_siswa' => $user['foto_siswa'],
                'alamat' => $user['alamat']
            ];
        }
        $this->load->view('templates_siswa/header', $data);
        $this->load->view('templates_siswa/sidebar');
        $this->load->view('siswa/profil_saya', $data);
        $this->load->view('templates_siswa/footer');
    }

    public function edit_user($id)
    {
        $where = array('id_user' => $id);
        $data['title'] = 'Form Ubah Data User';
        $data['data_user'] = $this->User_model->get_data('user')->result();
        $data['user'] = $this->db->query("SELECT * FROM user us WHERE us.id_user='$id'")->result();

        $this->load->view('templates_siswa/header', $data);
        $this->load->view('templates_siswa/sidebar', $data);
        $this->load->view('siswa/edit_data_siswa', $data);
        $this->load->view('templates_siswa/footer');
    }

    public function edit_user_simpan()
    {
        $data['judul'] = 'Profil Saya';
        $user = $this->User_model->cekData(['email' => $this->session->userdata('email')])->row_array();
        foreach ($user as $a) {
            $data = [
                'nik' => $user['nik'],
                'nis' => $user['nis'],
                'user' => $user['nama'],
                'email' => $user['email'],
                'no_telp' => $user['no_telp'],
                'jenis_kelamin' => $user['jenis_kelamin'],
                'tgl_lahir' => $user['tgl_lahir'],
                'provinsi' => $user['provinsi'],
                'kabupaten' => $user['kabupaten'],
                'kecamatan' => $user['kecamatan'],
                'kelurahan' => $user['kelurahan'],
                'pekerjaan_ayah' => $user['pekerjaan_ayah'],
                'pekerjaan_ibu' => $user['pekerjaan_ibu'],
                'pekerjaan_wali' => $user['pekerjaan_wali'],
                'no_telp_ortu' => $user['no_telp_ortu'],
                'nama_ayah' => $user['nama_ayah'],
                'nama_ibu' => $user['nama_ibu'],
                'nama_wali' => $user['nama_wali'],
                'penghasilan_ortu' => $user['penghasilan_ortu'],
                'alamat' => $user['alamat']
            ];
        }
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', [
            'required' => 'Nama tidak Boleh Kosong'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('member/ubah-anggota', $data);
            $this->load->view('templates/templates-user/modal');
            $this->load->view('templates/templates-user/footer', $data);
        } else {
            $nik = $this->input->post('nik', true);
            $nis = $this->input->post('nis', true);
            $nama = $this->input->post('nama', true);
            $email = $this->input->post('email', true);
            $no_telp = $this->input->post('no_telp', true);
            $jenis_kelamin = $this->input->post('jenis_kelamin', true);
            $tgl_lahir = $this->input->post('tgl_lahir', true);
            $provinsi = $this->input->post('provinsi', true);
            $kabupaten = $this->input->post('kabupaten', true);
            $kecamatan = $this->input->post('kecamatan', true);
            $kelurahan = $this->input->post('kelurahan', true);
            $pekerjaan_ayah = $this->input->post('pekerjaan_ayah', true);
            $pekerjaan_ibu = $this->input->post('pekerjaan_ibu', true);
            $pekerjaan_wali = $this->input->post('pekerjaan_wali', true);
            $no_telp_ortu = $this->input->post('no_telp_ortu', true);
            $nama_ayah = $this->input->post('nama_ayah', true);
            $nama_ibu = $this->input->post('nama_ibu', true);
            $nama_wali = $this->input->post('nama_wali', true);
            $penghasilan_ortu = $this->input->post('penghasilan_ortu', true);
            $alamat = $this->input->post('alamat', true);
            //jika ada gambar yang akan diupload
            $foto_siswa = $_FILES['foto_siswa']['name'];
            if ($foto_siswa) {
                $config['upload_path'] = './assets/upload/user';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '3000';
                $config['max_width'] = '1024';
                $config['max_height'] = '1000';
                $config['file_name'] = 'pro' . time();
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto_siswa')) {
                    $gambar_lama = $data['user']['foto_siswa'];
                    if ($gambar_lama != 'default.jpg') {
                        unlink(FCPATH . 'assets/upload/' . $gambar_lama);
                    }
                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('foto_siswa', $gambar_baru);
                } else {
                }
            }
            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('pesan', '<div class="alert alertsuccess alert-message" role="alert">Profil Berhasil diubah </div>');
            redirect('siswa/profil');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telepon', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl Lahir', 'required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required');
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required');
        $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');
        $this->form_validation->set_rules('pekerjaan_wali', 'Pekerjaan Wali', 'required');
        $this->form_validation->set_rules('no_telp_ortu', 'No Telepon Ortu', 'required');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required');
        $this->form_validation->set_rules('penghasilan_ortu', 'No KTP', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    }
}
