<?php 

class russia_districts extends CI_Controller
{
    public function index()
    {
    }    

    public function central()
    {
        $data['main']='russia_districts/central.php';
        $data['heading']='Central District';
        $this->load->model('User_model');

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

        $this->load->view('russia_districts/central', $data);
    }    
    public function far_eastern()
    {
        $data['main']='russia_districts/far_eastern.php';
        $data['heading']='Far Eastern District';
        $this->load->model('User_model');

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

        $this->load->view('russia_districts/far_eastern', $data);
    }
    public function north_caucasian()
    {
        $data['main']='russia_districts/north_caucasian.php';
        $data['heading']='North Caucasian District';
        $this->load->model('User_model');

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

        $this->load->view('russia_districts/north_caucasian', $data);
    }
    public function north_western()
    {
        $data['main']='russia_districts/north_western.php';
        $data['heading']='North Western District';
        $this->load->model('User_model');

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

        $this->load->view('russia_districts/north_western', $data);
    }
    public function siberian()
    {
        $data['main']='russia_districts/siberian.php';
        $data['heading']='Siberian District';
        $this->load->model('User_model');

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

        $this->load->view('russia_districts/siberian', $data);
    }
    public function southern()
    {
        $data['main']='russia_districts/southern.php';
        $data['heading']='Southern District';
        $this->load->model('User_model');

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

        $this->load->view('russia_districts/southern', $data);
    }
    public function ural()
    {
        $data['main']='russia_districts/ural.php';
        $data['heading']='Ural District';
        $this->load->model('User_model');

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

        $this->load->view('russia_districts/ural', $data);
    }
    public function volga()
    {
        $data['main']='russia_districts/volga.php';
        $data['heading']='Volga District';
        $this->load->model('User_model');

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

        $this->load->view('russia_districts/volga', $data);
    }

}