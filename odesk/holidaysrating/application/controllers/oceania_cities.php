<?php 

class oceania_cities extends CI_Controller
{
    public function cities_oceania()
    {
      	$data['main']='oceania_cities/cities_oceania.php';
      	$data['heading']='Cities of Oceania';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_cities/cities_oceania', $data);
    }
    





}