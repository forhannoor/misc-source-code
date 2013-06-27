<?php 

class list_favorites extends CI_Controller
{
    public function index()
    {
    }    

    public function amazing_beaches()
    {
      	$data['main']='list_favorites/amazing_beaches.php';
      	$data['heading']='Amazing beaches';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('list_favorites/amazing_beaches', $data);
    }
    public function ancient_wonders()
    {
      	$data['main']='list_favorites/ancient_wonders.php';
      	$data['heading']='Amazing beaches';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('list_favorites/ancient_wonders', $data);
    }
    public function city_trips()
    {
      	$data['main']='list_favorites/city_trips.php';
      	$data['heading']='City trips';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('list_favorites/city_trips', $data);
    }
    public function cruises()
    {
      	$data['main']='list_favorites/cruises.php';
      	$data['heading']='Cruises';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('list_favorites/cruises', $data);
    }
    public function diving()
    {
      	$data['main']='list_favorites/diving.php';
      	$data['heading']='Diving';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('list_favorites/diving', $data);
    }
    public function festivals()
    {
      	$data['main']='list_favorites/festivals.php';
      	$data['heading']='Festivals';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('list_favorites/festivals', $data);
    }
    public function road_trips()
    {
      	$data['main']='list_favorites/road_trips.php';
      	$data['heading']='Road trips';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('list_favorites/road_trips', $data);
    }
    public function ski_locations()
    {
      	$data['main']='list_favorites/ski_locations.php';
      	$data['heading']='Ski locations';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('list_favorites/ski_locations', $data);
    }
    public function train_trips()
    {
      	$data['main']='list_favorites/train_trips.php';
      	$data['heading']='Train trips';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('list_favorites/train_trips', $data);
    }
    public function magical_islands()
    {
      	$data['main']='list_favorites/magical_islands.php';
      	$data['heading']='Magical islands';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('list_favorites/magical_islands', $data);
    }
    public function romantic_cities()
    {
      	$data['main']='list_favorites/romantic_cities.php';
      	$data['heading']='Romantic cities';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('list_favorites/romantic_cities', $data);
    }





}