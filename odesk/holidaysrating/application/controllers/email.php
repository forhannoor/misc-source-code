<?php 

class Email extends CI_Controller
{
	public function index()
    {
        if(!$this->logged_in())
            redirect('home/index', 'refresh');
            
        $this->email->from('donotreply@holidaysrating.com', 'Holidaysrating.com');
        $this->email->to('forhannoor@gmail.com');         
        $this->email->subject('Email Test');
        $this->email->message('Just testing the email class.');	
        $this->email->send();
    }
}