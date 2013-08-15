<?php 

class indonesia_cities extends CI_Controller
{
    public function index()
    {
    }    
    
    public function cities_indonesia()
    {
      	$data['main']='indonesia_cities/cities_indonesia.php';
      	$data['heading']='Cities of Indonesia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_cities/cities_indonesia', $data);
    }
    





}