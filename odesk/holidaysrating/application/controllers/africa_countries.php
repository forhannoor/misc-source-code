<?php 

class africa_countries extends CI_Controller
{
    public function algeria()
    {
      	$data['main']='africa_countries/algeria.php';
		$data['heading']='Algeria';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/algeria', $data);
    }
    public function angola()
    {
      	$data['main']='africa_countries/angola.php';
      	$data['heading']='Angola';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
              	      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/angola', $data);
    }
    public function benin()
    {
      	$data['main']='africa_countries/benin.php';
		$data['heading']='Benin';
        $data['left_sidebar'] = 'sidebar/left_sidebar';

      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/benin', $data);
    }
    public function botswana()
    {
      	$data['main']='africa_countries/botswana.php';
		$data['heading']='Botswana';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/botswana', $data);
    }
    public function burkino_faso()
    {
      	$data['main']='africa_countries/burkino_faso.php';
      	$data['heading']='Burkino Faso';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/burkino_faso', $data);
    }
    public function burundi()
    {
      	$data['main']='africa_countries/burundi.php';
      	$data['heading']='Burundi';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/burundi', $data);
    }
    public function cameroon()
    {
      	$data['main']='africa_countries/cameroon.php';
      	$data['heading']='Cameroon';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/cameroon', $data);
    }
    public function cape_verde()
    {
      	$data['main']='africa_countries/cape_verde.php';
      	$data['heading']='Cape Verde';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/cape_verde', $data);
    }

    public function central_african_republic()
    {
      	$data['main']='africa_countries/central_african_republic.php';
      	$data['heading']='Central African Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/central_african_republic', $data);
    }
    public function chad()
    {
      	$data['main']='africa_countries/chad.php';
      	$data['heading']='Chad';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/chad', $data);
    }
    public function comoros()
    {
      	$data['main']='africa_countries/comoros.php';
      	$data['heading']='Comoros';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/comoros', $data);
    }
    public function congo()
    {
      	$data['main']='africa_countries/congo.php';
      	$data['heading']='Congo';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/congo', $data);
    }
    public function cote_d_ivoire()
    {
      	$data['main']='africa_countries/cote_d_ivoire.php';
      	$data['heading']='Côte d Ivoire';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/cote_d_ivoire', $data);
    }
    public function democratic_republic_of_congo()
    {
      	$data['main']='africa_countries/democratic_republic_of_congo.php';
      	$data['heading']='Democratic Republic of Congo';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/democratic_republic_of_congo', $data);
    }
    public function djibouti()
    {
      	$data['main']='africa_countries/djibouti.php';
      	$data['heading']='Djibouti';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/djibouti', $data);
    }
    public function egypt()
    {
      	$data['main']='africa_countries/egypt.php';
      	$data['heading']='Egypt';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/egypt', $data);
    }
    public function equatorial_guinea()
    {
      	$data['main']='africa_countries/equatorial_guinea.php';
      	$data['heading']='Equatorial Guinea';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/equatorial_guinea', $data);
    }
    public function eritrea()
    {
      	$data['main']='africa_countries/eritrea.php';
      	$data['heading']='Eritrea';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/eritrea', $data);
    }
    public function ethiopia()
    {
      	$data['main']='africa_countries/ethiopia.php';
      	$data['heading']='Ethiopia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/ethiopia', $data);
    }
    public function gabon()
    {
      	$data['main']='africa_countries/gabon.php';
      	$data['heading']='Gabon';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/gabon', $data);
    }
    public function gambia()
    {
      	$data['main']='africa_countries/gambia.php';
      	$data['heading']='Gambia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/gambia', $data);
    }
    public function ghana()
    {
      	$data['main']='africa_countries/ghana.php';
      	$data['heading']='Ghana';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/ghana', $data);
    }
    public function guinea()
    {
      	$data['main']='africa_countries/guinea.php';
      	$data['heading']='Guinea';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/guinea', $data);
    }
    public function guinea_bissau()
    {
      	$data['main']='africa_countries/ghana_bissau.php';
      	$data['heading']='Guinea Bissau';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/guinea_bissau', $data);
    }
    public function kenya()
    {
      	$data['main']='africa_countries/kenya.php';
      	$data['heading']='Kenya';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/kenya', $data);
    }
    public function lesotho()
    {
      	$data['main']='africa_countries/lesotho.php';
      	$data['heading']='Lesotho';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/lesotho', $data);
    }
    public function liberia()
    {
      	$data['main']='africa_countries/liberia.php';
      	$data['heading']='Liberia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/liberia', $data);
    }
    public function libya()
    {
      	$data['main']='africa_countries/libya.php';
      	$data['heading']='Libya';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/libya', $data);
    }
    public function madagascar()
    {
      	$data['main']='africa_countries/madagascar.php';
      	$data['heading']='Madagascar';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/madagascar', $data);
    }
    public function malawi()
    {
      	$data['main']='africa_countries/malawi.php';
      	$data['heading']='Malawi';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/malawi', $data);
    }
    public function mali()
    {
      	$data['main']='africa_countries/mali.php';
      	$data['heading']='Mali';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/mali', $data);
    }
    public function mauritania()
    {
      	$data['main']='africa_countries/mauritania.php';
      	$data['heading']='Mauritania';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/mauritania', $data);
    }
    public function mauritius()
    {
      	$data['main']='africa_countries/mauritius.php';
      	$data['heading']='Mauritius';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/mauritius', $data);
    }
    public function mayotte()
    {
      	$data['main']='africa_countries/mayotte.php';
      	$data['heading']='Mayotte';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/mayotte', $data);
    }
  
    public function morocco()
    {
      	$data['main']='africa_countries/morocco.php';
      	$data['heading']='Morocco';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/morocco', $data);
    }
    public function mozambique()
    {
      	$data['main']='africa_countries/mozambique.php';
      	$data['heading']='mozambique';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/mozambique', $data);
    }
    public function mwali()
    {
      	$data['main']='africa_countries/mwali.php';
      	$data['heading']='Mwali';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/mwali', $data);
    }
    public function namibia()
    {
      	$data['main']='africa_countries/namibia.php';
      	$data['heading']='Namibia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/namibia', $data);
    }
    public function ndzwani()
    {
      	$data['main']='africa_countries/ndzwani.php';
      	$data['heading']='Ndzwani';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/ndzwani', $data);
    }
    public function ngazidja()
    {
      	$data['main']='africa_countries/ngazidja.php';
      	$data['heading']='Ngazidja';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/ngazidja', $data);
    }
    public function niger()
    {
      	$data['main']='africa_countries/niger.php';
      	$data['heading']='Niger';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/niger', $data);
    }
        public function nigeria()
    {
      	$data['main']='africa_countries/nigeria.php';
      	$data['heading']='Nigeria';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/nigeria', $data);
    }

    public function rwanda()
    {
      	$data['main']='africa_countries/rwanda.php';
      	$data['heading']='Rwanda';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/rwanda', $data);
    }
    public function sao_tome_and_principe()
    {
      	$data['main']='africa_countries/sao_tome_and_principe.php';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/sao_tome_and_principe', $data);
    }
    public function senegal()
    {
      	$data['main']='africa_countries/senegal.php';
      	$data['heading']='Senegal';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/senegal', $data);
    }
       public function seychelles()
    {
      	$data['main']='africa_countries/seychelles.php';
      	$data['heading']='Seychelles';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/seychelles', $data);
    }

    public function sierra_leone()
    {
      	$data['main']='africa_countries/sierra_leone.php';
      	$data['heading']='Sierra Leone';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/sierra_leone', $data);
    }
    public function somalia()
    {
      	$data['main']='africa_countries/somalia.php';
      	$data['heading']='Somalia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/somalia', $data);
    }
    public function south_africa()
    {
      	$data['main']='africa_countries/south_africa.php';
      	$data['heading']='South Africa';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/south_africa', $data);
    }
    public function south_sudan()
    {
      	$data['main']='africa_countries/south_sudan.php';
      	$data['heading']='South Sudan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/south_sudan', $data);
    }
    public function sudan()
    {
      	$data['main']='africa_countries/sudan.php';
      	$data['heading']='Sudan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/sudan', $data);
    }
    public function swaziland()
    {
      	$data['main']='africa_countries/swaziland.php';
      	$data['heading']='Swaziland';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/swaziland', $data);
    }
    public function tanzania()
    {
      	$data['main']='africa_countries/tanzania.php';
      	$data['heading']='Tanzania';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/tanzania', $data);
    }
    public function togo()
    {
      	$data['main']='africa_countries/togo.php';
      	$data['heading']='Togo';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/togo', $data);
    }
    public function tunisia()
    {
      	$data['main']='africa_countries/tunisia.php';
      	$data['heading']='Tunisia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/tunisia', $data);
    }
    public function uganda()
    {
      	$data['main']='africa_countries/uganda.php';
      	$data['heading']='Uganda';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/uganda', $data);
    }
    public function western_sahara()
    {
      	$data['main']='africa_countries/western_sahara.php';
      	$data['heading']='Western Sahara';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/western_sahara', $data);
    }
    public function zambia()
    {	
      	$data['main']='africa_countries/zambia.php';
      	$data['heading']='Zambia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/zambia', $data);
    }
    public function zanzibar()
    {
      	$data['main']='africa_countries/zanzibar.php';
      	$data['heading']='Zanzibar';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/zanzibar', $data);
    }
    public function zimbabwe()
    {
      	$data['main']='africa_countries/zimbabwe.php';
      	$data['heading']='Zimbabwe';
        $data['left_sidebar'] = 'sidebar/left_sidebar';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('africa_countries/zimbabwe', $data);
    }
    
    
    
    
    
    
}