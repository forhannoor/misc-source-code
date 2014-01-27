<?php 

class russia_states extends CI_Controller
{
    public function adygeya()
    {
      	$data['main']='russia_states/adygeya.php';
      	$data['heading']='Adygeya (Republic)';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/adygeya', $data);
    }
    public function altai()
    {
      	$data['main']='russia_states/altai.php';
      	$data['heading']='Altai Krai';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/altai', $data);
    }
    public function altai_republic()
    {
      	$data['main']='russia_states/altai_republic.php';
      	$data['heading']='Altai Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/altai_republic', $data);
    }
    public function amur()
    {
      	$data['main']='russia_states/amur.php';
      	$data['heading']='Amur Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/amur', $data);
    }
    public function arkhangelsk()
    {
      	$data['main']='russia_states/arkhangelsk.php';
      	$data['heading']='Arkhangelsk Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/arkhangelsk', $data);
    }
    public function astrakhan()
    {
      	$data['main']='russia_states/astrakhan.php';
      	$data['heading']='Astrakhan Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/astrakhan', $data);
    }
    public function bashkortostan()
    {
      	$data['main']='russia_states/bashkortostan.php';
      	$data['heading']='Bashkortostan Rep.';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/bashkortostan', $data);
    }
    public function belgorodskaya()
    {
      	$data['main']='russia_states/belgorodskaya.php';
      	$data['heading']='Belgorodskaya Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/belgorodskaya', $data);
    }
    public function braynsk()
    {
      	$data['main']='russia_states/braynsk.php';
      	$data['heading']='Braynsk Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/braynsk', $data);
    }
    public function buryatia()
    {
      	$data['main']='russia_states/buryatia.php';
      	$data['heading']='Buryatia Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/buryatia', $data);
    }
    public function chechnya()
    {
      	$data['main']='russia_states/chechnya.php';
      	$data['heading']='Chechnya Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/chechnya', $data);
    }
    public function chelyabinsk()
    {
      	$data['main']='russia_states/chelyabinsk.php';
      	$data['heading']='Chelyabinsk Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/chelyabinsk', $data);
    }
    public function chukotka()
    {
      	$data['main']='russia_states/chukotka.php';
      	$data['heading']='Chukotka Auto. Okrug';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/chukotka', $data);
    }
    public function chuvashia()
    {
      	$data['main']='russia_states/chuvashia.php';
      	$data['heading']='Chuvashia Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/chuvashia', $data);
    }
    public function dagestan()
    {
      	$data['main']='russia_states/dagestan.php';
      	$data['heading']='Dagestan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/dagestan', $data);
    }
    public function ingushetia()
    {
      	$data['main']='russia_states/ingushetia.php';
      	$data['heading']='Ingushetia Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/ingushetia', $data);
    }
    public function irkutsk()
    {
      	$data['main']='russia_states/irkutsk.php';
      	$data['heading']='Irkutsk Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/irkutsk', $data);
    }
    public function ivanovo()
    {
      	$data['main']='russia_states/ivanovo.php';
      	$data['heading']='Ivanovo Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/ivanovo', $data);
    }
    public function kalingrad()
    {
      	$data['main']='russia_states/kalingrad.php';
      	$data['heading']='Kalingrad Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/kalingrad', $data);
    }
    public function kaluga()
    {
      	$data['main']='russia_states/kaluga.php';
      	$data['heading']='Kaluga Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/kaluga', $data);
    }
    public function kamchatka()
    {
      	$data['main']='russia_states/kamchatka.php';
      	$data['heading']='Kamchatka Krai';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/kamchatka', $data);
    }
    public function karachay_cherkessia()
    {
      	$data['main']='russia_states/karachay_cherkessia.php';
      	$data['heading']='Karachay-Cherkessia Rep.';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/karachay_cherkessia', $data);
    }
    public function kabardino_balkaria()
    {
      	$data['main']='russia_states/kabardino_balkaria.php';
      	$data['heading']='Kabardino-Balkaria Rep.';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/kabardino_balkaria', $data);
    }
    public function karelia()
    {
      	$data['main']='russia_states/karelia.php';
      	$data['heading']='Karelia Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/karelia', $data);
    }
        public function kalmykia()
    {
      	$data['main']='russia_states/kalmykia.php';
      	$data['heading']='Kalmykia Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/kalmykia', $data);
    }
    public function kostroma()
    {
      	$data['main']='russia_states/kostroma.php';
      	$data['heading']='Kostroma Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/kostroma', $data);
    }

    public function kemerovo()
    {
      	$data['main']='russia_states/kemerovo.php';
      	$data['heading']='Kemerovo Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/kemerovo', $data);
    }
    public function khabarovsk()
    {
      	$data['main']='russia_states/khabarovsk.php';
      	$data['heading']='Khabarovsk Krai';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/khabarovsk', $data);
    }
    public function khakassia()
    {
      	$data['main']='russia_states/khakassia.php';
      	$data['heading']='Khakassia Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/khakassia', $data);
    }
    public function khantia_mansia()
    {
      	$data['main']='russia_states/khantia_mansia.php';
      	$data['heading']='Khantia Mansia Auto. Okrug';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/khantia_mansia', $data);
    }
    public function kirov()
    {
      	$data['main']='russia_states/kirov.php';
      	$data['heading']='Kirov Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/kirov', $data);
    }
        public function komi()
    {
      	$data['main']='russia_states/komi.php';
      	$data['heading']='Komi Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/komi', $data);
    }

    public function krasnodar()
    {
      	$data['main']='russia_states/krasnodar.php';
      	$data['heading']='Krasnodar Krai';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/krasnodar', $data);
    }
    public function krasnoyarsk()
    {
      	$data['main']='russia_states/krasnoyarsk.php';
      	$data['heading']='Krasnoyarsk Krai';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/krasnoyarsk', $data);
    }
    public function kurgan()
    {
      	$data['main']='russia_states/kurgan.php';
      	$data['heading']='Kurgan Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/kurgan', $data);
    }
    public function kursk()
    {
      	$data['main']='russia_states/kursk.php';
      	$data['heading']='Kursk Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/kursk', $data);
    }
    public function leningrad()
    {
      	$data['main']='russia_states/leningrad.php';
      	$data['heading']='Leningrad Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/leningrad', $data);
    }
    public function lipetsk()
    {
      	$data['main']='russia_states/lipetsk.php';
      	$data['heading']='Lipetsk Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/lipetsk', $data);
    }
    public function magadan()
    {
      	$data['main']='russia_states/magadan.php';
      	$data['heading']='Magadan Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/magadan', $data);
    }
    public function mari_el()
    {
      	$data['main']='russia_states/mari_el.php';
      	$data['heading']='Mari El Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/mari_el', $data);
    }
    public function mordovia()
    {
      	$data['main']='russia_states/mordovia.php';
      	$data['heading']='Mordovia Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/mordovia', $data);
    }
    public function moscow()
    {
      	$data['main']='russia_states/moscow.php';
      	$data['heading']='Moscow Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/moscow', $data);
    }
    public function murmansk()
    {
      	$data['main']='russia_states/murmansk.php';
      	$data['heading']='Murmansk Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/murmansk', $data);
    }
        public function nenetsia()
    {
      	$data['main']='russia_states/nenetsia.php';
      	$data['heading']='Nenetsia Autonomous Okrug';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/nenetsia', $data);
    }

    public function nizhny_novgorod()
    {
      	$data['main']='russia_states/nizhny_novgorod.php';
      	$data['heading']='Nizhny-Novgorod Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/nizhny_novgorod', $data);
    }
    public function north_ossetia_alania()
    {
      	$data['main']='russia_states/north_ossetia_alania.php';
      	$data['heading']='North Ossetia-Alania Rep.';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/north_ossetia_alania', $data);
    }
    public function novgorod()
    {
      	$data['main']='russia_states/novgorod.php';
      	$data['heading']='Novgorod Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/novgorod', $data);
    }
    public function novosibirsk()
    {
      	$data['main']='russia_states/novosibirsk.php';
      	$data['heading']='Novosibirsk Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/novosibirsk', $data);
    }
    public function omsk()
    {
      	$data['main']='russia_states/omsk.php';
      	$data['heading']='Omsk Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/omsk', $data);
    }
    public function orenburg()
    {
      	$data['main']='russia_states/orenburg.php';
      	$data['heading']='Orenburg Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/orenburg', $data);
    }
    public function oryol()
    {
      	$data['main']='russia_states/oryol.php';
      	$data['heading']='Oryol Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/oryol', $data);
    }
    public function penza()
    {
      	$data['main']='russia_states/penza.php';
      	$data['heading']='Penza Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/penza', $data);
    }
    public function perm()
    {
      	$data['main']='russia_states/perm.php';
      	$data['heading']='Perm  Krai';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/perm', $data);
    }
    public function primorsky()
    {
      	$data['main']='russia_states/primorsky.php';
      	$data['heading']='Primorsky Krai';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/primorsky', $data);
    }
    public function pskorv()
    {
      	$data['main']='russia_states/pskorv.php';
      	$data['heading']='Pskorv Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/pskorv', $data);
    }
    public function rostov()
    {
      	$data['main']='russia_states/rostov.php';
      	$data['heading']='Rostov Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/rostov', $data);
    }
    public function ryazan()
    {
      	$data['main']='russia_states/ryazan.php';
      	$data['heading']='Ryazan Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/ryazan', $data);
    }
    public function sakha()
    {
      	$data['main']='russia_states/sakha.php';
      	$data['heading']='Sakha Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/sakha', $data);
    }
    public function sakhalin()
    {
      	$data['main']='russia_states/sakhalin.php';
      	$data['heading']='Sakhalin Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/sakhalin', $data);
    }
    public function samara()
    {
      	$data['main']='russia_states/samara.php';
      	$data['heading']='Samara Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/samara', $data);
    }
    public function saratov()
    {
      	$data['main']='russia_states/saratov.php';
      	$data['heading']='Saratov Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/saratov', $data);
    }
    public function smolensk()
    {
      	$data['main']='russia_states/smolensk.php';
      	$data['heading']='Smolensk Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/smolensk', $data);
    }
    public function stavropol()
    {
      	$data['main']='russia_states/stavropol.php';
      	$data['heading']='Stavropol Krai';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/stavropol', $data);
    }
    public function sverdlovsk()
    {
      	$data['main']='russia_states/sverdlovsk.php';
      	$data['heading']='Sverdlovsk Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/sverdlovsk', $data);
    }
    public function tambov()
    {
      	$data['main']='russia_states/tambov.php';
      	$data['heading']='Tambov Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/tambov', $data);
    }
    public function tatarstan()
    {
      	$data['main']='russia_states/tatarstan.php';
      	$data['heading']='Tatarstan (Republic)';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/tatarstan', $data);
    }
    public function tomsk()
    {
      	$data['main']='russia_states/tomsk.php';
      	$data['heading']='Tomsk Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/tomsk', $data);
    }
    public function tula()
    {
      	$data['main']='russia_states/tula.php';
      	$data['heading']='Tula Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/tula', $data);
    }
    public function tuva()
    {
      	$data['main']='russia_states/tuva.php';
      	$data['heading']='Tuva Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/tuva', $data);
    }
    public function tver()
    {
      	$data['main']='russia_states/tver.php';
      	$data['heading']='Tver Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/tver', $data);
    }
    public function tyumen()
    {
      	$data['main']='russia_states/tyumen.php';
      	$data['heading']='Tyumen Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/tyumen', $data);
    }
    public function udmurtia()
    {
      	$data['main']='russia_states/udmurtia.php';
      	$data['heading']='Udmurtia Republic';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/udmurtia', $data);
    }
    public function ulyanovsk()
    {
      	$data['main']='russia_states/ulyanovsk.php';
      	$data['heading']='Ulyanovsk Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/ulyanovsk', $data);
    }
    public function vladimir()
    {
      	$data['main']='russia_states/vladimir.php';
      	$data['heading']='Vladimir Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/vladimir', $data);
    }
    public function volgograd()
    {
      	$data['main']='russia_states/volgograd.php';
      	$data['heading']='Volgograd Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/volgograd', $data);
    }
    public function vologda()
    {
      	$data['main']='russia_states/vologda.php';
      	$data['heading']='Vologda Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/vologda', $data);
    }
    public function voronezh()
    {
      	$data['main']='russia_states/voronezh.php';
      	$data['heading']='Voronezh Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/voronezh', $data);
    }
    public function yamalia()
    {
      	$data['main']='russia_states/yamalia.php';
      	$data['heading']='Yamalo-Nenets Autonomous Okrug';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/yamalia', $data);
    }
    public function yaroslavl()
    {
      	$data['main']='russia_states/yaroslavl.php';
      	$data['heading']='Yaroslavl Oblast';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/yaroslavl', $data);
    }
    public function zabaykalsky()
    {
      	$data['main']='russia_states/zabaykalsky.php';
      	$data['heading']='Zabaykalsky Krai';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('russia_states/zabaykalsky', $data);
    }



}