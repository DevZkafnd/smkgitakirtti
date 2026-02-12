<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_spp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model'); // gunakan tabel users di model
        $this->load->model('Transaksi_model');
        $this->load->model('Snapmodel');

        $this->load->helper('url');

        // Konfigurasi Midtrans
        $params = [
            'server_key' => 'SB-Mid-server-t2JlNECrIyvp59RaNKBbRuNM',
            'production' => false
        ];
        $this->load->library('midtrans');
        $this->midtrans->config($params);
    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');

        // Ambil data user lengkap
        $user = $this->User_model->get_user_by_id($id_user);

        if (!$user) {
            show_error('Data user tidak ditemukan');
        }

        // Ambil status pembayaran bulan ini
        $bulan = date('n');
        $tahun = date('Y');
        $sudah_bayar = $this->Transaksi_model->cek_pembayaran_bulanan($id_user, $bulan, $tahun);

        // Ambil 1 biaya SPP berdasarkan id_jurusan
        $biaya_spp = $this->Transaksi_model->get_data_biaya_by_id($user->id_jurusan); // <- hasil row() saja

        $data = [
            'title' => 'Pembayaran SPP',
            'user' => $user,
            'nama' => $user->nama,
            'email' => $user->email,
            'id_kelas' => $user->id_kelas,
            'id_jurusan' => $user->id_jurusan,
            'foto_siswa' => $user->foto_siswa,
            'biaya_spp' => $biaya_spp,
            'sudah_bayar' => $sudah_bayar
        ];

        $this->load->helper('active');
        $this->load->view('templates_siswa/header', $data);
        $this->load->view('templates_siswa/sidebar');
        $this->load->view('siswa/pembayaran_spp', $data);
        $this->load->view('templates_siswa/footer');
    }


    public function token()
    {
        $id_user = $this->session->userdata('id_user');
        $user = $this->User_model->get_user_by_id($id_user);
        $biaya = $this->Transaksi_model->get_data_biaya_by_id($user->id_jurusan);

        $bulan = date('n');
        $tahun = date('Y');

        if ($this->Transaksi_model->cek_pembayaran_bulanan($id_user, $bulan, $tahun)) {
            echo json_encode(['error' => 'Anda sudah membayar bulan ini']);
            return;
        }

        $order_id = 'SPP-' . $id_user . '-' . time();

        $transaction_details = [
            'order_id' => $order_id,
            'gross_amount' => $biaya->biaya_spp
        ];

        $item_details = [
            [
                'id' => 'SPP-' . $user->id_jurusan,
                'price' => $biaya->biaya_spp,
                'quantity' => 1,
                'name' => 'Pembayaran SPP ' . date('F Y')
            ]
        ];

        $customer_details = [
            'first_name' => $user->nama,
            'email' => $user->email,
            'phone' => $user->no_telp
        ];

        $transaction_data = [
            'transaction_details' => $transaction_details,
            'item_details' => $item_details,
            'customer_details' => $customer_details,
            'credit_card' => ['secure' => true],
            'expiry' => [
                'start_time' => date("Y-m-d H:i:s O"),
                'unit' => 'hour',
                'duration' => 2
            ]
        ];

        $snapToken = $this->midtrans->getSnapToken($transaction_data);

        // Simpan transaksi pending ke database
        $this->Transaksi_model->simpan_transaksi_pending(
            $id_user,
            $order_id,
            $biaya->biaya_spp,
            $bulan,
            $tahun,
            $snapToken,
            $user->id_kelas,
            $user->id_jurusan
        );

        echo $snapToken;
    }

    public function finish()
    {
        $result = json_decode($this->input->post('result_data'));

        // Validasi status transaksi
        if (!isset($result->transaction_status) || !in_array($result->transaction_status, ['settlement', 'capture'])) {
            // Jika bukan status sukses, redirect atau tampilkan error
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Pembayaran gagal atau dibatalkan.</div>');
            redirect('siswa/dashboard');
            return;
        }

        // Data VA dan lainnya
        $bank = isset($result->va_numbers[0]->bank) ? $result->va_numbers[0]->bank : '-';
        $va_number = isset($result->va_numbers[0]->va_number) ? $result->va_numbers[0]->va_number : '-';
        $bca_va_number = isset($result->bca_va_number) ? $result->bca_va_number : '-';
        $bill_key = isset($result->bill_key) ? $result->bill_key : '-';
        $biller_code = isset($result->biller_code) ? $result->biller_code : '-';

        $data = [
            'status_code' => $result->status_code,
            'status_message' => $result->status_message,
            'transaction_id' => $result->transaction_id,
            'order_id' => $result->order_id,
            'id_user' => $this->session->userdata('id_user'),
            'id_kelas' => $this->session->userdata('id_kelas'),
            'id_jurusan' => $this->session->userdata('id_jurusan'),
            'nama' => $this->session->userdata('nama'),
            'email' => $this->session->userdata('email'),
            'gross_amount' => $result->gross_amount,
            'payment_type' => $result->payment_type,
            'transaction_time' => $result->transaction_time,
            'transaction_status' => $result->transaction_status,
            'fraud_status' => $result->fraud_status,
            'pdf_url' => $result->pdf_url ?? null,
            'finish_redirect_url' => $result->finish_redirect_url,
            'bank' => $bank,
            'va_number' => $va_number,
            'bill_key' => $bill_key,
            'biller_code' => $biller_code,
            'bca_va_number' => $bca_va_number,
        ];

        // Simpan ke DB hanya jika status pembayaran valid
        if (in_array($result->transaction_status, ['settlement', 'capture'])) {
            $this->Snapmodel->insert($data);
        }

        $this->data['finish'] = $result;
        $this->load->view('template_redirect/pembayaran_berhasil', $this->data);
    }

    public function invoice()
    {
        $id_user = $this->session->userdata('id_user');
        $user = $this->User_model->get_user_by_id($id_user);
        $biaya = $this->Transaksi_model->get_data_biaya_by_id($user->id_jurusan);

        $data = [
            'title' => 'Invoice Pembayaran',
            'user' => $user,
            'biaya' => $biaya
        ];

        $this->load->view('templates_siswa/header', $data);
        $this->load->view('templates_siswa/sidebar');
        $this->load->view('siswa/invoice', $data);
        $this->load->view('templates_siswa/footer');
    }

    public function redirect()
    {
        $this->load->view('template_redirect/pembayaran_berhasil');
    }
}
