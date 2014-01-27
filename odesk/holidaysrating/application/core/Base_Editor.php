<?php

class Base_Editor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
        
        if(! $this->ion_auth->is_admin())
        {
            $this->session->set_flashdata('msg', 'You don\'t have permission to access this page');
            redirect('home', 'refresh');
        }
    }
}