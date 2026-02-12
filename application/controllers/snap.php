<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Snap extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();

		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Methods: PUT, GET, POST");
		header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

		$params = array('server_key' => 'SB-Mid-server-t2JlNECrIyvp59RaNKBbRuNM', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');
		$this->load->model('Snapmodel');
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('checkout_snap');
	}

	public function token()
	{
		// Ambil id_user dari session
		$id_user = $this->session->userdata('id_user');

		// Load model jika belum
		$this->load->model('User_model');
		$this->load->model('Transaksi_model');

		// Ambil data user
		$user = $this->User_model->get_user_by_id($id_user);

		if (!$user) {
			echo json_encode(['error' => 'User tidak ditemukan']);
			return;
		}

		// Ambil biaya SPP berdasarkan jurusan
		$biaya = $this->Transaksi_model->get_data_biaya_by_id($user->id_jurusan);

		if (!$biaya) {
			echo json_encode(['error' => 'Biaya SPP tidak ditemukan untuk jurusan ini']);
			return;
		}

		// Buat order ID unik
		$order_id = 'SPP-' . $id_user . '-' . time();

		// Detail transaksi
		$transaction_details = [
			'order_id' => $order_id,
			'gross_amount' => (int) $biaya->biaya_spp
		];

		// Item detail
		$item_details = [
			[
				'id' => 'SPP-' . $user->id_jurusan,
				'price' => (int) $biaya->biaya_spp,
				'quantity' => 1,
				'name' => 'Pembayaran SPP ' . date('F Y')
			]
		];

		// Customer detail
		$customer_details = [
			'first_name' => $user->nama,
			'email' => $user->email,
			'phone' => $user->no_telp,
			'billing_address' => [
				'first_name' => $user->nama,
				'address' => $user->alamat,
				'city' => $user->kabupaten,
				'postal_code' => '',
				'phone' => $user->no_telp,
				'country_code' => 'IDN'
			],
			'shipping_address' => [
				'first_name' => $user->nama,
				'address' => $user->alamat,
				'city' => $user->kabupaten,
				'postal_code' => '',
				'phone' => $user->no_telp,
				'country_code' => 'IDN'
			]
		];

		$credit_card['secure'] = true;

		$custom_expiry = [
			'start_time' => date("Y-m-d H:i:s O"),
			'unit' => 'minute',
			'duration' => 2
		];

		$transaction_data = [
			'transaction_details' => $transaction_details,
			'item_details' => $item_details,
			'customer_details' => $customer_details,
			'credit_card' => $credit_card,
			'expiry' => $custom_expiry
		];

		// Dapatkan snap token
		$snapToken = $this->midtrans->getSnapToken($transaction_data);

		echo $snapToken;
	}


	public function finish()
	{
		$result = json_decode($this->input->post('result_data'));

		if (isset($result->va_numbers[0]->bank)) {
			$bank = $result->va_numbers[0]->bank;
		} else {
			$bank = '-';
		}

		if (isset($result->va_numbers[0]->va_number)) {
			$va_number = $result->va_numbers[0]->va_number;
		} else {
			$va_number = '-';
		}

		if (isset($result->bca_va_number)) {
			$bca_va_number = $result->bca_va_number;
		} else {
			$bca_va_number = '-';
		}

		if (isset($result->bill_key)) {
			$bill_key = $result->bill_key;
		} else {
			$bill_key = '-';
		}

		if (isset($result->biller_code)) {
			$biller_code = $result->biller_code;
		} else {
			$biller_code = '-';
		}

		$data = [
			'status_code' => $result->status_code,
			'status_message' => $result->status_message,
			'transaction_id' => $result->transaction_id,
			'order_id' => $result->order_id,
			'id_user' => $this->session->userdata('id_user'),
			'nama' => $this->session->userdata('nama'),
			'gross_amount' => $result->gross_amount,
			'payment_type' => $result->payment_type,
			'transaction_time' => $result->transaction_time,
			'transaction_status' => $result->transaction_status,
			'fraud_status' => $result->fraud_status,
			'pdf_url' => $result->pdf_url,
			'finish_redirect_url' => $result->finish_redirect_url,
			//tiap bank beda2
			'bank' => $bank,
			'va_number' => $va_number,
			'bill_key' => $bill_key,
			'biller_code' => $biller_code,
			'bca_va_number' => $bca_va_number,
		];

		$return = $this->Snapmodel->insert($data);
		// echo "<pre>";
		// print_r($result);
		// print_r($data);
		// echo "</pre>";

		$this->data['finish'] = json_decode($this->input->post('result_data'));
		$this->load->view('template_redirect/pembayaran_berhasil', $this->data);
	}
}
