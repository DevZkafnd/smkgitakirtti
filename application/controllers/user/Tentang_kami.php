<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_kami extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Beranda';

        $this->load->view('templates_user/header');
        $this->load->view('user/tentang_kami', $data);
        $this->load->view('templates_user/footer');
    }
}
