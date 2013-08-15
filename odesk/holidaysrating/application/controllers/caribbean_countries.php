<?php 

class caribbean_countries extends CI_Controller
{
    public function index()
    {
    }    

    public function anguilla()
    {
      	$data['main']='caribbean_countries/anguilla.php';
      	$data['heading']='Anguilla';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/anguilla', $data);
    }
    public function antigua()
    {
      	$data['main']='caribbean_countries/antigua.php';
      	$data['heading']='Anguilla';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/antigua', $data);
    }
    public function aruba()
    {
      	$data['main']='caribbean_countries/aruba.php';
      	$data['heading']='Aruba';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/aruba', $data);
    }
    public function bahamas()
    {
      	$data['main']='caribbean_countries/bahamas.php';
      	$data['heading']='Bahamas';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/bahamas', $data);
    }
    public function barbados()
    {
      	$data['main']='caribbean_countries/barbados.php';
      	$data['heading']='Barbados';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/barbados', $data);
    }
    public function barbuda()
    {
      	$data['main']='caribbean_countries/barbuda.php';
      	$data['heading']='Barbuda';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/barbuda', $data);
    }
    public function bonaire()
    {
      	$data['main']='caribbean_countries/bonaire.php';
      	$data['heading']='Bonaire';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/bonaire', $data);
    }
    public function british_virgin_islands()
    {
      	$data['main']='caribbean_countries/british_virgin_islands.php';
      	$data['heading']='British Virgin Islands';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/british_virgin_islands', $data);
    }
    public function cayman_islands()
    {
      	$data['main']='caribbean_countries/cayman_islands.php';
      	$data['heading']='Cayman Islands';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/cayman_islands', $data);
    }
    public function cuba()
    {
      	$data['main']='caribbean_countries/cuba.php';
      	$data['heading']='Cuba';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/cuba', $data);
    }
    public function curacao()
    {
      	$data['main']='caribbean_countries/curacao.php';
      	$data['heading']='Curacao';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/curacao', $data);
    }
    public function dominica()
    {
      	$data['main']='caribbean_countries/dominica.php';
      	$data['heading']='Domenica';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/dominica', $data);
    }
    public function dominican_republic()
    {
      	$data['main']='caribbean_countries/dominican_republic.php';
      	$data['heading']='Dominican Republic';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/dominican_republic', $data);
    }
    public function grenada()
    {
      	$data['main']='caribbean_countries/grenada.php';
      	$data['heading']='Grenada';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/grenada', $data);
    }
    public function grenadines()
    {
      	$data['main']='caribbean_countries/grenadines.php';
      	$data['heading']='Grenadines';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/grenadines', $data);
    }
        public function guadeloupe()
    {
      	$data['main']='caribbean_countries/guadeloupe.php';
      	$data['heading']='Guadeloupe';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/guadeloupe', $data);
    }
    public function haiti()
    {
      	$data['main']='caribbean_countries/haiti.php';
      	$data['heading']='Haiti';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/haiti', $data);
    }
    public function jamaica()
    {
      	$data['main']='caribbean_countries/jamaica.php';
      	$data['heading']='Jamaica';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/jamaica', $data);
    }
    public function martinique()
    {
      	$data['main']='caribbean_countries/martinique.php';
      	$data['heading']='Martinique';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/martinique', $data);
    }
    public function montserrat()
    {
      	$data['main']='caribbean_countries/montserrat.php';
      	$data['heading']='Montserrat';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/montserrat', $data);
    }
    public function puerto_rico()
    {
      	$data['main']='caribbean_countries/puerto_rico.php';
      	$data['heading']='Puerto Rico';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/puerto_rico', $data);
    }
    public function saba()
    {
      	$data['main']='caribbean_countries/saba.php';
      	$data['heading']='Saba';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/saba', $data);
    }
    public function saint_barthelemy()
    {
      	$data['main']='caribbean_countries/saint_barthelemy.php';
      	$data['heading']='Saint Barthélemy';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/saint_barthelemy', $data);
    }
    public function saint_kitts_and_nevis()
    {
      	$data['main']='caribbean_countries/saint_kitts_and_nevis.php';
      	$data['heading']='Saint Kitts and Nevis';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/saint_kitts_and_nevis', $data);
    }
    public function saint_lucia()
    {
      	$data['main']='caribbean_countries/saint_lucia.php';
      	$data['heading']='Saint Lucia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/saint_lucia', $data);
    }
    public function saint_vincent()
    {
      	$data['main']='caribbean_countries/saint_vincent.php';
      	$data['heading']='Saint Vincent';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/saint_vincent', $data);
    }
    public function sint_eustatius()
    {
      	$data['main']='caribbean_countries/sint_eustatius.php';
      	$data['heading']='Sint Eustatius';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/sint_eustatius', $data);
    }
    public function sint_maarten()
    {
      	$data['main']='caribbean_countries/sint_maarten.php';
      	$data['heading']='Sint Maarten/ Saint Martin';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/sint_maarten', $data);
    }
    public function trinidad_and_tobago()
    {
      	$data['main']='caribbean_countries/trinidad_and_tobago.php';
      	$data['heading']='Trinidad and Tobago';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/trinidad_and_tobago', $data);
    }
    public function virgin_islands()
    {
      	$data['main']='caribbean_countries/virgin_islands.php';
      	$data['heading']='Virgin Islands';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('caribbean_countries/virgin_islands', $data);
    }


}