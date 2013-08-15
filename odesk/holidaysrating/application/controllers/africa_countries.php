<?php 

class africa_countries extends CI_Controller
{
    public function algeria()
    {
      	$data['main']='africa_countries/algeria.php';
      	$data['heading']='Algeria';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
        
        $this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/algeria', $data);
    }
    public function angola()
    {
      	$data['main']='africa_countries/angola.php';
      	$data['heading']='Angola';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
        $this->session->set_flashdata('redirectUrl', current_url());
              	      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/angola', $data);
    }
    public function benin()
    {
      	$data['main']='africa_countries/benin.php';
      	$data['heading']='Benin';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
        $this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/benin', $data);
    }
    public function botswana()
    {
      	$data['main']='africa_countries/botswana.php';
      	$data['heading']='Botswana';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
        $this->session->set_flashdata('redirectUrl', current_url());
      	
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/botswana', $data);
    }
    public function burkino_faso()
    {
      	$data['main']='africa_countries/burkino_faso.php';
      	$data['heading']='Burkino Faso';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/burkino_faso', $data);
    }
    public function burundi()
    {
      	$data['main']='africa_countries/burundi.php';
      	$data['heading']='Burundi';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/burundi', $data);
    }
    public function cameroon()
    {
      	$data['main']='africa_countries/cameroon.php';
      	$data['heading']='Cameroon';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/cameroon', $data);
    }
    public function central_african_republic()
    {
      	$data['main']='africa_countries/central_african_republic.php';
      	$data['heading']='Central African Republic';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/central_african_republic', $data);
    }
    public function chad()
    {
      	$data['main']='africa_countries/chad.php';
      	$data['heading']='Chad';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/chad', $data);
    }
    public function comoros()
    {
      	$data['main']='africa_countries/comoros.php';
      	$data['heading']='Comoros';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/comoros', $data);
    }
    public function congo()
    {
      	$data['main']='africa_countries/congo.php';
      	$data['heading']='Congo';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/congo', $data);
    }
    public function cote_d_ivore()
    {
      	$data['main']='africa_countries/cote_d_ivore.php';
      	$data['heading']='Côte d Ivore';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/cote_d_ivore', $data);
    }
    public function democratic_republic_of_congo()
    {
      	$data['main']='africa_countries/democratic_republic_of_congo.php';
      	$data['heading']='Democratic Republic of Congo';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/democratic_republic_of_congo', $data);
    }
    public function djibouti()
    {
      	$data['main']='africa_countries/djibouti.php';
      	$data['heading']='Djibouti';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/djibouti', $data);
    }
    public function egypt()
    {
      	$data['main']='africa_countries/egypt.php';
      	$data['heading']='Egypt';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/egypt', $data);
    }
    public function equatorial_guinea()
    {
      	$data['main']='africa_countries/equatorial_guinea.php';
      	$data['heading']='Equatorial Guinea';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/equatorial_guinea', $data);
    }
    public function eritrea()
    {
      	$data['main']='africa_countries/eritrea.php';
      	$data['heading']='Eritrea';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/eritrea', $data);
    }
    public function ethiopia()
    {
      	$data['main']='africa_countries/ethiopia.php';
      	$data['heading']='Ethiopia';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/ethiopia', $data);
    }
    public function gabon()
    {
      	$data['main']='africa_countries/gabon.php';
      	$data['heading']='Gabon';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/gabon', $data);
    }
    public function gambia()
    {
      	$data['main']='africa_countries/gambia.php';
      	$data['heading']='Gambia';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/gambia', $data);
    }
    public function ghana()
    {
      	$data['main']='africa_countries/ghana.php';
      	$data['heading']='Ghana';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/ghana', $data);
    }
    public function guinea()
    {
      	$data['main']='africa_countries/guinea.php';
      	$data['heading']='Guinea';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/guinea', $data);
    }
    public function guinea_bissau()
    {
      	$data['main']='africa_countries/guinea_bissau.php';
      	$data['heading']='Guinea Bissau';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/guinea_bissau', $data);
    }
    public function kenya()
    {
      	$data['main']='africa_countries/kenya.php';
      	$data['heading']='Kenya';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/kenya', $data);
    }
    public function lesotho()
    {
      	$data['main']='africa_countries/lesotho.php';
      	$data['heading']='Lesotho';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/lesotho', $data);
    }
    public function liberia()
    {
      	$data['main']='africa_countries/liberia.php';
      	$data['heading']='Liberia';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/liberia', $data);
    }
    public function libya()
    {
      	$data['main']='africa_countries/libya.php';
      	$data['heading']='Libya';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/libya', $data);
    }
    public function madagascar()
    {
      	$data['main']='africa_countries/madagascar.php';
      	$data['heading']='Madagascar';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/madagascar', $data);
    }
    public function malawi()
    {
      	$data['main']='africa_countries/malawi.php';
      	$data['heading']='Malawi';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/malawi', $data);
    }
    public function mali()
    {
      	$data['main']='africa_countries/mali.php';
      	$data['heading']='Mali';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/mali', $data);
    }
    public function mauritania()
    {
      	$data['main']='africa_countries/mauritania.php';
      	$data['heading']='Mauritania';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/mauritania', $data);
    }
    public function mauritius()
    {
      	$data['main']='africa_countries/mauritius.php';
      	$data['heading']='Mauritius';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/mauritius', $data);
    }
   
    public function morocco()
    {
      	$data['main']='africa_countries/morocco.php';
      	$data['heading']='Morocco';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/morocco', $data);
    }
    public function mozambique()
    {
      	$data['main']='africa_countries/mozambique.php';
      	$data['heading']='mozambique';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/mozambique', $data);
    }
    public function namibia()
    {
      	$data['main']='africa_countries/namibia.php';
      	$data['heading']='Namibia';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/namibia', $data);
    }
    public function niger()
    {
      	$data['main']='africa_countries/niger.php';
      	$data['heading']='Niger';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/niger', $data);
    }
        public function nigeria()
    {
      	$data['main']='africa_countries/nigeria.php';
      	$data['heading']='Nigeria';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/nigeria', $data);
    }

    public function rwanda()
    {
      	$data['main']='africa_countries/rwanda.php';
      	$data['heading']='Rwanda';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/rwanda', $data);
    }
    public function sao_tome_and_principe()
    {
      	$data['main']='africa_countries/sao_tome_and_principe.php';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$data['heading']='São Tomé and Príncipe';
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/sao_tome_and_principe', $data);
    }
    public function senegal()
    {
      	$data['main']='africa_countries/senegal.php';
      	$data['heading']='Senegal';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/senegal', $data);
    }
       public function seychelles()
    {
      	$data['main']='africa_countries/seychelles.php';
      	$data['heading']='Seychelles';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/seychelles', $data);
    }

    public function sierra_leone()
    {
      	$data['main']='africa_countries/sierra_leone.php';
      	$data['heading']='Sierra Leone';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/sierra_leone', $data);
    }
    public function somalia()
    {
      	$data['main']='africa_countries/somalia.php';
      	$data['heading']='Somalia';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/somalia', $data);
    }
    public function south_africa()
    {
      	$data['main']='africa_countries/south_africa.php';
      	$data['heading']='South Africa';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/south_africa', $data);
    }
    public function south_sudan()
    {
      	$data['main']='africa_countries/south_sudan.php';
      	$data['heading']='South Sudan';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/south_sudan', $data);
    }
    public function sudan()
    {
      	$data['main']='africa_countries/sudan.php';
      	$data['heading']='Sudan';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/sudan', $data);
    }
    public function swaziland()
    {
      	$data['main']='africa_countries/swaziland.php';
      	$data['heading']='Swaziland';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/swaziland', $data);
    }
    public function tanzania()
    {
      	$data['main']='africa_countries/tanzania.php';
      	$data['heading']='Tanzania';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/tanzania', $data);
    }
    public function togo()
    {
      	$data['main']='africa_countries/togo.php';
      	$data['heading']='Togo';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/togo', $data);
    }
    public function tunisia()
    {
      	$data['main']='africa_countries/tunisia.php';
      	$data['heading']='Tunisia';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/tunisia', $data);
    }
    public function uganda()
    {
      	$data['main']='africa_countries/uganda.php';
      	$data['heading']='Uganda';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/uganda', $data);
    }
    public function western_sahara()
    {
      	$data['main']='africa_countries/western_sahara.php';
      	$data['heading']='Western Sahara';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/western_sahara', $data);
    }
    public function zambia()
    {
      	$data['main']='africa_countries/zambia.php';
      	$data['heading']='Zambia';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/zambia', $data);
    }
    public function zimbabwe()
    {
      	$data['main']='africa_countries/zimbabwe.php';
      	$data['heading']='Zimbabwe';
      	$data['rating'] = $this->User_model->get_rating($this->uri->segment(3));
      	$this->session->set_flashdata('redirectUrl', current_url());
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('africa_countries/zimbabwe', $data);
    }
}