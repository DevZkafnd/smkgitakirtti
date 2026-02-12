<?php

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Halaman Login';

        $this->load->view('login', $data);
    }

    public function process()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
            'required' => 'Email wajib diisi.',
            'valid_email' => 'Format email tidak valid.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]', [
            'required' => 'Password wajib diisi.',
            'min_length' => 'Password minimal 4 karakter.'
        ]);

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {
            $post = $this->input->post(null, TRUE);
            $email = $post['email'];
            $password = md5($post['password']); // gunakan md5 jika password disimpan dengan md5

            $user = $this->User_model->cek_login($email, $password);

            if ($user) {
                $this->session->set_userdata([
                    'id_user' => $user->id_user,
                    'nama' => $user->nama,
                    'email' => $user->email,
                    'level' => $user->level
                ]);

                // redirect berdasarkan level
                if ($user->level == 1) {
                    redirect('admin/dashboard');
                } elseif ($user->level == 2) {
                    redirect('siswa/dashboard');
                } elseif ($user->level == 3) {
                    redirect('relawan/dashboard');
                } else {
                    $this->session->set_flashdata('pesan', 'Level tidak dikenali.');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', 'Email atau password salah.');
                redirect('auth');
            }
        }
    }

    public function ganti_password()
    {
        $data['title'] = 'Ganti Password';

        $this->load->view('ganti_password', $data);
    }

    public function proses_ganti_password()
    {
        // Validasi input
        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim', [
            'required' => 'Password lama wajib diisi.'
        ]);
        $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|trim|min_length[4]', [
            'required' => 'Password baru wajib diisi.',
            'min_length' => 'Password baru minimal 4 karakter.'
        ]);
        $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|trim|matches[password_baru]', [
            'required' => 'Konfirmasi password wajib diisi.',
            'matches' => 'Konfirmasi password tidak cocok dengan password baru.'
        ]);

        // Jika validasi gagal, kembali ke halaman form
        if ($this->form_validation->run() == FALSE) {
            $this->ganti_password(); // Pastikan method ini memuat form dan menampilkan error
        } else {
            $id_user = $this->session->userdata('id_user');
            $password_lama = md5($this->input->post('password_lama'));
            $password_baru = md5($this->input->post('password_baru'));

            $user = $this->User_model->get_user_by_id($id_user);

            if ($user && $user->password == $password_lama) {
                // Update password
                $this->User_model->update_data(['id_user' => $id_user], ['password' => $password_baru], 'users');
                $this->session->set_flashdata('pesan', '<div class="alert alert-success">Password berhasil diubah. Silakan login kembali.</div>');
                redirect('auth');
            } else {
                // Password lama tidak cocok
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Password lama salah!</div>');
                redirect('auth/ganti_password');
            }
        }
    }

    public function logout()
    {
        $params = array('id_user', 'level');
        $this->session->unset_userdata($params);
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-info alert-dismissible fade show" role="alert">
        Anda telah keluar!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('user');
    }
}
