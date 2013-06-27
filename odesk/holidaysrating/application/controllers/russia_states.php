<?php 

class russia_states extends CI_Controller
{
    public function index()
    {
    }    

    public function adygeya()
    {
      	$data['main']='russia_states/adygeya.php';
      	$data['heading']='Adygeya';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/adygeya', $data);
    }
    public function altal()
    {
      	$data['main']='russia_states/altal.php';
      	$data['heading']='Altal';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/altal', $data);
    }
    public function amur()
    {
      	$data['main']='russia_states/amur.php';
      	$data['heading']='Amur';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/amur', $data);
    }
    public function arkhangels()
    {
      	$data['main']='russia_states/arkhangels.php';
      	$data['heading']='Arkhangels';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/arkhangels', $data);
    }
    public function arkhangetsk()
    {
      	$data['main']='russia_states/arkhangetsk.php';
      	$data['heading']='Arkhangetsk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/arkhangetsk', $data);
    }
    public function astrakhan()
    {
      	$data['main']='russia_states/astrakhan.php';
      	$data['heading']='Astrakhan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/astrakhan', $data);
    }
    public function bashkortostan()
    {
      	$data['main']='russia_states/bashkortostan.php';
      	$data['heading']='Bashkortostan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/bashkortostan', $data);
    }
    public function belgoral()
    {
      	$data['main']='russia_states/belgoral.php';
      	$data['heading']='Belgoral';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/belgoral', $data);
    }
    public function brayensk()
    {
      	$data['main']='russia_states/brayensk.php';
      	$data['heading']='Brayensk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/brayensk', $data);
    }
    public function buryatia()
    {
      	$data['main']='russia_states/buryatia.php';
      	$data['heading']='Buryatia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/buryatia', $data);
    }
    public function chechnya()
    {
      	$data['main']='russia_states/chechnya.php';
      	$data['heading']='Chechnya';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/chechnya', $data);
    }
    public function chelyabinsk()
    {
      	$data['main']='russia_states/chelyabinsk.php';
      	$data['heading']='Chelyabinsk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/chelyabinsk', $data);
    }
    public function chukotka()
    {
      	$data['main']='russia_states/chukotka.php';
      	$data['heading']='Chukotka';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/chukotka', $data);
    }
    public function chuvashia()
    {
      	$data['main']='russia_states/chuvashia.php';
      	$data['heading']='Chuvashia';
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
      	$data['heading']='Ingushetia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/ingushetia', $data);
    }
    public function irkutsk()
    {
      	$data['main']='russia_states/irkutsk.php';
      	$data['heading']='Irkutsk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/irkutsk', $data);
    }
    public function ivanovo()
    {
      	$data['main']='russia_states/ivanovo.php';
      	$data['heading']='Ivanovo';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/ivanovo', $data);
    }
    public function kalingrad()
    {
      	$data['main']='russia_states/kalingrad.php';
      	$data['heading']='Kalingrad';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kalingrad', $data);
    }
    public function kaluga()
    {
      	$data['main']='russia_states/kaluga.php';
      	$data['heading']='Kaluga';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kaluga', $data);
    }
    public function kamchatka()
    {
      	$data['main']='russia_states/kamchatka.php';
      	$data['heading']='Kamchatka';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kamchatka', $data);
    }
    public function karachay_cherkessia()
    {
      	$data['main']='russia_states/karachay_cherkessia.php';
      	$data['heading']='Karachay-Cherkessia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/karachay_cherkessia', $data);
    }
    public function karbodino_balkaria()
    {
      	$data['main']='russia_states/karbodino_balkaria.php';
      	$data['heading']='Karbodino-Balkaria';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/karbodino_balkaria', $data);
    }
    public function karelia()
    {
      	$data['main']='russia_states/karelia.php';
      	$data['heading']='Karelia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/karelia', $data);
    }
    public function kemerovo()
    {
      	$data['main']='russia_states/kemerovo.php';
      	$data['heading']='Kemerovo';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kemerovo', $data);
    }
    public function khabarovsk()
    {
      	$data['main']='russia_states/khabarovsk.php';
      	$data['heading']='Khabarovsk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/khabarovsk', $data);
    }
    public function khakassia()
    {
      	$data['main']='russia_states/khakassia.php';
      	$data['heading']='Khakassia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/khakassia', $data);
    }
    public function khenbe_menska()
    {
      	$data['main']='russia_states/khenbe_menska.php';
      	$data['heading']='Khenbe Menska';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/khenbe_menska', $data);
    }
    public function klinov()
    {
      	$data['main']='russia_states/klinov.php';
      	$data['heading']='Klinov';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/klinov', $data);
    }
    public function krasnodar()
    {
      	$data['main']='russia_states/krasnodar.php';
      	$data['heading']='Krasnodar';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/krasnodar', $data);
    }
    public function krasnoyarsk()
    {
      	$data['main']='russia_states/krasnoyarsk.php';
      	$data['heading']='Krasnoyarsk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/krasnoyarsk', $data);
    }
    public function kurgan()
    {
      	$data['main']='russia_states/kurgan.php';
      	$data['heading']='Kurgan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kurgan', $data);
    }
    public function kursk()
    {
      	$data['main']='russia_states/kursk.php';
      	$data['heading']='Kursk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/kursk', $data);
    }
    public function leningrad()
    {
      	$data['main']='russia_states/leningrad.php';
      	$data['heading']='Leningrad';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/Leningrad', $data);
    }
    public function lipetsk()
    {
      	$data['main']='russia_states/lipetsk.php';
      	$data['heading']='Lipetsk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/lipetsk', $data);
    }
    public function magadan()
    {
      	$data['main']='russia_states/magadan.php';
      	$data['heading']='Magadan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/magadan', $data);
    }
    public function mari_el()
    {
      	$data['main']='russia_states/mari_el.php';
      	$data['heading']='Mari El';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/mari_el', $data);
    }
    public function mordovia()
    {
      	$data['main']='russia_states/mordovia.php';
      	$data['heading']='Mordovia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/mordovia', $data);
    }
    public function moscow()
    {
      	$data['main']='russia_states/moscow.php';
      	$data['heading']='Moscow';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/moscow', $data);
    }
    public function munmansk()
    {
      	$data['main']='russia_states/munmansk.php';
      	$data['heading']='Munmansk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/munmansk', $data);
    }
    public function nishny_novgorod()
    {
      	$data['main']='russia_states/nishny_novgorod.php';
      	$data['heading']='Nishny-Novgorod';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/nishny_novgorod', $data);
    }
    public function north_ossetia_alania()
    {
      	$data['main']='russia_states/north_ossetia_alania.php';
      	$data['heading']='North Ossetia-Alania';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/north_ossetia_alania', $data);
    }
    public function novgorod()
    {
      	$data['main']='russia_states/novgorod.php';
      	$data['heading']='Novgorod';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/novgorod', $data);
    }
    public function novosibirsk()
    {
      	$data['main']='russia_states/novosibirsk.php';
      	$data['heading']='Novosibirsk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/novosibirsk', $data);
    }
    public function omsk()
    {
      	$data['main']='russia_states/omsk.php';
      	$data['heading']='Omsk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/omsk', $data);
    }
    public function orenburg()
    {
      	$data['main']='russia_states/orenburg.php';
      	$data['heading']='Orenburg';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/orenburg', $data);
    }
    public function oryol()
    {
      	$data['main']='russia_states/oryol.php';
      	$data['heading']='Oryol';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/oryol', $data);
    }
    public function penza()
    {
      	$data['main']='russia_states/penza.php';
      	$data['heading']='Penza';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/penza', $data);
    }
    public function perm()
    {
      	$data['main']='russia_states/perm.php';
      	$data['heading']='Perm';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/perm', $data);
    }
    public function primorsky()
    {
      	$data['main']='russia_states/primorsky.php';
      	$data['heading']='Primorsky';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/primorsky', $data);
    }
    public function pskorv()
    {
      	$data['main']='russia_states/pskorv.php';
      	$data['heading']='Pskorv';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/pskorv', $data);
    }
    public function republic_altal()
    {
      	$data['main']='russia_states/republic_altal.php';
      	$data['heading']='Republic Altal';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/republic_altal', $data);
    }
    public function rostov()
    {
      	$data['main']='russia_states/rostov.php';
      	$data['heading']='Rostov';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/rostov', $data);
    }
    public function ryazan()
    {
      	$data['main']='russia_states/ryazan.php';
      	$data['heading']='Ryazan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/ryazan', $data);
    }
    public function sakha()
    {
      	$data['main']='russia_states/sakha.php';
      	$data['heading']='Sakha';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/sakha', $data);
    }
    public function sakhalin()
    {
      	$data['main']='russia_states/sakhalin.php';
      	$data['heading']='Sakhalin';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/sakhalin', $data);
    }
    public function samara()
    {
      	$data['main']='russia_states/samara.php';
      	$data['heading']='Samara';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/samara', $data);
    }
    public function samtov()
    {
      	$data['main']='russia_states/samtov.php';
      	$data['heading']='Samtov';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/samtov', $data);
    }
    public function smolensk()
    {
      	$data['main']='russia_states/smolensk.php';
      	$data['heading']='Smolensk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/smolensk', $data);
    }
    public function stavropol()
    {
      	$data['main']='russia_states/stavropol.php';
      	$data['heading']='Stavropol';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/stavropol', $data);
    }
    public function sverdlovsk()
    {
      	$data['main']='russia_states/sverdlovsk.php';
      	$data['heading']='Sverdlovsk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/sverdlovsk', $data);
    }
    public function tambov()
    {
      	$data['main']='russia_states/tambov.php';
      	$data['heading']='Tambov';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tambov', $data);
    }
    public function tartastan()
    {
      	$data['main']='russia_states/tartastan.php';
      	$data['heading']='Tartastan';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tartastan', $data);
    }
    public function tomsk()
    {
      	$data['main']='russia_states/tomsk.php';
      	$data['heading']='Tomsk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tomsk', $data);
    }
    public function tula()
    {
      	$data['main']='russia_states/tula.php';
      	$data['heading']='Tula';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tula', $data);
    }
    public function tuva()
    {
      	$data['main']='russia_states/tuva.php';
      	$data['heading']='Tuva';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tuva', $data);
    }
    public function tver()
    {
      	$data['main']='russia_states/tver.php';
      	$data['heading']='Tver';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tver', $data);
    }
    public function tyamen()
    {
      	$data['main']='russia_states/tyamen.php';
      	$data['heading']='Tyamen';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/tyamen', $data);
    }
    public function udmurtia()
    {
      	$data['main']='russia_states/udmurtia.php';
      	$data['heading']='Udmurtia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/udmurtia', $data);
    }
    public function ulianovsk()
    {
      	$data['main']='russia_states/ulianovsk.php';
      	$data['heading']='Ulianovsk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/ulianovsk', $data);
    }
    public function vladmi()
    {
      	$data['main']='russia_states/vladmi.php';
      	$data['heading']='Vladmi';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/vladmi', $data);
    }
    public function volgograd()
    {
      	$data['main']='russia_states/volgograd.php';
      	$data['heading']='Volgograd';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/volgograd', $data);
    }
    public function vologcia()
    {
      	$data['main']='russia_states/vologcia.php';
      	$data['heading']='Vologcia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/vologcia', $data);
    }
    public function voronezh()
    {
      	$data['main']='russia_states/voronezh.php';
      	$data['heading']='Voronezh';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/voronezh', $data);
    }
    public function yamalia()
    {
      	$data['main']='russia_states/yamalia.php';
      	$data['heading']='Yamalia';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/yamalia', $data);
    }
    public function yaroslavl()
    {
      	$data['main']='russia_states/yaroslavl.php';
      	$data['heading']='Yaroslavl';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/yaroslavl', $data);
    }
    public function zabaykalsk()
    {
      	$data['main']='russia_states/zabaykalsk.php';
      	$data['heading']='Zabaykalsk';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('russia_states/zabaykalsk', $data);
    }



}