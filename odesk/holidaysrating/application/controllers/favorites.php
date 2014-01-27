<?php 

class favorites extends CI_Controller
{
    public function index()
    {
    }    

    public function amazing_beaches()
    {
      	$data['main']='favorites/amazing_beaches.php';
      	$data['heading']='Amazing beaches';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/amazing_beaches', $data);
    }
    public function ancient_wonders()
    {
      	$data['main']='favorites/ancient_wonders.php';
      	$data['heading']='Amazing beaches';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/ancient_wonders', $data);
    }
    public function city_trips()
    {
      	$data['main']='favorites/city_trips.php';
      	$data['heading']='City trips';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/city_trips', $data);
    }
    public function cruises()
    {
      	$data['main']='favorites/cruises.php';
      	$data['heading']='Cruises';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/cruises', $data);
    }
    public function diving()
    {
      	$data['main']='favorites/diving.php';
      	$data['heading']='Diving';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/diving', $data);
    }
    public function festivals()
    {
      	$data['main']='favorites/festivals.php';
      	$data['heading']='Festivals';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/festivals', $data);
    }
    public function road_trips()
    {
      	$data['main']='favorites/road_trips.php';
      	$data['heading']='Road trips';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/road_trips', $data);
    }
    public function ski_locations()
    {
      	$data['main']='favorites/ski_locations.php';
      	$data['heading']='Ski locations';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/ski_locations', $data);
    }
    public function train_trips()
    {
      	$data['main']='favorites/train_trips.php';
      	$data['heading']='Train trips';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/train_trips', $data);
    }
    public function magical_islands()
    {
      	$data['main']='favorites/magical_islands.php';
      	$data['heading']='Magical islands';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/magical_islands', $data);
    }
    public function romantic_cities()
    {
      	$data['main']='favorites/romantic_cities.php';
      	$data['heading']='Romantic cities';
        $data['right_bar_fav'] = 'sidebar/right_bar_fav';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('favorites/romantic_cities', $data);
    }





}