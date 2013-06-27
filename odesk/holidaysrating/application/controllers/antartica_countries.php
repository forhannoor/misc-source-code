<?php 

class antartica_countries extends CI_Controller
{
    public function index()
    {
    }    

    public function alexander_island()
    {
      	$data['main']='antartica_countries/alexander_island.php';
      	$data['heading']='Alexander Island';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('antartica_countries/alexander_island', $data);
    }
    public function american_highland()
    {
      	$data['main']='antartica_countries/american_highland.php';
      	$data['heading']='American Highland';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('antartica_countries/american_highland', $data);
    }
    public function berkner_island()
    {
      	$data['main']='antartica_countries/berkner_island.php';
      	$data['heading']='Berkner Island';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('antartica_countries/berkner_island', $data);
    }
    public function biscoe_islands()
    {
      	$data['main']='antartica_countries/biscoe_islands.php';
      	$data['heading']='Biscoe Islands';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('antartica_countries/biscoe_islands', $data);
    }
    public function ellsworth_land()
    {
      	$data['main']='antartica_countries/ellsworth_land.php';
      	$data['heading']='Ellsworth Land';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('antartica_countries/enderby_land', $data);
    }
    public function ellsworth_land()
    {
      	$data['main']='antartica_countries/enderby_land.php';
      	$data['heading']='Enderby Land';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('antartica_countries/enderby_land', $data);
	}
    public function marie_byrd_land()
    {
      	$data['main']='antartica_countries/marie_byrd_land.php';
      	$data['heading']='Marie Byrd Land';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('antartica_countries/marie_byrd_land', $data);
	}
    public function new_schwabenland()
    {
      	$data['main']='antartica_countries/new_schwabenland.php';
      	$data['heading']='New Schwabenland';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('antartica_countries/new_schwabenland', $data);
	}
    public function palmer_land()
    {
      	$data['main']='antartica_countries/palmer_land.php';
      	$data['heading']='Palmer Land';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('antartica_countries/palmer_land', $data);
	}
    public function queen_maud_land()
    {
      	$data['main']='antartica_countries/queen_maud_land.php';
      	$data['heading']='Queen Maud Land';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('antartica_countries/queen_maud_land', $data);
	}
    public function wilkes_land()
    {
      	$data['main']='antartica_countries/wilkes_land.php';
      	$data['heading']='Wilkes Land';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('antartica_countries/wilkes_land', $data);
	}












}