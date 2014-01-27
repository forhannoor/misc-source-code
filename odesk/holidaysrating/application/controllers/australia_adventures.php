<?php 

class australia_adventures extends CI_Controller
     
{
     public function jungle_surfing()
    {
      	$data['main']='australia_adventures/jungle_surfing.php';
      	$data['heading']='Jungle Surfing';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
      	
        $this->session->set_flashdata('redirectUrl', current_url());
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('australia_adventures/jungle_surfing', $data);
	}


}