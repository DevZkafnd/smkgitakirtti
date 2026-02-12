<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Beranda';

        $this->load->view('templates_user/header');
        $this->load->view('user/dashboard', $data);
        $this->load->view('templates_user/footer');
    }
}
