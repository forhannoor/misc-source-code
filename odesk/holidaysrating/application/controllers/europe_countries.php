<?php 

class europe_countries extends CI_Controller
{
    public function index()
    {
    }    

    public function albania()
    {
      	$data['main']='europe_countries/albania.php';
      	$data['heading']='Albania';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/albania', $data);
    }
    public function armenia()
    {
      	$data['main']='europe_countries/armenia.php';
      	$data['heading']='Armenia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/armenia', $data);
    }
    public function austria()
    {
      	$data['main']='europe_countries/austria.php';
      	$data['heading']='Austria';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/austria', $data);
    }
    public function azerbaijan()
    {
      	$data['main']='europe_countries/azerbijan.php';
      	$data['heading']='Azerbaijan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/azerbaijan', $data);
    }
    public function belarus()
    {
      	$data['main']='europe_countries/belarus.php';
      	$data['heading']='Belarus';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/belarus', $data);
    }
    public function belgium()
    {
      	$data['main']='europe_countries/belgium.php';
      	$data['heading']='Belgium';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/belgium', $data);
    }
    public function bosnia_herzegovina()
    {
      	$data['main']='europe_countries/bosnia_herzegovina.php';
      	$data['heading']='Bosnia Herzegovina';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/bosnia_herzegovina', $data);
    }
    public function bulgaria()
    {
      	$data['main']='europe_countries/bulgaria.php';
      	$data['heading']='Bulgaria';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/bulgaria', $data);
    }
    public function croatia()
    {
      	$data['main']='europe_countries/croatia.php';
      	$data['heading']='Croatia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/croatia', $data);
    }
    public function czech_republic()
    {
      	$data['main']='europe_countries/czech_republic.php';
      	$data['heading']='Czech Republic';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/czech_republic', $data);
    }
    public function denmark()
    {
      	$data['main']='europe_countries/denmark.php';
      	$data['heading']='Denmark';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/denmark', $data);
    }
    public function estonia()
    {
      	$data['main']='europe_countries/estonia.php';
      	$data['heading']='Estonia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/estonia', $data);
    }
    public function finland()
    {
      	$data['main']='europe_countries/finland.php';
      	$data['heading']='Finland';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/finland', $data);
    }
    public function france()
    {
      	$data['main']='europe_countries/france.php';
      	$data['heading']='France';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/france', $data);
    }
    public function georgia()
    {
      	$data['main']='europe_countries/georgia.php';
      	$data['heading']='Georgia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/georgia', $data);
    }
    public function germany()
    {
      	$data['main']='europe_countries/germany.php';
      	$data['heading']='Germany';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/germany', $data);
    }
    public function greece()
    {
      	$data['main']='europe_countries/greece.php';
      	$data['heading']='Greece';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/greece', $data);
    }
    public function hungary()
    {
      	$data['main']='europe_countries/hungary.php';
      	$data['heading']='Hungary';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/hungary', $data);
    }
    public function iceland()
    {
      	$data['main']='europe_countries/iceland.php';
      	$data['heading']='Iceland';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/iceland', $data);
    }
    public function ireland()
    {
      	$data['main']='europe_countries/ireland.php';
      	$data['heading']='Ireland';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/ireland', $data);
    }
    public function italy()
    {
      	$data['main']='europe_countries/italy.php';
      	$data['heading']='Italy';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/italy', $data);
    }
    public function latvia()
    {
      	$data['main']='europe_countries/latvia.php';
      	$data['heading']='Latvia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/latvia', $data);
    }
    public function lithuania()
    {
      	$data['main']='europe_countries/lithuania.php';
      	$data['heading']='Lithuania';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/lithuania', $data);
    }
    public function luxembourg()
    {
      	$data['main']='europe_countries/luxembourg.php';
      	$data['heading']='Luxembourg';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/luxembourg', $data);
    }
    public function macedonia()
    {
      	$data['main']='europe_countries/macedonia.php';
      	$data['heading']='Macedonia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/macedonia', $data);
    }
    public function moldova()
    {
      	$data['main']='europe_countries/moldova.php';
      	$data['heading']='Moldova';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/moldova', $data);
    }
    public function netherlands()
    {
      	$data['main']='europe_countries/netherlands.php';
      	$data['heading']='Netherlands';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/netherlands', $data);
    }
    public function norway()
    {
      	$data['main']='europe_countries/norway.php';
      	$data['heading']='Norway';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/norway', $data);
    }
    public function poland()
    {
      	$data['main']='europe_countries/poland.php';
      	$data['heading']='Poland';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/poland', $data);
    }
    public function portugal()
    {
      	$data['main']='europe_countries/portugal.php';
      	$data['heading']='portugal';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/portugal', $data);
    }
    public function romania()
    {
      	$data['main']='europe_countries/romania.php';
      	$data['heading']='Romania';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/romania', $data);
    }
    public function serbia()
    {
      	$data['main']='europe_countries/serbia.php';
      	$data['heading']='Serbia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/serbia', $data);
    }
    public function slovakia()
    {
      	$data['main']='europe_countries/slovakia.php';
      	$data['heading']='Slovakia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/slovakia', $data);
    }
    public function slovenia()
    {
      	$data['main']='europe_countries/slovenia.php';
      	$data['heading']='Slovenia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/slovenia', $data);
    }
    public function spain()
    {
      	$data['main']='europe_countries/spain.php';
      	$data['heading']='Spain';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/spain', $data);
    }
    public function sweden()
    {
      	$data['main']='europe_countries/sweden.php';
      	$data['heading']='Sweden';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/sweden', $data);
    }
    public function switzerland()
    {
      	$data['main']='europe_countries/switzerland.php';
      	$data['heading']='Switzerland';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/switzerland', $data);
    }
    public function ukraine()
    {
      	$data['main']='europe_countries/ukraine.php';
      	$data['heading']='Ukraine';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/ukraine', $data);
    }
    public function united_kingdom()
    {
      	$data['main']='europe_countries/united_kingdom.php';
      	$data['heading']='United Kingdom';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/united_kingdom', $data);
    }
    public function vatican_city()
    {
      	$data['main']='europe_countries/vatican_city.php';
      	$data['heading']='Vatican City';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('europe_countries/vatican_city', $data);
    }



}