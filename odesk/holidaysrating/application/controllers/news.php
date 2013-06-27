<?php 

class news extends CI_Controller
{
    public function index()
    {
    }    

    public function main_news()
    {
      	$data['main']='news/main_news.php';
      	$data['heading']='News';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('news/main_news', $data);
    }
    public function new_website()
    {
      	$data['main']='news/new_website.php';
      	$data['heading']='New website';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('news/new_website', $data);
    }
    public function travel_alerts()
    {
      	$data['main']='news/travel_alerts.php';
      	$data['heading']='Travel Alerts';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('news/travel_alerts', $data);
    }






}