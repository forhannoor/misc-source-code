<?php 

class news extends CI_Controller
{
    public function index()
    {
    }    

    public function main_news()
    {
      	$data['main']='news/main_news.php';
      	$data['heading']='Travel News';
        $data['right_bar_news'] = 'sidebar/right_bar_news';              	
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('news/main_news', $data);
    }
    public function new_website()
    {
      	$data['main']='news/new_website.php';
      	$data['heading']='New website';
        $data['right_bar_news'] = 'sidebar/right_bar_news';              	
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('news/new_website', $data);
    }
    public function travel_alerts()
    {
      	$data['main']='news/travel_alerts.php';
      	$data['heading']='Travel Alerts';
        $data['right_bar_news'] = 'sidebar/right_bar_news';              	
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('news/travel_alerts', $data);
    }
    public function snow_in_cairo()
    {
      	$data['main']='news/snow_in_cairo.php';
      	$data['heading']='Snow in Cairo';
        $data['right_bar_news'] = 'sidebar/right_bar_news';              	
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('news/snow_in_cairo', $data);
    }






}