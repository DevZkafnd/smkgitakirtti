<?php
defined('BASEPATH') or exit('No direct script access allowed');

function is_active($segment = '', $level = 2)
{
    $CI = &get_instance();
    $current_segment = $CI->uri->segment($level);
    return ($current_segment === $segment) ? 'active' : '';
}

function is_menu_open(array $segments = [], $level = 2)
{
    $CI = &get_instance();
    $current_segment = $CI->uri->segment($level);
    return in_array($current_segment, $segments) ? 'active open' : '';
}

