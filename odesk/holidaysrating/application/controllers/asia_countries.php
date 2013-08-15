<?php 

class asia_countries extends CI_Controller
{
    public function index()
    {
    }    

    public function afghanistan()
    {
      	$data['main']='asia_countries/afghanistan.php';
      	$data['heading']='Afghanistan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/afghanistan', $data);
    }
    public function bangladesh()
    {
      	$data['main']='asia_countries/bangladesh.php';
      	$data['heading']='Bangladesh';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/bangladesh', $data);
    }
    public function bhutan()
    {
      	$data['main']='asia_countries/bhutan.php';
      	$data['heading']='Bhutan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/bhutan', $data);
    }
    public function burma()
    {
      	$data['main']='asia_countries/burma.php';
      	$data['heading']='Burma (Myanmar)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/burma', $data);
    }
    public function cambodja()
    {
      	$data['main']='asia_countries/cambodja.php';
      	$data['heading']='Cambodja';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/cambodja', $data);
    }
    public function china()
    {
      	$data['main']='asia_countries/china.php';
      	$data['heading']='China';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/china', $data);
    }
    public function india()
    {
      	$data['main']='asia_countries/india.php';
      	$data['heading']='India';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/india', $data);
    }
    public function iran()
    {
      	$data['main']='asia_countries/iran.php';
      	$data['heading']='Iran';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/iran', $data);
    }
    public function iraq()
    {
      	$data['main']='asia_countries/iraq.php';
      	$data['heading']='Iraq';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/iraq', $data);
    }
    public function israel()
    {
      	$data['main']='asia_countries/israel.php';
      	$data['heading']='Israel';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/israel', $data);
    }
    public function japan()
    {
      	$data['main']='asia_countries/japan.php';
      	$data['heading']='Japan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/japan', $data);
    }
    public function jordan()
    {
      	$data['main']='asia_countries/jordan.php';
      	$data['heading']='Jordan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/jordan', $data);
    }
    public function kazakhstan()
    {
      	$data['main']='asia_countries/kazakhstan.php';
      	$data['heading']='Kazakhstan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/kazakhstan', $data);
    }
    public function kuwait()
    {
      	$data['main']='asia_countries/kuwait.php';
      	$data['heading']='Kuwait';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/kuwait', $data);
    }
    public function kyrgyzstan()
    {
      	$data['main']='asia_countries/kyrgyzstan.php';
      	$data['heading']='Kyrgyzstan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/kyrgyzstan', $data);
    }
    public function laos()
    {
      	$data['main']='asia_countries/laos.php';
      	$data['heading']='Laos';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/laos', $data);
    }
    public function lebanon()
    {
      	$data['main']='asia_countries/lebanon.php';
      	$data['heading']='Lebanon';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/lebanon', $data);
    }
    public function malaysia()
    {
      	$data['main']='asia_countries/malaysia.php';
      	$data['heading']='Malaysia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/malaysia', $data);
    }
    public function maldives()
    {
      	$data['main']='asia_countries/maldives.php';
      	$data['heading']='Maldives';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/maldives', $data);
    }

    public function mongolia()
    {
      	$data['main']='asia_countries/mongolia.php';
      	$data['heading']='Mongolia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/mongolia', $data);
    }
    public function nepal()
    {
      	$data['main']='asia_countries/nepal.php';
      	$data['heading']='Nepal';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/nepal', $data);
    }
    public function north_korea()
    {
      	$data['main']='asia_countries/north_korea.php';
      	$data['heading']='North Korea';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/north_korea', $data);
    }
    public function oman()
    {
      	$data['main']='asia_countries/oman.php';
      	$data['heading']='Oman';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/oman', $data);
    }
    public function pakistan()
    {
      	$data['main']='asia_countries/pakistan.php';
      	$data['heading']='Pakistan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/pakistan', $data);
    }
    public function philippines()
    {
      	$data['main']='asia_countries/philippines.php';
      	$data['heading']='Philippines';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/philippines', $data);
    }
    public function qatar()
    {
      	$data['main']='asia_countries/qatar.php';
      	$data['heading']='Qatar';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/qatar', $data);
    }
    public function saudi_arabia()
    {
      	$data['main']='asia_countries/saudi_arabia.php';
      	$data['heading']='Saudi Arabia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/saudi_arabia', $data);
    }
    public function south_korea()
    {
      	$data['main']='asia_countries/south_korea.php';
      	$data['heading']='South Korea';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/south_korea', $data);
    }
    public function sri_lanka()
    {
      	$data['main']='asia_countries/sri_lanka.php';
      	$data['heading']='Sri Lanka';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/sri_lanka', $data);
    }
    public function syria()
    {
      	$data['main']='asia_countries/syria.php';
      	$data['heading']='Syria';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/syria', $data);
    }
    public function taiwan()
    {
      	$data['main']='asia_countries/taiwan.php';
      	$data['heading']='Taiwan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/taiwan', $data);
    }
    public function tajikistan()
    {
      	$data['main']='asia_countries/tajikistan.php';
      	$data['heading']='Tajikistan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/tajikistan', $data);
    }
    public function thailand()
    {
      	$data['main']='asia_countries/thailand.php';
      	$data['heading']='Thailand';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/thailand', $data);
    }
        public function turkey()
    {
      	$data['main']='asia_countries/turkey.php';
      	$data['heading']='Turkey';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/turkey', $data);
    }

    public function turkmenistan()
    {
      	$data['main']='asia_countries/turkmenistan.php';
      	$data['heading']='Turkmenistan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/turkmenistan', $data);
    }
    public function uae()
    {
      	$data['main']='asia_countries/uae.php';
      	$data['heading']='United Arab Emirates';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/uae', $data);
    }
    public function uzbekistan()
    {
      	$data['main']='asia_countries/uzbekistan.php';
      	$data['heading']='Uzbekistan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/uzbekistan', $data);
    }
    public function vietnam()
    {
      	$data['main']='asia_countries/vietnam.php';
      	$data['heading']='Vietnam';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/vietnam', $data);
    }
    public function yemen()
    {
      	$data['main']='asia_countries/yemen.php';
      	$data['heading']='Yemen';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('asia_countries/yemen', $data);
    }


}