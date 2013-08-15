<?php 

class usa_national_parks extends CI_Controller
{
    public function index()
    {
    }    
    
    public function usa_nat_parks()
    {
      	$data['main']='usa_national_parks/usa_nat_parks.php';
      	$data['heading']='National Parks USA';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_national_parks/usa_nat_parks', $data);
    }
    





}