<?php

    class Home extends CI_Controller
    {
        public function index()
        {
            $data['main_content']='home.php';
            $this->load->view('template', $data);
        }
        
        public function contact()
        {
            $data['main_content']='contact.php';
            $this->load->view('template', $data);
        }
    }

?>