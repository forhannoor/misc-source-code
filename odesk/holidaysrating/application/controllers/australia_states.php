<?php 

class australia_states extends CI_Controller
{
    public function index()
    {
    }    

    public function new_south_wales()
    {
      	$data['main']='australia_states/new_south_wales.php';
      	$data['heading']='New South Wales';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('australia_states/new_south_wales', $data);
    }
    public function northern_territory()
    {
      	$data['main']='australia_states/northern_territory.php';
      	$data['heading']='Northern Territory';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('australia_states/northern_territory', $data);
    }
    public function queensland()
    {
      	$data['main']='australia_states/queensland.php';
      	$data['heading']='Queensland';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('australia_states/queensland', $data);
    }
    public function south_australia()
    {
      	$data['main']='australia_states/south_australia.php';
      	$data['heading']='South Australia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('australia_states/south_australia', $data);
    }
    public function tasmania()
    {
      	$data['main']='australia_states/tasmania.php';
      	$data['heading']='Tasmania';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('australia_states/tasmania', $data);
    }
    public function victoria()
    {
      	$data['main']='australia_states/victoria.php';
      	$data['heading']='Victoria';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('australia_states/victoria', $data);
    }
    public function western_australia()
    {
      	$data['main']='australia_states/western_australia.php';
      	$data['heading']='Western Australia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('australia_states/western_australia', $data);
    }






}