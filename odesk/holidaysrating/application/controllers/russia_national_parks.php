<?php 

class russia_national_parks extends CI_Controller
{
    public function index()
    {
    }    
    
    public function russia_nat_parks()
    {
      	$data['main']='russia_national_parks/russia_nat_parks.php';
      	$data['heading']='National Parks Russia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_national_parks/russia_nat_parks', $data);
    }
    





}