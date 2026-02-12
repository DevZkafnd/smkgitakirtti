<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
    public function get_all_jadwal()
    {
        $this->db->select('jadwal.*, kelas.nama_kelas, jurusan.nama_jurusan, mapel.nama_mapel');
        $this->db->from('jadwal');
        $this->db->join('kelas', 'kelas.id = jadwal.id_kelas');
        $this->db->join('jurusan', 'jurusan.id_jurusan = jadwal.id_jurusan');
        $this->db->join('mapel', 'mapel.id = jadwal.id_mapel');
        $this->db->order_by("FIELD(hari, 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat')", "", false, 'ASC');
        $this->db->order_by('jam_mulai', 'ASC');
        $this->db->order_by('id_jurusan', 'ASC');
        return $this->db->get()->result();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_detail_jadwal($id)
    {
        $this->db->select('jadwal.*, kelas.nama_kelas, jurusan.nama_jurusan');
        $this->db->from('jadwal');
        $this->db->join('kelas', 'kelas.id = jadwal.id_kelas', 'left');
        $this->db->join('jurusan', 'jurusan.id_jurusan = jadwal.id_jurusan', 'left');
        $this->db->where('jadwal.id', $id);
        return $this->db->get()->row(); // hasil berupa 1 baris objek
    }

    public function get_jadwal_by_siswa($id_kelas, $id_jurusan)
    {
        $this->db->select('jadwal.*, mapel.nama_mapel, kelas.nama_kelas, jurusan.nama_jurusan');
        $this->db->from('jadwal');
        $this->db->join('mapel', 'mapel.id = jadwal.id_mapel');
        $this->db->join('kelas', 'kelas.id = jadwal.id_kelas');
        $this->db->join('jurusan', 'jurusan.id_jurusan = jadwal.id_jurusan');
        $this->db->where('jadwal.id_kelas', $id_kelas);
        $this->db->where('jadwal.id_jurusan', $id_jurusan);
        $this->db->order_by("FIELD(hari, 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat')");
        $this->db->order_by('jam_mulai', 'ASC');

        return $this->db->get()->result();
    }
}
