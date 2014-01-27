<?php 

class russia_national_parks extends CI_Controller
{
    public function index()
    {
    }    
    
    public function adygeya_parks()
    {
      	$data['main']='russia_national_parks/adygeya_parks.php';
      	$data['heading']='National Parks';
        $data['right_bar_parks'] = 'sidebar/right_bar_parks';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_national_parks/adygeya_parks', $data);
    }
    





}