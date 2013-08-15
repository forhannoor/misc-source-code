<?php 

class caribbean_cities extends CI_Controller
{
    public function index()
    {
    }    
    
    public function cities_caribbean()
    {
      	$data['main']='caribbean_cities/cities_caribbean.php';
      	$data['heading']='Cities of Caribbean';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_cities/cities_caribbean', $data);
    }
    





}