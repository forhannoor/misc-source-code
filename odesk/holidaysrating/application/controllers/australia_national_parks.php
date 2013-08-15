<?php 

class australia_national_parks extends CI_Controller
{
    public function index()
    {
    }    
    
    public function australia_nat_parks()
    {
      	$data['main']='australia_national_parks/australia_nat_parks.php';
      	$data['heading']='National Parks Australia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('australia_national_parks/australia_nat_parks', $data);
    }
    





}