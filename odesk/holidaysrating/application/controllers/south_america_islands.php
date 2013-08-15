<?php 

class south_america_islands extends CI_Controller
{
    public function index()
    {
    }    
    
    public function galapagos_islands()
    {
      	$data['main']='south_america_islands/galapagos_islands.php';
      	$data['heading']='Galapagos Islands';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('south_america_islands/galapagos_islands', $data);
    }
}