<?php 

class north_america_countries extends CI_Controller
{
    public function index()
    {
    }    

    public function canada()
    {
      	$data['main']='north_america_countries/canada.php';
      	$data['heading']='Canada';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('north_america_countries/canada', $data);
    }
    public function greenland()
    {
      	$data['main']='north_america_countries/greenland.php';
      	$data['heading']='Greenland';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('north_america_countries/greenland', $data);
    }






}