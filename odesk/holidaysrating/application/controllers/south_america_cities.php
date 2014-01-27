<?php 

class south_america_cities extends CI_Controller
{
    public function cities_south_america()
    {
      	$data['main']='south_america_cities/cities_south_america.php';
      	$data['heading']='Cities of South America';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('south_america_cities/cities_south_america', $data);
    }
    





}