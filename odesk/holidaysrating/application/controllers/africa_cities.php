<?php

class africa_cities extends CI_Controller
{
    public function cities_africa_A_C()
    {
        $data['main'] = 'africa_cities/cities_africa_A_C.php';
        $data['heading'] = 'Cities of Africa';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/cities_africa_A_C', $data);
    }
    public function cities_africa_D_K()
    {
        $data['main'] = 'africa_cities/cities_africa_D_K.php';
        $data['heading'] = 'Cities of Africa';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/cities_africa_D_K', $data);
    }
    public function cities_africa_L_O()
    {
        $data['main'] = 'africa_cities/cities_africa_L_O.php';
        $data['heading'] = 'Cities of Africa';

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/cities_africa_L_O', $data);
    }

    /* Algeria */

    public function algiers()
    {
        $data['main'] = 'africa_cities/algiers.php';
        $data['heading'] = 'Algiers';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/algiers', $data);
    }

    public function constantine()
    {
        $data['main'] = 'africa_cities/constantine.php';
        $data['heading'] = 'Constantine';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/constantine', $data);
    }

    public function tamanrasset()
    {
        $data['main'] = 'africa_cities/tamanrasset.php';
        $data['heading'] = 'Tamanrasset';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/tamanrasset', $data);
    }

    /* Angola */

    public function luanda()
    {
        $data['main'] = 'africa_cities/luanda.php';
        $data['heading'] = 'Luanda';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/luanda', $data);
    }

    public function lubango()
    {
        $data['main'] = 'africa_cities/lubango.php';
        $data['heading'] = 'Lubango';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/lubango', $data);
    }

    public function namibe()
    {
        $data['main'] = 'africa_cities/namibe.php';
        $data['heading'] = 'Namibe';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/namibe', $data);
    }

    /* Benin */

    public function cotonou()
    {
        $data['main'] = 'africa_cities/cotonou.php';
        $data['heading'] = 'Cotonou';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/cotonou', $data);
    }

    public function porto_novo()
    {
        $data['main'] = 'africa_cities/porto_novo.php';
        $data['heading'] = 'Porto Novo';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/porto_novo', $data);
    }

    /* Botswana */

    public function gaborone()
    {
        $data['main'] = 'africa_cities/gaborone.php';
        $data['heading'] = 'Gaborone';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/gaborone', $data);
    }
    public function francistown()
    {
        $data['main'] = 'africa_cities/francistown.php';
        $data['heading'] = 'Francistown';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/francistown', $data);
    }

    /* Burkino Faso */

    public function ouagadougou()
    {
        $data['main'] = 'africa_cities/ouagadougou.php';
        $data['heading'] = 'Ouagadougou';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/ouagadougou', $data);
    }
    public function ouahigouya()
    {
        $data['main'] = 'africa_cities/ouahigouya.php';
        $data['heading'] = 'Ouahigouya';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/ouahigouya', $data);
    }

    /* Burundi */

    public function bujumbura()
    {
        $data['main'] = 'africa_cities/bujumbura.php';
        $data['heading'] = 'Bujumbura';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/bujumbura', $data);
    }
    public function gitega()
    {
        $data['main'] = 'africa_cities/gitega.php';
        $data['heading'] = 'Gitega';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/gitega', $data);
    }

    /* Cameroon */

    public function bafoussam()
    {
        $data['main'] = 'africa_cities/bafoussam.php';
        $data['heading'] = 'Bafoussam';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/bafoussam', $data);
    }
    public function douala()
    {
        $data['main'] = 'africa_cities/douala.php';
        $data['heading'] = 'Douala';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/douala', $data);
    }
    public function garoua()
    {
        $data['main'] = 'africa_cities/garoua.php';
        $data['heading'] = 'Garoua';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/garoua', $data);
    }
    public function maroua()
    {
        $data['main'] = 'africa_cities/maroua.php';
        $data['heading'] = 'Maroua';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/maroua', $data);
    }
    public function yaounde()
    {
        $data['main'] = 'africa_cities/yaounde.php';
        $data['heading'] = 'Yaoundé';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/yaounde', $data);
    }

    /* Cape Verde */

    public function pedra_badejo()
    {
        $data['main'] = 'africa_cities/pedra_badejo.php';
        $data['heading'] = 'Pedra Badejo';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/pedra_badejo', $data);
    }
    public function praia()
    {
        $data['main'] = 'africa_cities/praia.php';
        $data['heading'] = 'Praia';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/praia', $data);
    }
    public function santa_maria()
    {
        $data['main'] = 'africa_cities/santa_maria.php';
        $data['heading'] = 'Santa Maria';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/santa_maria', $data);
    }

    /* Central African Republic */

    public function bangui()
    {
        $data['main'] = 'africa_cities/bangui.php';
        $data['heading'] = 'Bangui';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/bangui', $data);
    }
    public function bimbo()
    {
        $data['main'] = 'africa_cities/bimbo.php';
        $data['heading'] = 'Bimbo';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/bimbo', $data);
    }
    public function berberati()
    {
        $data['main'] = 'africa_cities/berberati.php';
        $data['heading'] = 'Berbérati';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/berberati', $data);
    }

    /* Central African Republic */

    public function n_djamena()
    {
        $data['main'] = 'africa_cities/n_djamena.php';
        $data['heading'] = 'N Djamena';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/n_djamena', $data);
    }
    public function faya_largeau()
    {
        $data['main'] = 'africa_cities/faya_largeau.php';
        $data['heading'] = 'Faya-Largeau';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/faya_largeau', $data);
    }

    /* Comoros */

    public function istandra()
    {
        $data['main'] = 'africa_cities/istandra.php';
        $data['heading'] = 'Istandra';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/istandra', $data);
    }
    public function moroni()
    {
        $data['main'] = 'africa_cities/moroni.php';
        $data['heading'] = 'Moroni';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/moroni', $data);
    }

    /* Congo */

    public function brazzaville()
    {
        $data['main'] = 'africa_cities/brazzaville.php';
        $data['heading'] = 'Brazzaville';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/brazzaville', $data);
    }
    public function dolisie()
    {
        $data['main'] = 'africa_cities/dolisie.php';
        $data['heading'] = 'Dolisie';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/dolisie', $data);
    }
    public function kindamba()
    {
        $data['main'] = 'africa_cities/kindamba.php';
        $data['heading'] = 'Kindamba';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/kindamba', $data);
    }
    public function nkayi()
    {
        $data['main'] = 'africa_cities/nkayi.php';
        $data['heading'] = 'Nkayi';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/nkayi', $data);
    }
    public function pointe_noire()
    {
        $data['main'] = 'africa_cities/pointe_noire.php';
        $data['heading'] = 'Pointe-Noire';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/pointe_noire', $data);
    }

    /* Côte d'Ivoire */

    public function abidjan()
    {
        $data['main'] = 'africa_cities/abidjan.php';
        $data['heading'] = 'Abidjan';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/abidjan', $data);
    }
    public function abobo()
    {
        $data['main'] = 'africa_cities/abobo.php';
        $data['heading'] = 'Abobo';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/abobo', $data);
    }
    public function bouake()
    {
        $data['main'] = 'africa_cities/bouake.php';
        $data['heading'] = 'Bouaké';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/bouake', $data);
    }
    public function daloa()
    {
        $data['main'] = 'africa_cities/daloa.php';
        $data['heading'] = 'Daloa';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/daloa', $data);
    }
    public function yamoussoukro()
    {
        $data['main'] = 'africa_cities/yamoussoukro.php';
        $data['heading'] = 'Yamoussoukro';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/yamoussoukro', $data);
    }

    /* Democratic Republic of Congo */

    public function goma()
    {
        $data['main'] = 'africa_cities/goma.php';
        $data['heading'] = 'Goma';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/goma', $data);
    }
    public function kinshasa()
    {
        $data['main'] = 'africa_cities/kinshasa.php';
        $data['heading'] = 'Kinshasa';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/kinshasa', $data);
    }
    public function lubumbashi()
    {
        $data['main'] = 'africa_cities/lubumbashi.php';
        $data['heading'] = 'Lubumbashi';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/lubumbashi', $data);
    }
    public function mbuji_mayi()
    {
        $data['main'] = 'africa_cities/mbuji_mayi.php';
        $data['heading'] = 'Mbuji-Mayi';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/mbuji_mayi', $data);
    }

    /* Djibouti */

    public function djibouti_city()
    {
        $data['main'] = 'africa_cities/djibouti_city.php';
        $data['heading'] = 'Djibouti City';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/djibouti_city', $data);
    }
    public function ali_sabieh()
    {
        $data['main'] = 'africa_cities/ali_sabieh.php';
        $data['heading'] = 'Ali Sabieh';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/ali_sabieh', $data);
    }

    /* Egypt */

    public function alexandria()
    {
        $data['main'] = 'africa_cities/alexandria.php';
        $data['heading'] = 'Alexandria';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/alexandria', $data);
    }
    public function cairo()
    {
        $data['main'] = 'africa_cities/cairo.php';
        $data['heading'] = 'Cairo';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/cairo', $data);
    }
    public function giza()
    {
        $data['main'] = 'africa_cities/giza.php';
        $data['heading'] = 'Giza';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/giza', $data);
    }
    public function shubra_el_kheima()
    {
        $data['main'] = 'africa_cities/shubra_el_kheima.php';
        $data['heading'] = 'Shubra El-Kheima';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/shubra_el_kheima', $data);
    }

    /* Equatorial Guinea */

    public function bata()
    {
        $data['main'] = 'africa_cities/bata.php';
        $data['heading'] = 'Bata';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/bata', $data);
    }
    public function malabo()
    {
        $data['main'] = 'africa_cities/malabo.php';
        $data['heading'] = 'Malabo';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/malabo', $data);
    }

    /* Eritrea */

    public function asmara()
    {
        $data['main'] = 'africa_cities/asmara.php';
        $data['heading'] = 'Asmara';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/asmara', $data);
    }
    public function keren()
    {
        $data['main'] = 'africa_cities/keren.php';
        $data['heading'] = 'Keren';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/keren', $data);
    }

    /* Ethiopia */

    public function adama()
    {
        $data['main'] = 'africa_cities/adama.php';
        $data['heading'] = 'Adama';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/adama', $data);
    }
    public function addis_ababa()
    {
        $data['main'] = 'africa_cities/addis_ababa.php';
        $data['heading'] = 'Addis Ababa';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/addis_ababa', $data);
    }
    public function dire_dawa()
    {
        $data['main'] = 'africa_cities/dire_dawa.php';
        $data['heading'] = 'Dire Dawa';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/dire_dawa', $data);
    }
    public function mek_ele()
    {
        $data['main'] = 'africa_cities/mek_ele.php';
        $data['heading'] = 'Mek ele';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/mek_ele', $data);
    }

    /* Gabon */

    public function libreville()
    {
        $data['main'] = 'africa_cities/libreville.php';
        $data['heading'] = 'Libreville';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/libreville', $data);
    }
    public function port_gentil()
    {
        $data['main'] = 'africa_cities/port_gentil.php';
        $data['heading'] = 'Port-Gentil';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/port_gentil', $data);
    }

    /* Gambia */

    public function brikama()
    {
        $data['main'] = 'africa_cities/brikama.php';
        $data['heading'] = 'Brikama';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/brikama', $data);
    }
    public function bakau()
    {
        $data['main'] = 'africa_cities/bakau.php';
        $data['heading'] = 'Bakau';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/bakau', $data);
    }
    public function banjul()
    {
        $data['main'] = 'africa_cities/banjul.php';
        $data['heading'] = 'Banjul';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/banjul', $data);
    }

    /* Ghana */

    public function accra()
    {
        $data['main'] = 'africa_cities/accra.php';
        $data['heading'] = 'Accra';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/accra', $data);
    }
    public function kumasi()
    {
        $data['main'] = 'africa_cities/kumasi.php';
        $data['heading'] = 'Kumasi';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/kumasi', $data);
    }
    public function sekondi_takoradi()
    {
        $data['main'] = 'africa_cities/sekondi_takoradi.php';
        $data['heading'] = 'Sekondi-Takoradi';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/sekondi_takoradi', $data);
    }
    public function tamale()
    {
        $data['main'] = 'africa_cities/tamale.php';
        $data['heading'] = 'Tamale';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/tamale', $data);
    }

    /* Guinea */

    public function conakry()
    {
        $data['main'] = 'africa_cities/conakry.php';
        $data['heading'] = 'Conakry';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/conakry', $data);
    }
    public function nzerekore()
    {
        $data['main'] = 'africa_cities/nzerekore.php';
        $data['heading'] = 'Nzérékoré';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/nzerekore', $data);
    }

    /* Guinea-Bissau */

    public function bissau()
    {
        $data['main'] = 'africa_cities/bissau.php';
        $data['heading'] = 'Bissau';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/bissau', $data);
    }

    /* Kenya */

    public function nairobi()
    {
        $data['main'] = 'africa_cities/nairobi.php';
        $data['heading'] = 'Nairobi';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/nairobi', $data);
    }

    /* Lesotho */

    public function mafeteng()
    {
        $data['main'] = 'africa_cities/mafeteng.php';
        $data['heading'] = 'Mafeteng';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/mafeteng', $data);
    }
    public function maseru()
    {
        $data['main'] = 'africa_cities/maseru.php';
        $data['heading'] = 'Maseru';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/maseru', $data);
    }
    public function teyateyaneng()
    {
        $data['main'] = 'africa_cities/teyateyaneng.php';
        $data['heading'] = 'Teyateyaneng';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/teyateyaneng', $data);
    }

    /* Liberia */

    public function monrovia()
    {
        $data['main'] = 'africa_cities/monrovia.php';
        $data['heading'] = 'Monrovia';
        $data['left_bar_city'] = 'sidebar/left_bar_city';
        $data['rating'] = $this->User_model->get_rating($this->uri->segment(2));
        $data['num_voter'] = $this->User_model->count_voter($this->uri->segment(2));
        $this->session->set_flashdata('redirectUrl', current_url());

        if ($this->ion_auth->logged_in())
            $data['profile_info'] = $this->User_model->get_profile_info($this->session->
                userdata('user_id'));

        $this->load->view('africa_cities/monrovia', $data);
    }
}
