<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Beranda';

        $this->load->view('templates_user/header');
        $this->load->view('user/artikel', $data);
        $this->load->view('templates_user/footer');
    }

    public function read_artikel()
    {
        $data['title'] = 'Read Artikel';

        $this->load->view('templates_user/header');
        $this->load->view('user/read_artikel', $data);
        $this->load->view('templates_user/footer');
    }
}
