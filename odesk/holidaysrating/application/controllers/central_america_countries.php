<?php 

class central_america_countries extends CI_Controller
{
    public function index()
    {
    }    

    public function belize()
    {
      	$data['main']='central_america_countries/belize.php';
      	$data['heading']='Belize';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_countries/belize', $data);
    }
    public function colombia()
    {
      	$data['main']='central_america_countries/colombia.php';
      	$data['heading']='Colombia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_countries/colombia', $data);
    }
    public function costa_rica()
    {
      	$data['main']='central_america_countries/costa_rica.php';
      	$data['heading']='Costa Rica';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_countries/coasta_rica', $data);
    }
    public function el_salvador()
    {
      	$data['main']='central_america_countries/el_salvador.php';
      	$data['heading']='El Salvador';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_countries/el_salvador', $data);
    }
        public function french_guiana()
    {
      	$data['main']='central_america_countries/french_guiana.php';
      	$data['heading']='French Guiana';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_countries/french_guiana', $data);
    }
    public function guatemala()
    {
      	$data['main']='central_america_countries/guatemala.php';
      	$data['heading']='Guatemala';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_countries/guatemala', $data);
    }
        public function guyana()
    {
      	$data['main']='central_america_countries/guyana.php';
      	$data['heading']='Guyana';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_countries/guyana', $data);
    }

        public function honduras()
    {
      	$data['main']='central_america_countries/honduras.php';
      	$data['heading']='Honduras';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_countries/honduras', $data);
    }

    public function mexico()
    {
      	$data['main']='central_america_countries/mexico.php';
      	$data['heading']='Mexico';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_countries/mexico', $data);
    }
    public function nicaragua()
    {
      	$data['main']='central_america_countries/nicaragua.php';
      	$data['heading']='Nicaragua';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_countries/nicaragua', $data);
    }
        public function panama()
    {
      	$data['main']='central_america_countries/panama.php';
      	$data['heading']='Panama';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_countries/panama', $data);
    }
    public function suriname()
    {
      	$data['main']='central_america_countries/suriname.php';
      	$data['heading']='Suriname';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_countries/suriname', $data);
    }
        public function venezuela()
    {
      	$data['main']='central_america_countries/venezuela.php';
      	$data['heading']='Venezuela';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('central_america_countries/venezuela', $data);
    }








}