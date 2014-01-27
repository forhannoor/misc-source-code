<?php 

class privacy extends CI_Controller
{
    public function index()
    {
    }    

    public function privacy_policy()
    {
      	$data['main']='privacy/privacy_policy.php';
      	$data['heading']='Privacy Policy';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('privacy/privacy_policy', $data);
    }
    public function terms_of_use()
    {
      	$data['main']='privacy/terms_of_use.php';
      	$data['heading']='Terms of Use';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('privacy/terms_of_use', $data);
    }
    public function cookies()
    {
      	$data['main']='privacy/cookies.php';
      	$data['heading']='Cookies';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('privacy/cookies', $data);
    }
    public function information_discloser()
    {
      	$data['main']='privacy/information_discloser.php';
      	$data['heading']='Information Discloser';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('privacy/information_discloser', $data);
    }
    
}