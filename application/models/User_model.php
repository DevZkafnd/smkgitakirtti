<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $post['email']);
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function cek_login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password); // md5
        return $this->db->get('users')->row();
    }

    public function get($id = null)
    {
        $this->db->from('users');
        if ($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function get_user_by_id($id_user)
    {
        $this->db->select('users.*, jurusan.nama_jurusan, kelas.nama_kelas');
        $this->db->from('users');
        $this->db->join('jurusan', 'users.id_jurusan = jurusan.id_jurusan', 'left');
        $this->db->join('kelas', 'users.id_kelas = kelas.id', 'left');
        $this->db->where('users.id_user', $id_user);
        return $this->db->get()->row(); // return satu baris data
    }


    public function get_data($table)
    {
        $query = $this->db->get($table);
        return $query;
    }

    function edit_data_siswa($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function edit_data_jadwal($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function edit_data_biaya($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function edit_data_kelas_jurusan($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function get_jadwal()
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $hasil = $this->db->get();

        return $hasil->result();
    }

    public function get_all_kelas_dan_jurusan()
    {
        $kelas = $this->db->get('kelas')->result();
        $jurusan = $this->db->get('jurusan')->result();

        return [
            'kelas' => $kelas,
            'jurusan' => $jurusan
        ];
    }

    public function get_all_kelas_jurusan_dan_mapel()
    {
        $kelas = $this->db->get('kelas')->result();
        $jurusan = $this->db->get('jurusan')->result();
        $mapel = $this->db->get('mapel')->result();

        return [
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'mapel' => $mapel
        ];
    }

    public function get_kelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $hasil = $this->db->get();

        return $hasil->result();
    }

    function get_data_admin()
    {
        $query = $this->db->query("SELECT * FROM users WHERE level='1'");
        return $query->result();
    }

    function get_data_siswa()
    {
        $query = $this->db->query("SELECT * FROM users WHERE level='2'");
        return $query->result();
    }

    public function get_all_siswa_with_kelas_jurusan()
    {
        $this->db->select('users.*, kelas.nama_kelas, jurusan.nama_jurusan');
        $this->db->from('users');
        $this->db->join('kelas', 'kelas.id = users.id_kelas');
        $this->db->join('jurusan', 'jurusan.id_jurusan = users.id_jurusan');
        $this->db->where('users.level', 2); // 2 = siswa
        return $this->db->get()->result();
    }


    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function insert_pesan($data, $table)
    {
        $this->db->insert($table, $data);
        $this->session->set_flashdata('flash', 'Ditambahkan');
    }

    public function edit_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function hapus($tabel, $where)
    {
        return $this->db->delete($tabel, $where);
    }

    public function ubah_password($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('users', $where);
    }

    public function get_admin_by_id($id_user)
    {
        return $this->db->get_where('users', ['id_user' => $id_user, 'level' => 1])->row();
    }

    public function get_siswa_by_id($id_user)
    {
        return $this->db->get_where('users', ['id_user' => $id_user, 'level' => 2])->row();
    }

    public function get_detail_siswa($id)
    {
        $this->db->select('users.*, kelas.nama_kelas, jurusan.nama_jurusan');
        $this->db->from('users');
        $this->db->join('kelas', 'kelas.id = users.id_kelas', 'left');
        $this->db->join('jurusan', 'jurusan.id_jurusan = users.id_jurusan', 'left');
        $this->db->where('users.id_user', $id);
        return $this->db->get()->row(); // hasil berupa 1 baris objek
    }

    public function get_detail_admin($id)
    {
        $this->db->select('users.*, kelas.nama_kelas, jurusan.nama_jurusan');
        $this->db->from('users');
        $this->db->join('kelas', 'kelas.id = users.id_kelas', 'left');
        $this->db->join('jurusan', 'jurusan.id_jurusan = users.id_jurusan', 'left');
        $this->db->where('users.id_user', $id);
        return $this->db->get()->row(); // hasil berupa 1 baris objek
    }

    public function count_by_level($level)
    {
        return $this->db->where('level', $level)->from('users')->count_all_results();
    }
}
