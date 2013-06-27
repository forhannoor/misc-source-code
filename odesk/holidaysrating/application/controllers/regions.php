<?php 

class regions extends CI_Controller
{
    public function index()
    {

    }    

    public function australia()
    {
    	$data['main']='regions/australia.php';
    	$data['heading']='Australia';
    	$this->load->model('User_model');
    	
    	if($this->ion_auth->logged_in())
			$data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
    	
    	$this->load->view('regions/australia', $data);
    	//$this->load->view('template', $data);
    }
    
        public function africa()
    {
    	$data['main']='regions/africa.php';
    	$data['heading']='Africa';
    	$this->load->model('User_model');
    	
    	if($this->ion_auth->logged_in())
			$data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
    	
    	$this->load->view('regions/africa', $data);
    	//$this->load->view('template', $data);
    }

    public function antartica()
    {
    	$data['main']='regions/antartica.php';
    	$data['heading']='Antartica';
    	$this->load->model('User_model');
    	
    	if($this->ion_auth->logged_in())
			$data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
    	
    	$this->load->view('regions/antartica', $data);
    	//$this->load->view('template', $data);
    }
    public function asia()
    {
    	$data['main']='regions/asia.php';
    	$data['heading']='Asia';
    	$this->load->model('User_model');
    	
    	if($this->ion_auth->logged_in())
			$data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
    	
    	$this->load->view('regions/asia', $data);
    	//$this->load->view('template', $data);
    }
        public function caribbean()
    {
    	$data['main']='regions/caribbean.php';
    	$data['heading']='Caribbean';
    	$this->load->model('User_model');
    	
    	if($this->ion_auth->logged_in())
			$data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
    	
    	$this->load->view('regions/caribbean', $data);
    	//$this->load->view('template', $data);
    }
    public function central_america()
    {
    	$data['main']='regions/central_america.php';
    	$data['heading']='Central America';
    	$this->load->model('User_model');
    	
    	if($this->ion_auth->logged_in())
			$data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
    	
    	$this->load->view('regions/central_america', $data);
    	//$this->load->view('template', $data);
    }
    public function europe()
    {
    	$data['main']='regions/europe.php';
    	$data['heading']='Europe';
    	$this->load->model('User_model');
    	
    	if($this->ion_auth->logged_in())
			$data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
    	
    	$this->load->view('regions/europe', $data);
    	//$this->load->view('template', $data);
    }
    public function indonesia()
    {
    	$data['main']='regions/indonesia.php';
    	$data['heading']='Indonesia';
    	$this->load->model('User_model');
    	
    	if($this->ion_auth->logged_in())
			$data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
    	
    	$this->load->view('regions/indonesia', $data);
    	//$this->load->view('template', $data);
    }

    public function north_america()
    {
    	$data['main']='regions/north_america.php';
    	$data['heading']='North America';
    	$this->load->model('User_model');
    	
    	if($this->ion_auth->logged_in())
			$data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
    	
    	$this->load->view('regions/north_america', $data);
    	//$this->load->view('template', $data);
    }
    public function oceania()
    {
    	$data['main']='regions/oceania.php';
    	$data['heading']='Oceania';
    	$this->load->model('User_model');
    	
    	if($this->ion_auth->logged_in())
			$data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
    	
    	$this->load->view('regions/oceania', $data);
    	//$this->load->view('template', $data);
    }
    public function russia()
    {
    	$data['main']='regions/russia.php';
    	$data['heading']='Russia';
    	$this->load->model('User_model');
    	
    	if($this->ion_auth->logged_in())
			$data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
    	
    	$this->load->view('regions/russia', $data);
    	//$this->load->view('template', $data);
    }
    public function south_america()
    {
    	$data['main']='regions/south_america.php';
    	$data['heading']='South America';
    	$this->load->model('User_model');
    	
    	if($this->ion_auth->logged_in())
			$data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
    	
    	$this->load->view('regions/south_america', $data);
    	//$this->load->view('template', $data);
    }
    public function usa()
    {
    	$data['main']='regions/usa.php';
    	$data['heading']='United States of America';
    	$this->load->model('User_model');
    	
    	if($this->ion_auth->logged_in())
			$data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
    	
    	$this->load->view('regions/usa', $data);
    	//$this->load->view('template', $data);
    }

}