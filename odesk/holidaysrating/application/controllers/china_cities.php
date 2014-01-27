<?php 

class china_cities extends CI_Controller
{
    public function cities_china()
    {
      	$data['main']='china_cities/cities_china.php';
      	$data['heading']='Cities of China';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_cities/cities_china', $data);
    }
    





}