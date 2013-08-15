<?php 

class russia_states extends CI_Controller
{
    public function index()
    {
    }    

    public function adygeya()
    {
      	$data['main']='russia_states/adygeya.php';
      	$data['heading']='Adygeya (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/adygeya', $data);
    }
    public function altai()
    {
      	$data['main']='russia_states/altai.php';
      	$data['heading']='Altai Krai';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/altai', $data);
    }
    public function amur()
    {
      	$data['main']='russia_states/amur.php';
      	$data['heading']='Amur Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/amur', $data);
    }
    public function arkhangelsk()
    {
      	$data['main']='russia_states/arkhangelsk.php';
      	$data['heading']='Arkhangelsk Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/arkhangelsk', $data);
    }
    public function astrakhan()
    {
      	$data['main']='russia_states/astrakhan.php';
      	$data['heading']='Astrakhan Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/astrakhan', $data);
    }
    public function bashkortostan()
    {
      	$data['main']='russia_states/bashkortostan.php';
      	$data['heading']='Bashkortostan (Rep.)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/bashkortostan', $data);
    }
    public function belgorodskaya()
    {
      	$data['main']='russia_states/belgorodskaya.php';
      	$data['heading']='Belgorodskaya Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/belgorodskaya', $data);
    }
    public function brayensk()
    {
      	$data['main']='russia_states/brayensk.php';
      	$data['heading']='Brayensk Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/brayensk', $data);
    }
    public function buryatia()
    {
      	$data['main']='russia_states/buryatia.php';
      	$data['heading']='Buryatia (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/buryatia', $data);
    }
    public function chechnya()
    {
      	$data['main']='russia_states/chechnya.php';
      	$data['heading']='Chechnya (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/chechnya', $data);
    }
    public function chelyabinsk()
    {
      	$data['main']='russia_states/chelyabinsk.php';
      	$data['heading']='Chelyabinsk Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/chelyabinsk', $data);
    }
    public function chukotka()
    {
      	$data['main']='russia_states/chukotka.php';
      	$data['heading']='Chukotka Auto. Okrug';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/chukotka', $data);
    }
    public function chuvashia()
    {
      	$data['main']='russia_states/chuvashia.php';
      	$data['heading']='Chuvashia (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/chuvashia', $data);
    }
    public function dagestan()
    {
      	$data['main']='russia_states/dagestan.php';
      	$data['heading']='Dagestan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/dagestan', $data);
    }
    public function ingushetia()
    {
      	$data['main']='russia_states/ingushetia.php';
      	$data['heading']='Ingushetia (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/ingushetia', $data);
    }
    public function irkutsk()
    {
      	$data['main']='russia_states/irkutsk.php';
      	$data['heading']='Irkutsk Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/irkutsk', $data);
    }
    public function ivanovo()
    {
      	$data['main']='russia_states/ivanovo.php';
      	$data['heading']='Ivanovo Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/ivanovo', $data);
    }
    public function kalingrad()
    {
      	$data['main']='russia_states/kalingrad.php';
      	$data['heading']='Kalingrad Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kalingrad', $data);
    }
    public function kaluga()
    {
      	$data['main']='russia_states/kaluga.php';
      	$data['heading']='Kaluga Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kaluga', $data);
    }
    public function kamchatka()
    {
      	$data['main']='russia_states/kamchatka.php';
      	$data['heading']='Kamchatka Krai';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kamchatka', $data);
    }
    public function karachay_cherkessia()
    {
      	$data['main']='russia_states/karachay_cherkessia.php';
      	$data['heading']='Karachay-Cherkessia (Rep.)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/karachay_cherkessia', $data);
    }
    public function karbodino_balkaria()
    {
      	$data['main']='russia_states/karbodino_balkaria.php';
      	$data['heading']='Karbodino-Balkaria (Rep.)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/karbodino_balkaria', $data);
    }
    public function karelia()
    {
      	$data['main']='russia_states/karelia.php';
      	$data['heading']='Karelia (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/karelia', $data);
    }
        public function kalmykia()
    {
      	$data['main']='russia_states/kalmykia.php';
      	$data['heading']='Kalmykia (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kalmykia', $data);
    }
    public function kostroma()
    {
      	$data['main']='russia_states/kostroma.php';
      	$data['heading']='Kostroma Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kostroma', $data);
    }

    public function kemerovo()
    {
      	$data['main']='russia_states/kemerovo.php';
      	$data['heading']='Kemerovo Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kemerovo', $data);
    }
    public function khabarovsk()
    {
      	$data['main']='russia_states/khabarovsk.php';
      	$data['heading']='Khabarovsk Krai';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/khabarovsk', $data);
    }
    public function khakassia()
    {
      	$data['main']='russia_states/khakassia.php';
      	$data['heading']='Khakassia (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/khakassia', $data);
    }
    public function khantia_mansia()
    {
      	$data['main']='russia_states/khantia_mansia.php';
      	$data['heading']='Khantia Mansia Auto. Okrug';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/khantia_mansia', $data);
    }
    public function kirov()
    {
      	$data['main']='russia_states/kirov.php';
      	$data['heading']='Kirov Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kirov', $data);
    }
        public function komi()
    {
      	$data['main']='russia_states/komi.php';
      	$data['heading']='Komi (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/komi', $data);
    }

    public function krasnodar()
    {
      	$data['main']='russia_states/krasnodar.php';
      	$data['heading']='Krasnodar Krai';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/krasnodar', $data);
    }
    public function krasnoyarsk()
    {
      	$data['main']='russia_states/krasnoyarsk.php';
      	$data['heading']='Krasnoyarsk Krai';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/krasnoyarsk', $data);
    }
    public function kurgan()
    {
      	$data['main']='russia_states/kurgan.php';
      	$data['heading']='Kurgan Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kurgan', $data);
    }
    public function kursk()
    {
      	$data['main']='russia_states/kursk.php';
      	$data['heading']='Kursk Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kursk', $data);
    }
    public function leningrad()
    {
      	$data['main']='russia_states/leningrad.php';
      	$data['heading']='Leningrad Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/leningrad', $data);
    }
    public function lipetsk()
    {
      	$data['main']='russia_states/lipetsk.php';
      	$data['heading']='Lipetsk Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/lipetsk', $data);
    }
    public function magadan()
    {
      	$data['main']='russia_states/magadan.php';
      	$data['heading']='Magadan Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/magadan', $data);
    }
    public function mari_el()
    {
      	$data['main']='russia_states/mari_el.php';
      	$data['heading']='Mari El (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/mari_el', $data);
    }
    public function mordovia()
    {
      	$data['main']='russia_states/mordovia.php';
      	$data['heading']='Mordovia (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/mordovia', $data);
    }
    public function moscow()
    {
      	$data['main']='russia_states/moscow.php';
      	$data['heading']='Moscow Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/moscow', $data);
    }
    public function murmansk()
    {
      	$data['main']='russia_states/murmansk.php';
      	$data['heading']='Murmansk Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/murmansk', $data);
    }
        public function nenetsia()
    {
      	$data['main']='russia_states/nenetsia.php';
      	$data['heading']='Nenetsia Autonomous Okrug';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/nenetsia', $data);
    }

    public function nishny_novgorod()
    {
      	$data['main']='russia_states/nishny_novgorod.php';
      	$data['heading']='Nishny-Novgorod Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/nishny_novgorod', $data);
    }
    public function north_ossetia_alania()
    {
      	$data['main']='russia_states/north_ossetia_alania.php';
      	$data['heading']='North Ossetia-Alania (Rep.)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/north_ossetia_alania', $data);
    }
    public function novgorod()
    {
      	$data['main']='russia_states/novgorod.php';
      	$data['heading']='Novgorod Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/novgorod', $data);
    }
    public function novosibirsk()
    {
      	$data['main']='russia_states/novosibirsk.php';
      	$data['heading']='Novosibirsk Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/novosibirsk', $data);
    }
    public function omsk()
    {
      	$data['main']='russia_states/omsk.php';
      	$data['heading']='Omsk Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/omsk', $data);
    }
    public function orenburg()
    {
      	$data['main']='russia_states/orenburg.php';
      	$data['heading']='Orenburg Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/orenburg', $data);
    }
    public function oryol()
    {
      	$data['main']='russia_states/oryol.php';
      	$data['heading']='Oryol Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/oryol', $data);
    }
    public function penza()
    {
      	$data['main']='russia_states/penza.php';
      	$data['heading']='Penza Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/penza', $data);
    }
    public function perm()
    {
      	$data['main']='russia_states/perm.php';
      	$data['heading']='Perm  Krai';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/perm', $data);
    }
    public function primorsky()
    {
      	$data['main']='russia_states/primorsky.php';
      	$data['heading']='Primorsky Krai';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/primorsky', $data);
    }
    public function pskorv()
    {
      	$data['main']='russia_states/pskorv.php';
      	$data['heading']='Pskorv Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/pskorv', $data);
    }
    public function republic_altai()
    {
      	$data['main']='russia_states/republic_altai.php';
      	$data['heading']='Altai (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/republic_altai', $data);
    }
    public function rostov()
    {
      	$data['main']='russia_states/rostov.php';
      	$data['heading']='Rostov Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/rostov', $data);
    }
    public function ryazan()
    {
      	$data['main']='russia_states/ryazan.php';
      	$data['heading']='Ryazan Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/ryazan', $data);
    }
    public function sakha()
    {
      	$data['main']='russia_states/sakha.php';
      	$data['heading']='Sakha (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/sakha', $data);
    }
    public function sakhalin()
    {
      	$data['main']='russia_states/sakhalin.php';
      	$data['heading']='Sakhalin Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/sakhalin', $data);
    }
    public function samara()
    {
      	$data['main']='russia_states/samara.php';
      	$data['heading']='Samara Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/samara', $data);
    }
    public function saratov()
    {
      	$data['main']='russia_states/saratov.php';
      	$data['heading']='Saratov Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/saratov', $data);
    }
    public function smolensk()
    {
      	$data['main']='russia_states/smolensk.php';
      	$data['heading']='Smolensk Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/smolensk', $data);
    }
    public function stavropol()
    {
      	$data['main']='russia_states/stavropol.php';
      	$data['heading']='Stavropol Krai';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/stavropol', $data);
    }
    public function sverdlovsk()
    {
      	$data['main']='russia_states/sverdlovsk.php';
      	$data['heading']='Sverdlovsk Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/sverdlovsk', $data);
    }
    public function tambov()
    {
      	$data['main']='russia_states/tambov.php';
      	$data['heading']='Tambov Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tambov', $data);
    }
    public function tatarstan()
    {
      	$data['main']='russia_states/tatarstan.php';
      	$data['heading']='Tatarstan (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tatarstan', $data);
    }
    public function tomsk()
    {
      	$data['main']='russia_states/tomsk.php';
      	$data['heading']='Tomsk Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tomsk', $data);
    }
    public function tula()
    {
      	$data['main']='russia_states/tula.php';
      	$data['heading']='Tula Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tula', $data);
    }
    public function tuva()
    {
      	$data['main']='russia_states/tuva.php';
      	$data['heading']='Tuva (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tuva', $data);
    }
    public function tver()
    {
      	$data['main']='russia_states/tver.php';
      	$data['heading']='Tver Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tver', $data);
    }
    public function tyumen()
    {
      	$data['main']='russia_states/tyumen.php';
      	$data['heading']='Tyumen Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tyumen', $data);
    }
    public function udmurtia()
    {
      	$data['main']='russia_states/udmurtia.php';
      	$data['heading']='Udmurtia (Republic)';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/udmurtia', $data);
    }
    public function ulyanovsk()
    {
      	$data['main']='russia_states/ulyanovsk.php';
      	$data['heading']='Ulyanovsk Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/ulyanovsk', $data);
    }
    public function vladimir()
    {
      	$data['main']='russia_states/vladimir.php';
      	$data['heading']='Vladimir Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/vladimir', $data);
    }
    public function volgograd()
    {
      	$data['main']='russia_states/volgograd.php';
      	$data['heading']='Volgograd Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/volgograd', $data);
    }
    public function vologda()
    {
      	$data['main']='russia_states/vologda.php';
      	$data['heading']='Vologda Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/vologda', $data);
    }
    public function voronezh()
    {
      	$data['main']='russia_states/voronezh.php';
      	$data['heading']='Voronezh Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/voronezh', $data);
    }
    public function yamalia()
    {
      	$data['main']='russia_states/yamalia.php';
      	$data['heading']='Yamalo-Nenets Autonomous Okrug';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/yamalia', $data);
    }
    public function yaroslavl()
    {
      	$data['main']='russia_states/yaroslavl.php';
      	$data['heading']='Yaroslavl Oblast';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/yaroslavl', $data);
    }
    public function zabaykalsk()
    {
      	$data['main']='russia_states/zabaykalsk.php';
      	$data['heading']='Zabaykalsk Krai';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/zabaykalsk', $data);
    }



}