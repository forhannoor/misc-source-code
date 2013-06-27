<?php 

class africa_countries extends CI_Controller
{
    public function index()
    {
    }    
    
    public function algeria()
    {
      	$data['main']='africa_countries/algeria.php';
      	$data['heading']='Algeria';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/algeria', $data);
    }
    public function angola()
    {
      	$data['main']='africa_countries/angola.php';
      	$data['heading']='Angola';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/angola', $data);
    }
    public function benin()
    {
      	$data['main']='africa_countries/benin.php';
      	$data['heading']='Benin';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('Africa_countries/benin', $data);
    }
    public function botswana()
    {
      	$data['main']='africa_countries/botswana.php';
      	$data['heading']='Botswana';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/botswana', $data);
    }
    public function burkino_faso()
    {
      	$data['main']='africa_countries/burkino_faso.php';
      	$data['heading']='Burkino Faso';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/burkino_faso', $data);
    }
    public function burundi()
    {
      	$data['main']='africa_countries/burundi.php';
      	$data['heading']='Burundi';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('afrca_countries/burundi', $data);
    }
    public function cameroon()
    {
      	$data['main']='africa_countries/cameroon.php';
      	$data['heading']='Cameroon';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/cameroon', $data);
    }
    public function central_african_republic()
    {
      	$data['main']='africa_countries/central_african_republic.php';
      	$data['heading']='Central African Republic';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/central_african_republic', $data);
    }
    public function chad()
    {
      	$data['main']='africa_countries/chad.php';
      	$data['heading']='Chad';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/chad', $data);
    }
    public function comoros()
    {
      	$data['main']='africa_countries/comoros.php';
      	$data['heading']='Comoros';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/comoros', $data);
    }
    public function congo()
    {
      	$data['main']='africa_countries/congo.php';
      	$data['heading']='Congo';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/congo', $data);
    }
    public function cote_d_ivore()
    {
      	$data['main']='africa_countries/cote_d_ivore.php';
      	$data['heading']='Cote d Ivore';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/cote_d_ivore', $data);
    }
    public function democratic_republic_of_congo()
    {
      	$data['main']='africa_countries/democratic_republic_of_congo.php';
      	$data['heading']='Democratic Republic of Congo';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/democratic_republic_of_congo', $data);
    }
    public function djibouti()
    {
      	$data['main']='africa_countries/djibouti.php';
      	$data['heading']='Djibouti';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/djibouti', $data);
    }
    public function egypt()
    {
      	$data['main']='africa_countries/egypt.php';
      	$data['heading']='Egypt';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/egypt', $data);
    }
    public function equatorial_guinea()
    {
      	$data['main']='africa_countries/equatorial_guinea.php';
      	$data['heading']='Equatorial Guinea';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/equatorial_guinea', $data);
    }
    public function eritrea()
    {
      	$data['main']='africa_countries/eritrea.php';
      	$data['heading']='Eritrea';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/eritrea', $data);
    }
    public function ethiopia()
    {
      	$data['main']='africa_countries/ethiopia.php';
      	$data['heading']='Ethiopia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/ethiopia', $data);
    }
    public function gabon()
    {
      	$data['main']='africa_countries/gabon.php';
      	$data['heading']='Gabon';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/gabon', $data);
    }
    public function gambia()
    {
      	$data['main']='africa_countries/gambia.php';
      	$data['heading']='Gambia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/gambia', $data);
    }
    public function ghana()
    {
      	$data['main']='africa_countries/ghana.php';
      	$data['heading']='Ghana';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/ghana', $data);
    }
    public function guinea()
    {
      	$data['main']='africa_countries/guinea.php';
      	$data['heading']='Guinea';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/guinea', $data);
    }
    public function guinea_bissau()
    {
      	$data['main']='africa_countries/guinea_bissau.php';
      	$data['heading']='Guinea Bissau';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/guinea_bissau', $data);
    }
    public function kenya()
    {
      	$data['main']='africa_countries/kenya.php';
      	$data['heading']='Kenya';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/kenya', $data);
    }
    public function lesotho()
    {
      	$data['main']='africa_countries/lesotho.php';
      	$data['heading']='Lesotho';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/lesotho', $data);
    }
    public function liberia()
    {
      	$data['main']='africa_countries/liberia.php';
      	$data['heading']='Liberia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/liberia', $data);
    }
    public function libya()
    {
      	$data['main']='africa_countries/libya.php';
      	$data['heading']='Libya';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/libya', $data);
    }
    public function madagascar()
    {
      	$data['main']='africa_countries/madagascar.php';
      	$data['heading']='Madagascar';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/madagascar', $data);
    }
    public function malawi()
    {
      	$data['main']='africa_countries/malawi.php';
      	$data['heading']='Malawi';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/malawi', $data);
    }
    public function mali()
    {
      	$data['main']='africa_countries/mali.php';
      	$data['heading']='Mali';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/mali', $data);
    }
    public function mauritania()
    {
      	$data['main']='africa_countries/mauritania.php';
      	$data['heading']='Mauritania';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/mauritania', $data);
    }
    public function morocco()
    {
      	$data['main']='africa_countries/morocco.php';
      	$data['heading']='Morocco';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/morocco', $data);
    }
    public function mozambique()
    {
      	$data['main']='africa_countries/mozambique.php';
      	$data['heading']='mozambique';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/mozambique', $data);
    }
    public function namibia()
    {
      	$data['main']='africa_countries/namibia.php';
      	$data['heading']='Namibia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/namibia', $data);
    }
    public function niger()
    {
      	$data['main']='africa_countries/niger.php';
      	$data['heading']='Niger';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/niger', $data);
    }
    public function rwanda()
    {
      	$data['main']='africa_countries/rwanda.php';
      	$data['heading']='Rwanda';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/rwanda', $data);
    }
    public function sao_tome_and_principe()
    {
      	$data['main']='africa_countries/sao_tome_and_principe.php';
      	$data['heading']='São Tomé and Príncipe';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/sao_tome_and_principe', $data);
    }
    public function senegal()
    {
      	$data['main']='africa_countries/senegal.php';
      	$data['heading']='Senegal';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/senegal', $data);
    }
    public function sierral_leone()
    {
      	$data['main']='africa_countries/sierra_leone.php';
      	$data['heading']='Sierra Leone';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/sierra_leone', $data);
    }
    public function somalia()
    {
      	$data['main']='africa_countries/somalia.php';
      	$data['heading']='Somalia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/somalia', $data);
    }
    public function south_africa()
    {
      	$data['main']='africa_countries/south_africa.php';
      	$data['heading']='South Africa';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/south_africa', $data);
    }
    public function south_sudan()
    {
      	$data['main']='africa_countries/south_sudan.php';
      	$data['heading']='South Sudan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/south_sudan', $data);
    }
    public function sudan()
    {
      	$data['main']='africa_countries/sudan.php';
      	$data['heading']='Sudan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/sudan', $data);
    }
    public function swaziland()
    {
      	$data['main']='africa_countries/swaziland.php';
      	$data['heading']='Swaziland';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/swaziland', $data);
    }
    public function tanzania()
    {
      	$data['main']='africa_countries/tanzania.php';
      	$data['heading']='Tanzania';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/tanzania', $data);
    }
    public function togo()
    {
      	$data['main']='africa_countries/togo.php';
      	$data['heading']='Togo';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/togo', $data);
    }
    public function tunisia()
    {
      	$data['main']='africa_countries/tunisia.php';
      	$data['heading']='Tunisia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/tunisia', $data);
    }
    public function uganda()
    {
      	$data['main']='africa_countries/uganda.php';
      	$data['heading']='Uganda';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/uganda', $data);
    }
    public function western_sahara()
    {
      	$data['main']='africa_countries/western_sahara.php';
      	$data['heading']='Western Sahara';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/western_sahara', $data);
    }
    public function zambia()
    {
      	$data['main']='africa_countries/zambia.php';
      	$data['heading']='Zambia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/zambia', $data);
    }
    public function zimbabwe()
    {
      	$data['main']='africa_countries/zimbabwe.php';
      	$data['heading']='Zimbabwe';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/zimbabwe', $data);
    }


































}