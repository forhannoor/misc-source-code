<?php 

class territories extends CI_Controller
{
    public function index()
    {
    }    

    public function hongkong()
    {
      	$data['main']='territories/hongkong.php';
      	$data['heading']='Hongkong';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('territories/hongkong', $data);
    }






}