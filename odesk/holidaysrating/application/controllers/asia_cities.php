<?php 

class asia_cities extends CI_Controller
{
    public function index()
    {
    }    
    
    public function cities_asia()
    {
      	$data['main']='asia_cities/cities_asia.php';
      	$data['heading']='Cities of Asia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_cities/cities_asia', $data);
    }
    





}