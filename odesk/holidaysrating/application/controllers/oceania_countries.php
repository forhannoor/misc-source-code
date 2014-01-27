<?php 

class oceania_countries extends CI_Controller
{
    public function cook_islands()
    {
      	$data['main']='oceania_countries/cook_islands.php';
      	$data['heading']='Cook Islands';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/cook_islands', $data);
    }
    public function fiji()
    {
      	$data['main']='oceania_countries/fiji.php';
      	$data['heading']='Fiji';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/fiji', $data);
    }
    public function french_polynesia()
    {
      	$data['main']='oceania_countries/french_polynesia.php';
      	$data['heading']='French Polynesia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/french_polynesia', $data);
    }
    public function kiribati()
    {
      	$data['main']='oceania_countries/kiribati.php';
      	$data['heading']='Kiribati';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/kiribati', $data);
    }
    public function marshall_islands()
    {
      	$data['main']='oceania_countries/marshall_islands.php';
      	$data['heading']='Marshall Islands';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/marshall_islands', $data);
    }
    public function nauru()
    {
      	$data['main']='oceania_countries/nauru.php';
      	$data['heading']='Nauru';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/nauru', $data);
    }
    public function new_zealand()
    {
      	$data['main']='oceania_countries/new_zealand.php';
      	$data['heading']='New Zealand';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/new_zealand', $data);
    }

    public function niue()
    {
      	$data['main']='oceania_countries/niue.php';
      	$data['heading']='Niue';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/niue', $data);
    }
    public function northern_mariana_islands()
    {
      	$data['main']='oceania_countries/northern_mariana_islands.php';
      	$data['heading']='Northern Mariana Islands';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/northern_mariana_islands', $data);
    }
    public function papua_new_guinea()
    {
      	$data['main']='oceania_countries/papua_new_guinea.php';
      	$data['heading']='Papua New Guinea';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/papua_new_guinea', $data);
    }
    public function pitcairn_islands()
    {
      	$data['main']='oceania_countries/pitcairn_islands.php';
      	$data['heading']='Pitcairn Islands';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/pitcairn_islands', $data);
    }
    public function samoa()
    {
      	$data['main']='oceania_countries/samoa.php';
      	$data['heading']='Samoa';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/samoa', $data);
    }
    public function solomon_islands()
    {
      	$data['main']='oceania_countries/solomon_islands.php';
      	$data['heading']='Solomon Islands';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/solomon_islands', $data);
    }
    public function tonga()
    {
      	$data['main']='oceania_countries/tonga.php';
      	$data['heading']='Tonga';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/tonga', $data);
    }
        public function tuvalu()
    {
      	$data['main']='oceania_countries/tuvalu.php';
      	$data['heading']='Tuvalu';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/tuvalu', $data);
    }
    public function us_samoa()
    {
      	$data['main']='oceania_countries/us_samoa.php';
      	$data['heading']='U.S. Samoa';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/us_samoa', $data);
    }

    public function vanuatu()
    {
      	$data['main']='oceania_countries/vanuatu.php';
      	$data['heading']='Vanuatu';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('oceania_countries/vanuatu', $data);
    }





}