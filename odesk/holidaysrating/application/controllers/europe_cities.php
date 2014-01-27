<?php 

class europe_cities extends CI_Controller
{
    public function cities_europe()
    {
      	$data['main']='europe_cities/cities_europe.php';
      	$data['heading']='Cities of Europe';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('europe_cities/cities_europe', $data);
    }
    





}