<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Snapmodel extends CI_Model
{
    public $table = 'tb_requesttransaksi';
    public $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }
}
