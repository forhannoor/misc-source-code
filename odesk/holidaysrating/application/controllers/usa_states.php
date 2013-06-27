<?php 

class usa_states extends CI_Controller
{
    public function index()
    {
    }    

    public function alabama()
    {
      	$data['main']='usa_states/alabama.php';
      	$data['heading']='Alabama';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/alabama', $data);
    }
    public function alaska()
    {
      	$data['main']='usa_states/alaska.php';
      	$data['heading']='Alaska';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/alaska', $data);
    }
    public function arizona()
    {
      	$data['main']='usa_states/arizona.php';
      	$data['heading']='Arizona';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/arizona', $data);
    }
    public function arkansas()
    {
      	$data['main']='usa_states/arkansas.php';
      	$data['heading']='Arkansas';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/arkansas', $data);
    }
    public function california()
    {
      	$data['main']='usa_states/california.php';
      	$data['heading']='California';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/california', $data);
    }
    public function colorado()
    {
      	$data['main']='usa_states/colorado.php';
      	$data['heading']='Colorado';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/colorado', $data);
    }
    public function connecticut()
    {
      	$data['main']='usa_states/connecticut.php';
      	$data['heading']='Connecticut';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/connecticut', $data);
    }
    public function delaware()
    {
      	$data['main']='usa_states/delaware.php';
      	$data['heading']='Delaware';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/delaware', $data);
    }
    public function florida()
    {
      	$data['main']='usa_states/florida.php';
      	$data['heading']='Florida';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/florida', $data);
    }
    public function georgia_us()
    {
      	$data['main']='usa_states/georgia_us.php';
      	$data['heading']='Georgia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/georgia_us', $data);
    }
    public function hawaii()
    {
      	$data['main']='usa_states/hawaii.php';
      	$data['heading']='Hawaii';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/hawaii', $data);
    }
    public function idaho()
    {
      	$data['main']='usa_states/idaho.php';
      	$data['heading']='Idaho';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/idaho', $data);
    }
    public function illinois()
    {
      	$data['main']='usa_states/illinois.php';
      	$data['heading']='illinois';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/illinois', $data);
    }
    public function indiana()
    {
      	$data['main']='usa_states/indiana.php';
      	$data['heading']='Indiana';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/indiana', $data);
    }
    public function iowa()
    {
      	$data['main']='usa_states/iowa.php';
      	$data['heading']='Iowa';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/iowa', $data);
    }
    public function kansas()
    {
      	$data['main']='usa_states/kansas.php';
      	$data['heading']='Kansas';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/kansas', $data);
    }
    public function kentucky()
    {
      	$data['main']='usa_states/kentucky.php';
      	$data['heading']='Kentucky';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/kentucky', $data);
    }
    public function louisiana()
    {
      	$data['main']='usa_states/louisiana.php';
      	$data['heading']='Louisiana';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/louisiana', $data);
    }
    public function maine()
    {
      	$data['main']='usa_states/maine.php';
      	$data['heading']='Maine';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/maine', $data);
    }
    public function maryland()
    {
      	$data['main']='usa_states/maryland.php';
      	$data['heading']='Maryland';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/maryland', $data);
    }
    public function massachusetts()
    {
      	$data['main']='usa_states/massachusetts.php';
      	$data['heading']='Massachusetts';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/massachusetts', $data);
    }
    public function michigan()
    {
      	$data['main']='usa_states/michigan.php';
      	$data['heading']='Michigan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/michigan', $data);
    }
    public function minnesota()
    {
      	$data['main']='usa_states/minnesota.php';
      	$data['heading']='Minnesota';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/minnesota', $data);
    }
    public function mississippi()
    {
      	$data['main']='usa_states/mississippi.php';
      	$data['heading']='Mississippi';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/mississippi', $data);
    }
    public function missouri()
    {
      	$data['main']='usa_states/missouri.php';
      	$data['heading']='Missouri';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/missouri', $data);
    }
    public function montana()
    {
      	$data['main']='usa_states/montana.php';
      	$data['heading']='Montana';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/montana', $data);
    }
    public function nebraska()
    {
      	$data['main']='usa_states/nebraska.php';
      	$data['heading']='Nebraska';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/nebraska', $data);
    }
    public function nevada()
    {
      	$data['main']='usa_states/nevada.php';
      	$data['heading']='Nevada';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/nevada', $data);
    }
    public function new_hampshire()
    {
      	$data['main']='usa_states/new_hampshire.php';
      	$data['heading']='New Hampshire';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/new_hampshire', $data);
    }
    public function new_jersey()
    {
      	$data['main']='usa_states/new_jersey.php';
      	$data['heading']='New Jersey';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/new_jersey', $data);
    }
    public function new_mexico()
    {
      	$data['main']='usa_states/new_mexico.php';
      	$data['heading']='New Mexico';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/new_mexico', $data);
    }
    public function new_york()
    {
      	$data['main']='usa_states/new_york.php';
      	$data['heading']='New York';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/new_york', $data);
    }
    public function north_carolina()
    {
      	$data['main']='usa_states/north_carolina.php';
      	$data['heading']='North Carolina ';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/north_carolina', $data);
    }
    public function ohio()
    {
      	$data['main']='usa_states/ohio.php';
      	$data['heading']='Ohio';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/ohio', $data);
    }
    public function oklahoma()
    {
      	$data['main']='usa_states/oklahoma.php';
      	$data['heading']='Oklahoma';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/oklahoma', $data);
    }
    public function oregon()
    {
      	$data['main']='usa_states/oregon.php';
      	$data['heading']='Oregon';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/oregon', $data);
    }
    public function pennsylvania()
    {
      	$data['main']='usa_states/pennsylvania.php';
      	$data['heading']='Pennsylvania';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/pennsylvania', $data);
    }
    public function rhode_island()
    {
      	$data['main']='usa_states/rhode_island.php';
      	$data['heading']='Rhode Island';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/rhode_island', $data);
    }
    public function south_carolina()
    {
      	$data['main']='usa_states/south_carolina.php';
      	$data['heading']='South Carolina';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/south_carolina', $data);
    }
    public function south_dakota()
    {
      	$data['main']='usa_states/south_dakota.php';
      	$data['heading']='South Dakota';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/south_dakota', $data);
    }
    public function tennessee()
    {
      	$data['main']='usa_states/tennessee.php';
      	$data['heading']='Tennessee';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/tennessee', $data);
    }
    public function texas()
    {
      	$data['main']='usa_states/texas.php';
      	$data['heading']='Texas';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/texas', $data);
    }
    public function utah()
    {
      	$data['main']='usa_states/utah.php';
      	$data['heading']='Utah';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/utah', $data);
    }
    public function vermont()
    {
      	$data['main']='usa_states/vermont.php';
      	$data['heading']='Vermont';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/vermont', $data);
    }
    public function virginia()
    {
      	$data['main']='usa_states/virginia.php';
      	$data['heading']='Virginia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/virginia', $data);
    }
    public function washington()
    {
      	$data['main']='usa_states/washington.php';
      	$data['heading']='Washington';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/washington', $data);
    }
    public function west_viginia()
    {
      	$data['main']='usa_states/west_virginia.php';
      	$data['heading']='West Virginia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/west_virginia', $data);
    }
    public function wisconsin()
    {
      	$data['main']='usa_states/wisconsin.php';
      	$data['heading']='Wisconsin';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/wisconsin', $data);
    }
    public function wyoming()
    {
      	$data['main']='usa_states/wyoming.php';
      	$data['heading']='Wyoming';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('usa_states/wyoming', $data);
    }



























}