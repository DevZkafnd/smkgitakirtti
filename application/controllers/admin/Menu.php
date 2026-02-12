<?php

class Menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('Transaksi_model');
        $this->load->model('User_model');
        $this->load->helper(array('url', 'form', 'autonumber'));
    }

    public function data_jadwal()
    {
        $data['title'] = 'Dashboard';
        $id_user = $this->fungsi->user_login()->id_user;
        $jadwal['jadwal'] = $this->User_model->get_jadwal($id_user);
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
                'nama_ayah' => $user['nama_ayah'],
                'nama_ibu' => $user['nama_ibu'],
                'nama_wali' => $user['nama_wali'],
                'penghasilan_ortu' => $user['penghasilan_ortu'],
                'foto_siswa' => $user['foto_siswa'],
                'alamat' => $user['alamat']
            ];
        }

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/data_jadwal', $jadwal);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_jadwal()
    {
        $data['title'] = 'PPDB';
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

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/form_tambah_jadwal', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_jadwal_simpan()
    {
        $this->load->model('user_model');

        $id_jadwal = $this->input->post('id_jadwal');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');
        $mapel = $_FILES['mapel']['name'];

        if ($mapel = '') {
        } else {
            $config['upload_path'] = './assets/upload/mapel';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('mapel')) {
                echo "Foto Siswa Gagal Di-Upload";
            } else {
                $mapel = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_jadwal' => getAutoNumber('jadwal_pelajaran', 'id_jadwal', 'JDWL', 8),
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'mapel' => $mapel
        );

        $this->User_model->insert_data($data, 'jadwal_pelajaran');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Registrasi berhasil, silahkan login.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/menu/data_jadwal');
    }

    public function delete_jadwal($id)
    {
        $where = array('id_jadwal' => $id);
        $this->User_model->delete_data($where, 'jadwal_pelajaran');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Transaksi Berhasil Dihapus
        <button transaksi="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('admin/menu/data_jadwal');
    }

    public function edit_jadwal($id)
    {
        $data['title'] = 'Form Edit Mata Pelajaran';
        $where = array('id_jadwal' => $id);
        $jadwal['jadwal'] = $this->User_model->edit_data_jadwal($where, 'jadwal_pelajaran')->result();

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

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/form_edit_jadwal', $jadwal);
        $this->load->view('templates_admin/footer');
    }

    function edit_jadwal_simpan()
    {
        $id_jadwal = $this->input->post('id_jadwal');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');
        $mapel = $_FILES['mapel']['name'];

        if ($mapel = '') {
        } else {
            $config['upload_path'] = './assets/upload/mapel';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('mapel')) {
                echo "Foto Siswa Gagal Di-Upload";
            } else {
                $mapel = $this->upload->data('file_name');
            }
        }

        $data = array(
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'mapel' => $mapel
        );

        $where = array(
            'id_jadwal' => $id_jadwal
        );

        $this->User_model->update_data($where, $data, 'jadwal_pelajaran');
        redirect('admin/menu/data_jadwal');
    }

    public function data_biaya()
    {
        $data['title'] = 'Beranda';
        $biaya['biaya'] = $this->Transaksi_model->get_data_biaya()->result();
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

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/data_biaya', $biaya);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_biaya()
    {
        $data['title'] = 'PPDB';
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

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/form_tambah_biaya', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_biaya_simpan()
    {
        $this->load->model('user_model');

        $id = $this->input->post('id');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');
        $biaya_spp = $this->input->post('biaya_spp');
        $tahun = $this->input->post('tahun');

        $data = array(
            'id' => $id,
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'biaya_spp' => $biaya_spp,
            'tahun' => $tahun
        );

        $this->Transaksi_model->insert_data($data, 'biaya');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Registrasi berhasil, silahkan login.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/menu/data_biaya');
    }

    public function edit_biaya($id)
    {
        $data['title'] = 'Form Edit Data Kelas dan Jurusan';
        $where = array('id' => $id);
        $data_biaya['data_biaya'] = $this->User_model->edit_data_biaya($where, 'biaya')->result();

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

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/form_edit_biaya', $data_biaya);
        $this->load->view('templates_admin/footer');
    }

    function edit_biaya_simpan()
    {
        $id = $this->input->post('id');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');
        $biaya_spp = $this->input->post('biaya_spp');
        $tahun = $this->input->post('tahun');

        $data = array(
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'biaya_spp' => $biaya_spp,
            'tahun' => $tahun
        );

        $where = array(
            'id' => $id
        );

        $this->User_model->update_data($where, $data, 'biaya');
        redirect('admin/menu/data_biaya');
    }

    public function delete_biaya($id)
    {
        $where = array('id' => $id);
        $this->User_model->delete_data($where, 'biaya');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Transaksi Berhasil Dihapus
        <button transaksi="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('admin/menu/data_biaya');
    }

    public function data_kelas_jurusan()
    {
        $data['title'] = 'Dashboard';
        $id_user = $this->fungsi->user_login()->id_user;
        $kelas['kelas'] = $this->User_model->get_kelas($id_user);
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
                'nama_ayah' => $user['nama_ayah'],
                'nama_ibu' => $user['nama_ibu'],
                'nama_wali' => $user['nama_wali'],
                'penghasilan_ortu' => $user['penghasilan_ortu'],
                'foto_siswa' => $user['foto_siswa'],
                'alamat' => $user['alamat']
            ];
        }

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/data_kelas_jurusan', $kelas);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_kelas_jurusan()
    {
        $data['title'] = 'PPDB';
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

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/form_tambah_kelas_jurusan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_kelas_jurusan_simpan()
    {
        $this->load->model('user_model');

        $id = $this->input->post('id');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');

        $data = array(
            'id' => $id,
            'kelas' => $kelas,
            'jurusan' => $jurusan
        );

        $this->User_model->insert_data($data, 'kelas');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Registrasi berhasil, silahkan login.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/menu/data_kelas');
    }

    public function edit_kelas_jurusan($id)
    {
        $data['title'] = 'Form Edit Data Kelas dan Jurusan';
        $where = array('id' => $id);
        $kelas_jurusan['kelas_jurusan'] = $this->User_model->edit_data_kelas_jurusan($where, 'kelas')->result();

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

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/form_edit_kelas_jurusan', $kelas_jurusan);
        $this->load->view('templates_admin/footer');
    }

    function edit_kelas_jurusan_simpan()
    {
        $id = $this->input->post('id');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');

        $data = array(
            'kelas' => $kelas,
            'jurusan' => $jurusan
        );

        $where = array(
            'id' => $id
        );

        $this->User_model->update_data($where, $data, 'kelas');
        redirect('admin/menu/data_kelas_jurusan');
    }

    public function delete_kelas_jurusan($id)
    {
        $where = array('id' => $id);
        $this->User_model->delete_data($where, 'kelas');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Transaksi Berhasil Dihapus
        <button transaksi="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('admin/menu/data_kelas');
    }
}