<?php 

class central_america_national_parks extends CI_Controller
{
    public function index()
    {
    }    
    
    public function central_america_nat_parks()
    {
      	$data['main']='central_america_national_parks/central_america_nat_parks.php';
      	$data['heading']='National Parks Central America';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_national_parks/central_america_nat_parks', $data);
    }
    





}