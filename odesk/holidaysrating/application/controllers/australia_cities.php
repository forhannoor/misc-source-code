<?php 

class australia_cities extends CI_Controller
{
    public function index()
    {
    }    
    
    public function cities_australia()
    {
      	$data['main']='australia_cities/cities_australia.php';
      	$data['heading']='Cities of Australia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('australia_cities/cities_australia', $data);
    }
    





}