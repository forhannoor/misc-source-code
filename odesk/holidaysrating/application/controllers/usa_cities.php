<?php 

class usa_cities extends CI_Controller
{
    public function cities_usa()
    {
      	$data['main']='usa_cities/cities_usa.php';
      	$data['heading']='Cities of the USA';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('usa_cities/cities_usa', $data);
    }
    





}