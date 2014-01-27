<?php 

class north_america_cities extends CI_Controller
{
    public function cities_north_america()
    {
      	$data['main']='north_america_cities/cities_north_america.php';
      	$data['heading']='Cities of North America';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('north_america_cities/cities_north_america', $data);
    }
    





}