<?php 

class indonesia_countries extends CI_Controller
{
    public function index()
    {
    }    

    public function bali()
    {
      	$data['main']='indonesia_countries/bali.php';
      	$data['heading']='Bali';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_countries/bali', $data);
    }
    public function borneo()
    {
      	$data['main']='indonesia_countries/borneo.php';
      	$data['heading']='Borneo';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_countries/borneo', $data);
    }
    public function east_timor()
    {
      	$data['main']='indonesia_countries/east_timor.php';
      	$data['heading']='East Timor';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_countries/east_timor', $data);
    }
    public function flores()
    {
      	$data['main']='indonesia_countries/flores.php';
      	$data['heading']='Flores';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_countries/flores', $data);
    }
    public function java()
    {
      	$data['main']='indonesia_countries/java.php';
      	$data['heading']='Java';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_countries/java', $data);
    }
    public function lombok()
    {
      	$data['main']='indonesia_countries/lombok.php';
      	$data['heading']='Lombok';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_countries/lombok', $data);
    }
    public function new_guinea()
    {
      	$data['main']='indonesia_countries/new_guinea.php';
      	$data['heading']='New Guinea';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_countries/new_guinea', $data);
    }
    public function sulawesi()
    {
      	$data['main']='indonesia_countries/sulawesi.php';
      	$data['heading']='Sulawesi';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_countries/sulawesi', $data);
    }
    public function sumatra()
    {
      	$data['main']='indonesia_countries/sumatra.php';
      	$data['heading']='Sumatra';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_countries/sumatra', $data);
    }
    public function sumba()
    {
      	$data['main']='indonesia_countries/sumba.php';
      	$data['heading']='Sumba';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_countries/sumba', $data);
    }
    public function sumbawa()
    {
      	$data['main']='indonesia_countries/sumbawa.php';
      	$data['heading']='Sumbawa';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_countries/sumbawa', $data);
    }
    public function timor()
    {
      	$data['main']='indonesia_countries/timor.php';
      	$data['heading']='Timor';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('indonesia_countries/timor', $data);
    }






}