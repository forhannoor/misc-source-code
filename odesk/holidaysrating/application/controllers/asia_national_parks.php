<?php 

class asia_national_parks extends CI_Controller
{
    public function index()
    {
    }    
    
    public function afghanistan_parks()
    {
      	$data['main']='asia_national_parks/afghanistan_parks.php';
      	$data['heading']='National Parks';
        $data['right_bar_parks'] = 'sidebar/right_bar_parks';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('asia_national_parks/afghanistan_parks', $data);
    }
    





}