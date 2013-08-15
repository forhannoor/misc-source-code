<?php 

class africa_national_parks extends CI_Controller
{
    public function index()
    {
    }    
    
    public function africa_nat_parks()
    {
      	$data['main']='africa_national_parks/africa_nat_parks.php';
      	$data['heading']='National Parks Africa';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_national_parks/africa_nat_parks', $data);
    }
    





}