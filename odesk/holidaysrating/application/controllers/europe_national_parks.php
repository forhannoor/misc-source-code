<?php 

class europe_national_parks extends CI_Controller
{
    public function index()
    {
    }    
    
    public function europe_nat_parks()
    {
      	$data['main']='europe_national_parks/europe_nat_parks.php';
      	$data['heading']='National Parks Europe';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_national_parks/europe_nat_parks', $data);
    }
    





}