<?php 

class blog extends CI_Controller
{
    public function index()
    {
    }    

    public function raymond()
    {
        $data['main']='blog/raymond.php';
        $data['heading']='Dominica';
        $this->load->model('User_model');

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

        $this->load->view('blog/raymond', $data);
    }

}