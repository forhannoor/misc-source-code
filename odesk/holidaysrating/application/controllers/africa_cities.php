<?php 

class africa_cities extends CI_Controller
{
    public function index()
    {
    }    
    
    public function cities_africa()
    {
      	$data['main']='africa_cities/cities_africa.php';
      	$data['heading']='Cities of Africa';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_cities/cities_africa', $data);
    }
    





}