<?php 

class north_america_countries extends CI_Controller
{
    public function canada()
    {
      	$data['main']='north_america_countries/canada.php';
      	$data['heading']='Canada';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('north_america_countries/canada', $data);
    }
    public function greenland()
    {
      	$data['main']='north_america_countries/greenland.php';
      	$data['heading']='Greenland';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('north_america_countries/greenland', $data);
    }






}