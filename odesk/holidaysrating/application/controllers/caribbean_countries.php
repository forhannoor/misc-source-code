<?php 

class caribbean_countries extends CI_Controller
{
    public function anguilla()
    {
      	$data['main']='caribbean_countries/anguilla.php';
      	$data['heading']='Anguilla';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/anguilla', $data);
    }
    public function antigua()
    {
      	$data['main']='caribbean_countries/antigua.php';
      	$data['heading']='Anguilla';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/antigua', $data);
    }
    public function aruba()
    {
      	$data['main']='caribbean_countries/aruba.php';
      	$data['heading']='Aruba';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/aruba', $data);
    }
    public function bahamas()
    {
      	$data['main']='caribbean_countries/bahamas.php';
      	$data['heading']='Bahamas';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/bahamas', $data);
    }
    public function barbados()
    {
      	$data['main']='caribbean_countries/barbados.php';
      	$data['heading']='Barbados';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/barbados', $data);
    }
    public function barbuda()
    {
      	$data['main']='caribbean_countries/barbuda.php';
      	$data['heading']='Barbuda';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/barbuda', $data);
    }    
    public function bermuda()
    {
      	$data['main']='caribbean_countries/bermuda.php';
      	$data['heading']='Bermuda';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/bermuda', $data);
    }
    public function bonaire()
    {
      	$data['main']='caribbean_countries/bonaire.php';
      	$data['heading']='Bonaire';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/bonaire', $data);
    }
    public function british_virgin_islands()
    {
      	$data['main']='caribbean_countries/british_virgin_islands.php';
      	$data['heading']='British Virgin Islands';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/british_virgin_islands', $data);
    }
    public function cayman_islands()
    {
      	$data['main']='caribbean_countries/cayman_islands.php';
      	$data['heading']='Cayman Islands';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/cayman_islands', $data);
    }
    public function cuba()
    {
      	$data['main']='caribbean_countries/cuba.php';
      	$data['heading']='Cuba';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/cuba', $data);
    }
    public function curacao()
    {
      	$data['main']='caribbean_countries/curacao.php';
      	$data['heading']='Curaçao';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/curacao', $data);
    }
    public function dominica()
    {
      	$data['main']='caribbean_countries/dominica.php';
      	$data['heading']='Domenica';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/dominica', $data);
    }
    public function dominican_republic()
    {
      	$data['main']='caribbean_countries/dominican_republic.php';
      	$data['heading']='Dominican Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/dominican_republic', $data);
    }
    public function grenada()
    {
      	$data['main']='caribbean_countries/grenada.php';
      	$data['heading']='Grenada';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/grenada', $data);
    }
    public function grenadines()
    {
      	$data['main']='caribbean_countries/grenadines.php';
      	$data['heading']='Grenadines';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/grenadines', $data);
    }
        public function guadeloupe()
    {
      	$data['main']='caribbean_countries/guadeloupe.php';
      	$data['heading']='Guadeloupe';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/guadeloupe', $data);
    }
    public function haiti()
    {
      	$data['main']='caribbean_countries/haiti.php';
      	$data['heading']='Haiti';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/haiti', $data);
    }
    public function jamaica()
    {
      	$data['main']='caribbean_countries/jamaica.php';
      	$data['heading']='Jamaica';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/jamaica', $data);
    }
    public function martinique()
    {
      	$data['main']='caribbean_countries/martinique.php';
      	$data['heading']='Martinique';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/martinique', $data);
    }
    public function montserrat()
    {
      	$data['main']='caribbean_countries/montserrat.php';
      	$data['heading']='Montserrat';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/montserrat', $data);
    }
    public function puerto_rico()
    {
      	$data['main']='caribbean_countries/puerto_rico.php';
      	$data['heading']='Puerto Rico';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/puerto_rico', $data);
    }
    public function saba()
    {
      	$data['main']='caribbean_countries/saba.php';
      	$data['heading']='Saba';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/saba', $data);
    }
    public function saint_barthelemy()
    {
      	$data['main']='caribbean_countries/saint_barthelemy.php';
      	$data['heading']='Saint Barthélemy';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/saint_barthelemy', $data);
    }
    public function saint_kitts_and_nevis()
    {
      	$data['main']='caribbean_countries/saint_kitts_and_nevis.php';
      	$data['heading']='Saint Kitts and Nevis';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/saint_kitts_and_nevis', $data);
    }
    public function saint_lucia()
    {
      	$data['main']='caribbean_countries/saint_lucia.php';
      	$data['heading']='Saint Lucia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/saint_lucia', $data);
    }
    public function saint_vincent()
    {
      	$data['main']='caribbean_countries/saint_vincent.php';
      	$data['heading']='Saint Vincent';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/saint_vincent', $data);
    }
    public function sint_eustatius()
    {
      	$data['main']='caribbean_countries/sint_eustatius.php';
      	$data['heading']='Sint Eustatius';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/sint_eustatius', $data);
    }
    public function saint_martin()
    {
      	$data['main']='caribbean_countries/saint_martin.php';
      	$data['heading']='Saint Martin';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/saint_martin', $data);
    }
    public function trinidad_and_tobago()
    {
      	$data['main']='caribbean_countries/trinidad_and_tobago.php';
      	$data['heading']='Trinidad and Tobago';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/trinidad_and_tobago', $data);
    }
    public function us_virgin_islands()
    {
      	$data['main']='caribbean_countries/us_virgin_islands.php';
      	$data['heading']='U.S. Virgin Islands';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('caribbean_countries/us_virgin_islands', $data);
    }


}