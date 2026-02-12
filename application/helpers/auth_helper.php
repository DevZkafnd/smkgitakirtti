<?php
defined('BASEPATH') or exit('No direct script access allowed');

function is_logged_in()
{
    $CI =& get_instance();
    if (!$CI->session->userdata('id_user')) {
        redirect('auth');
    }
}

function check_role($role)
{
    $CI =& get_instance();
    if ($CI->session->userdata('role') != $role) {
        show_error('Akses ditolak');
    }
}