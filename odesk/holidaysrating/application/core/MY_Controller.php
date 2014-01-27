<?php

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if(! $this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('msg', 'You are not logged in!');
            redirect('home', 'refresh');
        }
    }
}