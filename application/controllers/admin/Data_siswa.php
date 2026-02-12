<?php

class Data_siswa extends CI_Controller
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
        $data['title'] = 'Data Siswa';
        $data['user'] = $this->User_model->get_all_siswa_with_kelas_jurusan();

        $this->load->helper('active');
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/data_siswa', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_data_siswa()
    {
        $data['title'] = 'Form Tambah Data Siswa';
        $data['kelas'] = $this->db->get('kelas')->result();      // Ambil semua data kelas
        $data['jurusan'] = $this->db->get('jurusan')->result();  // Ambil semua data jurusan

        $this->load->helper('active');
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_siswa', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_data_siswa_simpan()
    {
        $this->load->model('user_model');

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
        $nama_ayah = $this->input->post('nama_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $nama_wali = $this->input->post('nama_wali');
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
        $pekerjaan_wali = $this->input->post('pekerjaan_wali');
        $no_telp_ortu = $this->input->post('no_telp_ortu');
        $sekolah_asal = $this->input->post('sekolah_asal');
        $id_kelas = $this->input->post('id_kelas');
        $id_jurusan = $this->input->post('id_jurusan');
        $thn_lulus = $this->input->post('thn_lulus');
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
            'sekolah_asal' => $sekolah_asal,
            'id_kelas' => $id_kelas,
            'id_jurusan' => $id_jurusan,
            'thn_lulus' => $thn_lulus,
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

        $this->user_model->insert_data($data, 'users');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Registrasi berhasil, silahkan login.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden">&times;</span></button></div>');
        redirect('admin/data_siswa');
    }

    public function edit_data_siswa($id_user)
    {
        // Ambil data siswa dari model
        $data['siswa'] = $this->User_model->get_detail_siswa($id_user);

        // Jika data tidak ditemukan
        if (!$data['siswa']) {
            show_404(); // jika data tidak ditemukan
        }

        $siswa = $this->User_model->get_all_kelas_dan_jurusan();

        $data['kelas_list'] = $siswa['kelas'];
        $data['jurusan_list'] = $siswa['jurusan'];

        $data['title'] = 'Form Edit Data Siswa';

        $this->load->helper('active');
        // Load view
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_edit_siswa', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit_data_siswa_simpan()
    {
        $id_user = $this->input->post('id_user');

        // Pastikan data siswa ada
        $siswa = $this->db->get_where('users', ['id_user' => $id_user])->row();

        if (!$siswa) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Data siswa tidak ditemukan.</div>');
            redirect('admin/data_siswa');
            return;
        }

        // Ambil data input
        $data = array(
            'nik' => htmlspecialchars($this->input->post('nik')),
            'nis' => htmlspecialchars($this->input->post('nis')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'email' => htmlspecialchars($this->input->post('email')),
            'no_telp' => htmlspecialchars($this->input->post('no_telp')),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'provinsi' => htmlspecialchars($this->input->post('provinsi')),
            'kabupaten' => htmlspecialchars($this->input->post('kabupaten')),
            'kecamatan' => htmlspecialchars($this->input->post('kecamatan')),
            'kelurahan' => htmlspecialchars($this->input->post('kelurahan')),
            'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah')),
            'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu')),
            'nama_wali' => htmlspecialchars($this->input->post('nama_wali')),
            'no_telp_ortu' => htmlspecialchars($this->input->post('no_telp_ortu')),
            'sekolah_asal' => htmlspecialchars($this->input->post('sekolah_asal')),
            'id_kelas' => $this->input->post('id_kelas'), //KELAS
            'id_jurusan' => $this->input->post('id_jurusan'), //JURUSAN
            'thn_lulus' => htmlspecialchars($this->input->post('thn_lulus')),
            'penghasilan_ortu' => htmlspecialchars($this->input->post('penghasilan_ortu')),
            'alamat' => htmlspecialchars($this->input->post('alamat'))
        );

        $this->db->where('id_user', $id_user);
        $update = $this->db->update('users', $data);

        if ($update) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data siswa berhasil diperbarui.</div>');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal memperbarui data siswa.</div>');
        }
        redirect('admin/data_siswa');
    }

    public function hapus_data_siswa($id)
    {
        $where = [
            'id_user' => $id
        ];
        $hapus = $this->User_model->hapus('users', $where);
        if ($hapus) {
            echo "<script>";
            echo "alert('Data Siswa berhasil dihapus')";
            echo "</script>";
            redirect('admin/data_siswa', 'refresh');
        } else {
            echo "<script>";
            echo "alert('Data Siswa gagal dihapus')";
            echo "</script>";
            redirect('admin/data_siswa', 'refresh');
        }
    }
}
