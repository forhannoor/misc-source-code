<?php 

class help extends CI_Controller
{
    public function index()
    {
    }    

    public function helpcenter()
    {
      	$data['main']='help/helpcenter.php';
      	$data['heading']='Help';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('help/helpcenter', $data);
    }

}