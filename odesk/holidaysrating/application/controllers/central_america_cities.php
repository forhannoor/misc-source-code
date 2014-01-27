<?php 

class central_america_cities extends CI_Controller
{
    public function cities_central_america()
    {
      	$data['main']='central_america_cities/cities_central_america.php';
      	$data['heading']='Cities of Central America';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_cities/cities_central_america', $data);
    }
    





}