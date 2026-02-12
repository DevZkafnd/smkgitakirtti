<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('init')) {
    function init()
    {
        $CI = &get_instance();
        return $CI;
    }
}

if (!function_exists('user_data')) {
    function user_data()
    {
        $CI =& get_instance(); // pastikan mendapatkan instance CI
        $id_user = $CI->session->userdata('id_user'); // ambil dari session

        if (!$id_user) {
            return null; // jika tidak ada session user
        }

        return $CI->db->where('id_user', $id_user)->get('users')->row();
    }
}


if (!function_exists('session_data')) {
    function session_data()
    {
        $CI = init();

        $CI->load->library('encryption');
        $CI->load->helper('cookie');

        $read_session_in_cookie = get_cookie('__ACTIVE_SESSION_DATA');
        $read_session_in_session = $CI->session->userdata('__ACTIVE_SESSION_DATA');

        if ($read_session_in_cookie) {
            $read_data = $CI->encryption->decrypt($read_session_in_cookie);
            $read_data = json_decode($read_data);

            return $read_data;
        } else if ($read_session_in_session) {
            $read_data = $CI->encryption->decrypt($read_session_in_session);
            $read_data = json_decode($read_data);

            return $read_data;
        } else {
            $default_session = new stdClass();

            $default_session->is_login = FALSE;
            $default_session->id_user = 0;

            return $default_session;
        }
    }
}

if (!function_exists('is_login')) {
    function is_login()
    {
        $login_data = session_data();

        return ($login_data->is_login === TRUE);
    }
}

if (!function_exists('get_current_id_user')) {
    function get_current_id_user()
    {
        $login_data = session_data();

        return $login_data->id_user;
    }
}

if (!function_exists('get_current_id_biaya')) {
    function get_current_id_biaya()
    {
        $login_data = session_data();

        return $login_data->id;
    }
}

if (!function_exists('verify_session')) {
    function verify_session($what_to_verify)
    {
        $current_url = current_url();
        $current_url = base64_encode($current_url);

        if (!is_login()) {
            redirect('auth/login?redir_to=' . $current_url);
        } else if ($what_to_verify == 'admin') {
            if (!is_admin()) {
                redirect('auth/login?redir_to=' . $current_url);
            }
        } else if ($what_to_verify == 'customer') {
            if (!is_customer()) {
                redirect('auth/login?redir_to=' . $current_url);
            }
        }
    }
}

if (!function_exists('is_admin')) {
    function is_admin()
    {
        $user_data = user_data();
        $role = $user_data->role;

        return ($role == 'admin');
    }
}

if (!function_exists('is_customer')) {
    function is_customer()
    {
        $user_data = user_data();
        $role = $user_data->role;

        return ($role == 'customer');
    }
}
