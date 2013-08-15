<?php 

class oceania_national_parks extends CI_Controller
{
    public function index()
    {
    }    
    
    public function oceania_nat_parks()
    {
      	$data['main']='oceania_national_parks/oceania_nat_parks.php';
      	$data['heading']='National Parks Oceania';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_national_parks/oceania_nat_parks', $data);
    }
    





}