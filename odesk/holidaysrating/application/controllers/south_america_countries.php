<?php 

class south_america_countries extends CI_Controller
{
    public function index()
    {
    }    

    public function argentina()
    {
      	$data['main']='south_america_countries/argentina.php';
      	$data['heading']='Argentina';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('south_america_countries/argentina', $data);
    }
    public function bolivia()
    {
      	$data['main']='south_america_countries/bolivia.php';
      	$data['heading']='Bolivia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('south_america_countries/bolivia', $data);
    }
    public function brazil()
    {
      	$data['main']='south_america_countries/brazil.php';
      	$data['heading']='Brazil';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('south_america_countries/brazil', $data);
    }
    public function chile()
    {
      	$data['main']='south_america_countries/chile.php';
      	$data['heading']='Chile';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('south_america_countries/chile', $data);
    }
    public function equador()
    {
      	$data['main']='south_america_countries/equador.php';
      	$data['heading']='Equador';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('south_america_countries/equador', $data);
    }
    public function falkland_islands()
    {
      	$data['main']='south_america_countries/falkland_islands.php';
      	$data['heading']='Falkland Islands';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('south_america_countries/falkland_islands', $data);
    }
    public function paraguay()
    {
      	$data['main']='south_america_countries/paraguay.php';
      	$data['heading']='Paraguay';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('south_america_countries/paraguay', $data);
    }
    public function peru()
    {
      	$data['main']='south_america_countries/peru.php';
      	$data['heading']='Peru';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('south_america_countries/peru', $data);
    }
    public function uruguay()
    {
      	$data['main']='south_america_countries/uruguay.php';
      	$data['heading']='Uruguay';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('south_america_countries/uruguay', $data);
    }






}