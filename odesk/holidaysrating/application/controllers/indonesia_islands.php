<?php 

class indonesia_islands extends CI_Controller
{
    public function bali()
    {
      	$data['main']='indonesia_islands/bali.php';
      	$data['heading']='Bali';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('indonesia_islands/bali', $data);
    }
    public function borneo()
    {
      	$data['main']='indonesia_islands/borneo.php';
      	$data['heading']='Borneo';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('indonesia_islands/borneo', $data);
    }
    public function flores()
    {
      	$data['main']='indonesia_islands/flores.php';
      	$data['heading']='Flores';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('indonesia_islands/flores', $data);
    }
    public function java()
    {
      	$data['main']='indonesia_islands/java.php';
      	$data['heading']='Java';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('indonesia_islands/java', $data);
    }
    public function komodo()
    {
      	$data['main']='indonesia_islands/komodo.php';
      	$data['heading']='Komodo';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('indonesia_islands/komodo', $data);
    }

    public function lombok()
    {
      	$data['main']='indonesia_islands/lombok.php';
      	$data['heading']='Lombok';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('indonesia_islands/lombok', $data);
    }
    public function papua()
    {
      	$data['main']='indonesia_islands/papua.php';
      	$data['heading']='Papua';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('indonesia_islands/papua', $data);
    }
    public function sulawesi()
    {
      	$data['main']='indonesia_islands/sulawesi.php';
      	$data['heading']='Sulawesi';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('indonesia_islands/sulawesi', $data);
    }
    public function sumatra()
    {
      	$data['main']='indonesia_islands/sumatra.php';
      	$data['heading']='Sumatra';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('indonesia_islands/sumatra', $data);
    }
    public function sumba()
    {
      	$data['main']='indonesia_islands/sumba.php';
      	$data['heading']='Sumba';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('indonesia_islands/sumba', $data);
    }
    public function sumbawa()
    {
      	$data['main']='indonesia_islands/sumbawa.php';
      	$data['heading']='Sumbawa';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('indonesia_islands/sumbawa', $data);
    }
    public function west_timor()
    {
      	$data['main']='indonesia_islands/west_timor.php';
      	$data['heading']='West Timor';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('indonesia_islands/west_timor', $data);
    }






}