<?php

    class Home extends CI_Controller{
        
        public function index()
        {
        	if($this->ion_auth->is_admin())
        		redirect('admin/index', 'refresh');
			
			if($this->ion_auth->logged_in() && !$this->ion_auth->is_admin())
				redirect('student/index', 'refresh');
        	
            $data['main_content']='home/home_view.php';
            $this->load->view('template', $data);
        }
    }
	
?>