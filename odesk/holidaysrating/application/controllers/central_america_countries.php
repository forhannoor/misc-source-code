<?php 

class central_america_countries extends CI_Controller
{
    public function belize()
    {
      	$data['main']='central_america_countries/belize.php';
      	$data['heading']='Belize';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_countries/belize', $data);
    }
    public function colombia()
    {
      	$data['main']='central_america_countries/colombia.php';
      	$data['heading']='Colombia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_countries/colombia', $data);
    }
    public function costa_rica()
    {
      	$data['main']='central_america_countries/costa_rica.php';
      	$data['heading']='Costa Rica';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_countries/costa_rica', $data);
    }
    public function el_salvador()
    {
      	$data['main']='central_america_countries/el_salvador.php';
      	$data['heading']='El Salvador';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_countries/el_salvador', $data);
    }
    public function french_guiana()
    {
      	$data['main']='central_america_countries/french_guiana.php';
      	$data['heading']='French Guiana';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_countries/french_guiana', $data);
    }
    public function guatemala()
    {
      	$data['main']='central_america_countries/guatemala.php';
      	$data['heading']='Guatemala';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_countries/guatemala', $data);
    }
        public function guyana()
    {
      	$data['main']='central_america_countries/guyana.php';
      	$data['heading']='Guyana';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_countries/guyana', $data);
    }

        public function honduras()
    {
      	$data['main']='central_america_countries/honduras.php';
      	$data['heading']='Honduras';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_countries/honduras', $data);
    }

    public function mexico()
    {
      	$data['main']='central_america_countries/mexico.php';
      	$data['heading']='Mexico';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_countries/mexico', $data);
    }
    public function nicaragua()
    {
      	$data['main']='central_america_countries/nicaragua.php';
      	$data['heading']='Nicaragua';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_countries/nicaragua', $data);
    }
        public function panama()
    {
      	$data['main']='central_america_countries/panama.php';
      	$data['heading']='Panama';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_countries/panama', $data);
    }
    public function suriname()
    {
      	$data['main']='central_america_countries/suriname.php';
      	$data['heading']='Suriname';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_countries/suriname', $data);
    }
        public function venezuela()
    {
      	$data['main']='central_america_countries/venezuela.php';
      	$data['heading']='Venezuela';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('central_america_countries/venezuela', $data);
    }








}