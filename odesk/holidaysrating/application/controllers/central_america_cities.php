<?php 

class central_america_cities extends CI_Controller
{
    public function index()
    {
    }    
    
    public function cities_central_america()
    {
      	$data['main']='central_america_cities/cities_central_america.php';
      	$data['heading']='Cities of Central America';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_cities/cities_central_america', $data);
    }
    





}