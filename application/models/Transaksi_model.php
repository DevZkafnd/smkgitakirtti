<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    public function get_transaksi($id)
    {
        $this->db->select('*');
        $this->db->from('tb_requesttransaksi');
        $this->db->where('tb_requesttransaksi.id_user', $id);
        $this->db->join('users', 'users.id_user = tb_requesttransaksi.id_user');
        $hasil = $this->db->get();

        return $hasil->result();
    }

    public function get_data_bulan_transaksi()
    {
        $query = $this->db->query("SELECT DATE_FORMAT(transaction_time, '%d %M %Y') FROM tb_requesttransaksi");
        return $query->result();
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_transaksi_id($id)
    {
        $this->db->select('*');
        $this->db->from('tb_requesttransaksi');
        $this->db->join('users', 'users.id_user = tb_requesttransaksi.id_user');
        $hasil = $this->db->where('id', $id)->get();

        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('biaya', $where);
    }

    public function get_data_biaya_by_id($id_jurusan)
    {
        $this->db->where('id_jurusan', $id_jurusan);
        return $this->db->get('biaya_spp')->row(); // ✅ hanya ambil 1 data
    }



    public function get_detail_biaya_by_jurusan($id_jurusan)
    {
        return $this->db
            ->where('id_jurusan', $id_jurusan)
            ->get('biaya_spp')
            ->row();
    }

    public function get_biaya_spp_user($id_jurusan)
    {
        return $this->db->get_where('biaya_spp', ['id_jurusan' => $id_jurusan])->row(); // 1 baris saja
    }

    public function cek_pembayaran_bulanan($id_user, $bulan, $tahun)
    {
        return $this->db->get_where('tb_requesttransaksi', [
            'id_user' => $id_user,
            'MONTH(transaction_time)' => $bulan,
            'YEAR(transaction_time)' => $tahun
        ])->row();
    }

    public function get_riwayat_pembayaran_by_user($id_user)
    {
        $this->db->select('tb_requesttransaksi.*, users.nama, jurusan.nama_jurusan, kelas.nama_kelas');
        $this->db->from('tb_requesttransaksi');
        $this->db->join('users', 'tb_requesttransaksi.id_user = users.id_user');
        $this->db->join('jurusan', 'users.id_jurusan = jurusan.id_jurusan', 'left');
        $this->db->join('kelas', 'users.id_kelas = kelas.id', 'left');
        $this->db->where('tb_requesttransaksi.id_user', $id_user);
        $this->db->order_by('tb_requesttransaksi.transaction_time', 'DESC');
        return $this->db->get()->result();
    }

    public function simpan_transaksi_pending($data)
    {
        return $this->db->insert('tb_requesttransaksi', $data);
    }

    public function update_status_transaksi($order_id, $data)
    {
        $this->db->where('order_id', $order_id);
        return $this->db->update('tb_requesttransaksi', $data);
    }

    public function get_total_transaksi_bulan_ini()
    {
        $bulan = date('n'); // bulan saat ini (tanpa nol di depan)
        $tahun = date('Y'); // tahun saat ini

        $this->db->where('MONTH(transaction_time)', $bulan);
        $this->db->where('YEAR(transaction_time)', $tahun);
        $this->db->where('transaction_status', 'settlement');
        return $this->db->count_all_results('tb_requesttransaksi'); // ganti dengan nama tabelmu jika beda
    }

    public function get_total_nominal_transaksi()
    {
        $this->db->select_sum('gross_amount');
        $this->db->where('transaction_status', 'settlement'); // hanya transaksi berhasil
        $result = $this->db->get('tb_requesttransaksi')->row();
        return $result->gross_amount ?? 0;
    }

    // Transaksi_model.php
    public function get_transaksi_hari_ini()
    {
        $this->db->select('tb_requesttransaksi.*, kelas.nama_kelas, jurusan.nama_jurusan');
        $this->db->from('tb_requesttransaksi');
        $this->db->join('kelas', 'kelas.id = tb_requesttransaksi.id_kelas', 'left');
        $this->db->join('jurusan', 'jurusan.id_jurusan = tb_requesttransaksi.id_jurusan', 'left');
        $this->db->where('DATE(tb_requesttransaksi.transaction_time)', date('Y-m-d'));
        $this->db->order_by('tb_requesttransaksi.transaction_time', 'DESC');
        return $this->db->get()->result();
    }

    public function get_all_transaksi()
    {
        $this->db->select('tb_requesttransaksi.*, kelas.nama_kelas, jurusan.nama_jurusan');
        $this->db->from('tb_requesttransaksi');
        $this->db->join('kelas', 'kelas.id = tb_requesttransaksi.id_kelas', 'left');
        $this->db->join('jurusan', 'jurusan.id_jurusan = tb_requesttransaksi.id_jurusan', 'left');
        $this->db->order_by('tb_requesttransaksi.transaction_time', 'DESC');
        return $this->db->get()->result();
    }
}
