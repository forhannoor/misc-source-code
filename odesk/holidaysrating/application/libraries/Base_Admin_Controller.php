<?php

class Base_Admin_Controller extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        
        if(!$this->ion_auth->is_admin()){
            $this->session->set_flashdata('msg', 'You do not have permission to view this page');
            redirect('home/index', 'refresh');
        }
    }
}