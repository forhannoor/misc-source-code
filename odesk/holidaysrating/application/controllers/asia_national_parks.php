<?php 

class asia_national_parks extends CI_Controller
{
    public function index()
    {
    }    
    
    public function asia_nat_parks()
    {
      	$data['main']='asia_national_parks/asia_nat_parks.php';
      	$data['heading']='National Parks Asia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_national_parks/asia_nat_parks', $data);
    }
    





}