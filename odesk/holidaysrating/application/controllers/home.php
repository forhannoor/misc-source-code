<?php 

class Home extends CI_Controller
{
    public function index()
    {
        $data['main']='home.php';
        $data['heading']='Check out our favorites...';
        $this->parser->parse('template', $data);
    }
    
    public function register()
    {
        $data['main']='auth/register.php';
        $data['heading']='Register';
        $this->parser->parse('template', $data);
    }
}