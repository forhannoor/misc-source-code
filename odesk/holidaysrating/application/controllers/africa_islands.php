<?php 

class africa_islands extends CI_Controller
{
    public function index()
    {
    }    
    
    public function zanzibar()
    {
      	$data['main']='africa_islands/zanzibar.php';
      	$data['heading']='Zanzibar';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_islands/zanzibar', $data);
    }
    





}