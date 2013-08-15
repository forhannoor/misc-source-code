<?php 

class indonesia_national_parks extends CI_Controller
{
    public function index()
    {
    }    
    
    public function indonesia_nat_parks()
    {
      	$data['main']='indonesia_national_parks/indonesia_nat_parks.php';
      	$data['heading']='National Parks Indonesia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_national_parks/indonesia_nat_parks', $data);
    }
    





}