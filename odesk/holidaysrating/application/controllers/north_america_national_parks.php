<?php 

class north_america_national_parks extends CI_Controller
{
    public function index()
    {
    }    
    
    public function north_america_nat_parks()
    {
      	$data['main']='north_america_national_parks/north_america_nat_parks.php';
      	$data['heading']='National Parks North America';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('north_america_national_parks/north_america_nat_parks', $data);
    }
    





}