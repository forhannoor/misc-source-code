<?php 

class time extends CI_Controller
{
    public function cat()
    {
        $data['main']='time/cat.php';
        $data['heading']='CAT';

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function cet()
    {
        $data['main']='time/cet.php';
        $data['heading']='CET';

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function cvt()
    {
        $data['main']='time/cvt.php';
        $data['heading']='CVT';

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function eat()
    {
        $data['main']='time/eat.php';
        $data['heading']='EAT';

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function utc()
    {
        $data['main']='time/utc.php';
        $data['heading']='UTC';

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }
    public function wat()
    {
        $data['main']='time/wat.php';
        $data['heading']='WAT';

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));

        $this->load->view('template_view', $data);
    }





}