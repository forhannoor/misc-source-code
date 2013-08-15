<?php 

class help extends CI_Controller
{
    public function index()
    {
    }    

    public function external_links()
    {
        $data['main']='help/external_links.php';
        $data['heading']='External Links';
        $this->load->model('User_model');

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

        $this->load->view('help/external_links', $data);
    }
        public function profile_help()
    {
        $data['main']='help/profile_help.php';
        $data['heading']='Help: Profile';
        $this->load->model('User_model');

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

        $this->load->view('help/profile_help', $data);
    }
    public function link_to_us()
    {
        $data['main']='help/nk_to_us.php';
        $data['heading']='Link to us';
        $this->load->model('User_model');

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

        $this->load->view('help/link_to_us', $data);
    }

}