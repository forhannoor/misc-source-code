<?php 

class oceania_countries extends CI_Controller
{
    public function index()
    {
    }    

    public function cook_islands()
    {
      	$data['main']='oceania_countries/cook_islands.php';
      	$data['heading']='Cook Islands';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/cook_islands', $data);
    }
    public function fiji()
    {
      	$data['main']='oceania_countries/fiji.php';
      	$data['heading']='Fiji';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/fiji', $data);
    }
    public function french_polynesia()
    {
      	$data['main']='oceania_countries/french_polynesia.php';
      	$data['heading']='French Polynesia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/french_polynesia', $data);
    }
    public function kiribati()
    {
      	$data['main']='oceania_countries/kiribati.php';
      	$data['heading']='Kiribati';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/kiribati', $data);
    }
    public function marshall_islands()
    {
      	$data['main']='oceania_countries/marshall_islands.php';
      	$data['heading']='Marshall Islands';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/marshall_islands', $data);
    }
    public function nauru()
    {
      	$data['main']='oceania_countries/nauru.php';
      	$data['heading']='Nauru';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/nauru', $data);
    }
    public function new_zealand()
    {
      	$data['main']='oceania_countries/new_zealand.php';
      	$data['heading']='New Zealand';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/new_zealand', $data);
    }

    public function niue()
    {
      	$data['main']='oceania_countries/niue.php';
      	$data['heading']='Niue';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/niue', $data);
    }
    public function northern_mariana_islands()
    {
      	$data['main']='oceania_countries/northern_mariana_islands.php';
      	$data['heading']='Northern Mariana Islands';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/northern_mariana_islands', $data);
    }
    public function papua_new_guinea()
    {
      	$data['main']='oceania_countries/papua_new_guinea.php';
      	$data['heading']='Papua New Guinea';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/papua_new_guinea', $data);
    }
    public function pitcairn_islands()
    {
      	$data['main']='oceania_countries/pitcairn_islands.php';
      	$data['heading']='Pitcairn Islands';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/pitcairn_islands', $data);
    }
    public function samoa()
    {
      	$data['main']='oceania_countries/samoa.php';
      	$data['heading']='Samoa';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/samoa', $data);
    }
    public function solomon_islands()
    {
      	$data['main']='oceania_countries/solomon_islands.php';
      	$data['heading']='Solomon Islands';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/solomon_islands', $data);
    }
    public function tonga()
    {
      	$data['main']='oceania_countries/tonga.php';
      	$data['heading']='Tonga';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/tonga', $data);
    }
    public function vanuatu()
    {
      	$data['main']='oceania_countries/vanuatu.php';
      	$data['heading']='Vanuatu';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('oceania_countries/vanuatu', $data);
    }





}