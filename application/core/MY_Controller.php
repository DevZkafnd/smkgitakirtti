<?php

class MY_Controller extends CI_Router
{

    public function updateProfil()
    {
        if ($this->userdata != '') {
            $data = $this->User_model->select($this->userdata->id);

            $this->session->set_userdata('userdata', $data);
            $this->userdata = $this->session->userdata('userdata');
        }
    }
}
