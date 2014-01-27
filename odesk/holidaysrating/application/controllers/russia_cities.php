<?php 

class russia_cities extends CI_Controller
{
    public function cities_russia()
    {
      	$data['main']='russia_cities/cities_russia.php';
      	$data['heading']='Cities of Russia';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_cities/cities_russia', $data);
    }
    





}