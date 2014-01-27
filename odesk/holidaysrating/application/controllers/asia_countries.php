<?php 

class asia_countries extends CI_Controller
{
    public function afghanistan()
    {
      	$data['main']='asia_countries/afghanistan.php';
      	$data['heading']='Afghanistan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/afghanistan', $data);
    }
    public function bangladesh()
    {
      	$data['main']='asia_countries/bangladesh.php';
      	$data['heading']='Bangladesh';
        $data['left_sidebar'] = 'sidebar/left_sidebar';      	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/bangladesh', $data);
    }
    public function bhutan()
    {
      	$data['main']='asia_countries/bhutan.php';
      	$data['heading']='Bhutan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';      	
        
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/bhutan', $data);
    }    
    public function brunei()
    {
      	$data['main']='asia_countries/brunei.php';
      	$data['heading']='Brunei';
        $data['left_sidebar'] = 'sidebar/left_sidebar';      	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/brunei', $data);
    }

    public function burma()
    {
      	$data['main']='asia_countries/burma.php';
      	$data['heading']='Burma (Myanmar)';
        $data['left_sidebar'] = 'sidebar/left_sidebar';      	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/burma', $data);
    }
    public function cambodia()
    {
      	$data['main']='asia_countries/cambodia.php';
      	$data['heading']='Cambodia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/cambodia', $data);
    }
    public function china()
    {
      	$data['main']='asia_countries/china.php';
      	$data['heading']='China';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/china', $data);
    }
    public function east_timor()
    {
      	$data['main']='asia_countries/east_timor.php';
      	$data['heading']='East Timor';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/east_timor', $data);
    }

    public function india()
    {
      	$data['main']='asia_countries/india.php';
      	$data['heading']='India';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/india', $data);
    }
    public function iran()
    {
      	$data['main']='asia_countries/iran.php';
      	$data['heading']='Iran';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/iran', $data);
    }
    public function iraq()
    {
      	$data['main']='asia_countries/iraq.php';
      	$data['heading']='Iraq';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/iraq', $data);
    }
    public function israel()
    {
      	$data['main']='asia_countries/israel.php';
      	$data['heading']='Israel';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/israel', $data);
    }
    public function japan()
    {
      	$data['main']='asia_countries/japan.php';
      	$data['heading']='Japan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/japan', $data);
    }
    public function jordan()
    {
      	$data['main']='asia_countries/jordan.php';
      	$data['heading']='Jordan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/jordan', $data);
    }
    public function kazakhstan()
    {
      	$data['main']='asia_countries/kazakhstan.php';
      	$data['heading']='Kazakhstan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/kazakhstan', $data);
    }
    public function kuwait()
    {
      	$data['main']='asia_countries/kuwait.php';
      	$data['heading']='Kuwait';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/kuwait', $data);
    }
    public function kyrgyzstan()
    {
      	$data['main']='asia_countries/kyrgyzstan.php';
      	$data['heading']='Kyrgyzstan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/kyrgyzstan', $data);
    }
    public function laos()
    {
      	$data['main']='asia_countries/laos.php';
      	$data['heading']='Laos';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/laos', $data);
    }
    public function lebanon()
    {
      	$data['main']='asia_countries/lebanon.php';
      	$data['heading']='Lebanon';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/lebanon', $data);
    }
    public function malaysia()
    {
      	$data['main']='asia_countries/malaysia.php';
      	$data['heading']='Malaysia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/malaysia', $data);
    }
    public function maldives()
    {
      	$data['main']='asia_countries/maldives.php';
      	$data['heading']='Maldives';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/maldives', $data);
    }

    public function mongolia()
    {
      	$data['main']='asia_countries/mongolia.php';
      	$data['heading']='Mongolia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/mongolia', $data);
    }
    public function nepal()
    {
      	$data['main']='asia_countries/nepal.php';
      	$data['heading']='Nepal';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/nepal', $data);
    }
    public function north_korea()
    {
      	$data['main']='asia_countries/north_korea.php';
      	$data['heading']='North Korea';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/north_korea', $data);
    }
    public function oman()
    {
      	$data['main']='asia_countries/oman.php';
      	$data['heading']='Oman';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/oman', $data);
    }
    public function pakistan()
    {
      	$data['main']='asia_countries/pakistan.php';
      	$data['heading']='Pakistan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/pakistan', $data);
    }
    public function philippines()
    {
      	$data['main']='asia_countries/philippines.php';
      	$data['heading']='Philippines';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/philippines', $data);
    }
    public function qatar()
    {
      	$data['main']='asia_countries/qatar.php';
      	$data['heading']='Qatar';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/qatar', $data);
    }
    public function saudi_arabia()
    {
      	$data['main']='asia_countries/saudi_arabia.php';
      	$data['heading']='Saudi Arabia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/saudi_arabia', $data);
    }
    public function south_korea()
    {
      	$data['main']='asia_countries/south_korea.php';
      	$data['heading']='South Korea';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/south_korea', $data);
    }
    public function sri_lanka()
    {
      	$data['main']='asia_countries/sri_lanka.php';
      	$data['heading']='Sri Lanka';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/sri_lanka', $data);
    }
    public function syria()
    {
      	$data['main']='asia_countries/syria.php';
      	$data['heading']='Syria';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/syria', $data);
    }
    public function taiwan()
    {
      	$data['main']='asia_countries/taiwan.php';
      	$data['heading']='Taiwan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/taiwan', $data);
    }
    public function tajikistan()
    {
      	$data['main']='asia_countries/tajikistan.php';
      	$data['heading']='Tajikistan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/tajikistan', $data);
    }
    public function thailand()
    {
      	$data['main']='asia_countries/thailand.php';
      	$data['heading']='Thailand';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/thailand', $data);
    }
        public function turkey()
    {
      	$data['main']='asia_countries/turkey.php';
      	$data['heading']='Turkey';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/turkey', $data);
    }

    public function turkmenistan()
    {
      	$data['main']='asia_countries/turkmenistan.php';
      	$data['heading']='Turkmenistan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/turkmenistan', $data);
    }
    public function uae()
    {
      	$data['main']='asia_countries/uae.php';
      	$data['heading']='United Arab Emirates';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/uae', $data);
    }
    public function uzbekistan()
    {
      	$data['main']='asia_countries/uzbekistan.php';
      	$data['heading']='Uzbekistan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/uzbekistan', $data);
    }
    public function vietnam()
    {
      	$data['main']='asia_countries/vietnam.php';
      	$data['heading']='Vietnam';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/vietnam', $data);
    }
    public function yemen()
    {
      	$data['main']='asia_countries/yemen.php';
      	$data['heading']='Yemen';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_countries/yemen', $data);
    }


}