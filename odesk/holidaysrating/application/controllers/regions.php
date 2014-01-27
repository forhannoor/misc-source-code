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
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/australia', $data);
    }
    
        public function africa()
    {
    	$data['main']='regions/africa.php';
    	$data['heading']='Africa';
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/africa', $data);
    }

    public function antarctica()
    {
    	$data['main']='regions/antarctica.php';
    	$data['heading']='Antarctica';
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/antarctica', $data);
    }
    public function asia()
    {
    	$data['main']='regions/asia.php';
    	$data['heading']='Asia';
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/asia', $data);
    }
        public function caribbean()
    {
    	$data['main']='regions/caribbean.php';
    	$data['heading']='Caribbean';
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/caribbean', $data);
    }
    public function central_america()
    {
    	$data['main']='regions/central_america.php';
    	$data['heading']='Central America';
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/central_america', $data);
    }
    public function europe()
    {
    	$data['main']='regions/europe.php';
    	$data['heading']='Europe';
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/europe', $data);
    }
    public function indonesia()
    {
    	$data['main']='regions/indonesia.php';
    	$data['heading']='Indonesia';
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/indonesia', $data);
    }
    public function middle_east()
    {
    	$data['main']='regions/middle_east.php';
    	$data['heading']='Middle East';
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/middle_east', $data);
    }
    public function north_america()
    {
    	$data['main']='regions/north_america.php';
    	$data['heading']='North America';
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/north_america', $data);
    }
    public function oceania()
    {
    	$data['main']='regions/oceania.php';
    	$data['heading']='Oceania';
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/oceania', $data);
    }
    public function russia()
    {
    	$data['main']='regions/russia.php';
    	$data['heading']='Russia';
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/russia', $data);
    }
    public function south_america()
    {
    	$data['main']='regions/south_america.php';
    	$data['heading']='South America';
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/south_america', $data);
    }
    public function usa()
    {
    	$data['main']='regions/usa.php';
    	$data['heading']='United States of America';
    	
    	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
    	
    	$this->load->view('regions/usa', $data);
    }

}