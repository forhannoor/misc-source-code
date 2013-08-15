<?php 

class oceania_cities extends CI_Controller
{
    public function index()
    {
    }    
    
    public function cities_oceania()
    {
      	$data['main']='oceania_cities/cities_oceania.php';
      	$data['heading']='Cities of Oceania';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_cities/cities_oceania', $data);
    }
    





}