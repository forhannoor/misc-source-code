<?php 

class north_america_cities extends CI_Controller
{
    public function index()
    {
    }    
    
    public function cities_north_america()
    {
      	$data['main']='north_america_cities/cities_north_america.php';
      	$data['heading']='Cities of North America';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('north_america_cities/cities_north_america', $data);
    }
    





}