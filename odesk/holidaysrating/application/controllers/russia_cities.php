<?php 

class russia_cities extends CI_Controller
{
    public function index()
    {
    }    
    
    public function cities_russia()
    {
      	$data['main']='russia_cities/cities_russia.php';
      	$data['heading']='Cities of Russia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_cities/cities_russia', $data);
    }
    





}