<?php 

class antarctica_regions extends CI_Controller
{
    public function alexander_island()
    {
      	$data['main']='antarctica_regions/alexander_island.php';
      	$data['heading']='Alexander Island';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
                
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/alexander_island', $data);
    }
    public function berkner_island()
    {
      	$data['main']='antarctica_regions/berkner_island.php';
      	$data['heading']='Berkner Island';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/berkner_island', $data);
    }
    public function biscoe_islands()
    {
      	$data['main']='antarctica_regions/biscoe_islands.php';
      	$data['heading']='Biscoe Islands';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/biscoe_islands', $data);
    }
    public function ellsworth_land()
    {
      	$data['main']='antarctica_regions/ellsworth_land.php';
      	$data['heading']='Ellsworth Land';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
                
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/ellsworth_land', $data);
    }
    public function enderby_land()
    {
      	$data['main']='antarctica_regions/enderby_land.php';
      	$data['heading']='Enderby Land';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
                
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/enderby_land', $data);
	}
    public function marie_byrd_land()
    {
      	$data['main']='antarctica_regions/marie_byrd_land.php';
      	$data['heading']='Marie Byrd Land';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
                
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/marie_byrd_land', $data);
	}
    public function new_schwabenland()
    {
      	$data['main']='antarctica_regions/new_schwabenland.php';
      	$data['heading']='New Schwabenland';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
                
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/new_schwabenland', $data);
	}
    public function palmer_land()
    {
      	$data['main']='antarctica_regions/palmer_land.php';
      	$data['heading']='Palmer Land';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
                
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/palmer_land', $data);
	}
    public function queen_maud_land()
    {
      	$data['main']='antarctica_regions/queen_maud_land.php';
      	$data['heading']='Queen Maud Land';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
                
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/queen_maud_land', $data);
	}
    public function south_pole()
    {
      	$data['main']='antarctica_regions/south_pole.php';
      	$data['heading']='South Pole';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
                
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/south_pole', $data);
	}
    public function south_shetland_islands()
    {
      	$data['main']='antarctica_regions/south_shetland_islands.php';
      	$data['heading']='South Shetland islands';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
                
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/south_shetland_islands', $data);
	}
    public function wilkes_land()
    {
      	$data['main']='antarctica_regions/wilkes_land.php';
      	$data['heading']='Wilkes Land';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
                
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('antarctica_regions/wilkes_land', $data);
	}












}