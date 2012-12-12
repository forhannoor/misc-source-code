<?php

    class Email extends CI_Controller
    {
        public function __construct() 
        {
            parent::__construct();
            $this->load->library('email');
        }
        
        public function index()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            $data['main_content']='email/email_form.php';
            $this->load->view('template', $data);
        }
		
        public function send_email()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            $this->form_validation->set_rules('to', 'To', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');
            
            if($this->form_validation->run()==FALSE)
            {
                $data['main_content']='email/email_form.php';
                $this->load->view('template', $data);
            }
            
            $this->load->model('Email_model');
            $to=$this->Email_model->get_recipients();       /* Prepares list of recipients from form */
            /* Attachment configuration */
            $config['upload_path']='./uploads/';
            $config['allowed_types']='gif|png|jpg|pdf|doc|rtf|txt';
            $config['max_size']=1000;
            $config['encrypt_name']=TRUE;
            $this->load->library('upload', $config);
            $cc=  $this->input->post('cc');
            $bcc=  $this->input->post('bcc');
            $subject=  $this->input->post('subject');
            $message=  $this->input->post('message');
            $fpath='';
            
            if($this->upload->do_upload())      /* if the user uses attachment */
            {
                $attachment= $this->upload->data();
                $fname=$attachment['file_name'];
                $fpath=$attachment['file_path'].$fname;
            }

            $this->email->from($this->ion_auth->get_user()->email);
            $this->email->to($to);
            $this->email->cc($cc);
            $this->email->bcc($bcc);
            $this->email->subject($subject);
            $this->email->message($message);
            
            if($fpath!='')  /* empty means no attachment */
                $this->email->attach($fpath);
            
            $status=$this->email->send();
			
			if($status==0)
			{
				$data['main_content']='email/email_not_sent.php';
				$this->load->view('template', $data);
			}
			
			else
			{
				$data['main_content']='email/email_sent.php';
				$this->load->view('template', $data);
			}
        }
    }

?>