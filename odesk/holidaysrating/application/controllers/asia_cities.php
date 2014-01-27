<?php 

class asia_cities extends CI_Controller
{
    public function cities_asia()
    {
      	$data['main']='asia_cities/cities_asia.php';
      	$data['heading']='Cities of Asia';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
        
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_cities/cities_asia', $data);
    }
    





}