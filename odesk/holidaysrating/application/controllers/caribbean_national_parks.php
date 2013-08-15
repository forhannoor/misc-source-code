<?php 

class caribbean_national_parks extends CI_Controller
{
    public function index()
    {
    }    
    
    public function caribbean_nat_parks()
    {
      	$data['main']='caribbean_national_parks/caribbean_nat_parks.php';
      	$data['heading']='National Parks Caribbean';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_national_parks/caribbean_nat_parks', $data);
    }
    





}