<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Redirect extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'PPDB';

        $this->load->view('template_redirect/pembayaran_berhasil', $data);
    }
}