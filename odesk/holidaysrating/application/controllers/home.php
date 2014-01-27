<?php 

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('Video_model');
        $data['main']='home.php';
        $data['heading']='Check out our favorites...';
        $data['videos'] = $this->Video_model->get(4, 0, 0);
		
        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
            
		$this->load->view('template', $data);
    }
    
    public function contact_us()
    {
        $config['upload_path']='./uploads/';
        $config['allowed_types']='gif|png|jpg|pdf|doc|rtf|txt';
        $config['max_size']=8000;
        $config['encrypt_name']=FALSE;
        $this->load->library('upload', $config);
        
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        $this->form_validation->set_rules('captcha', 'Captcha', 'required');
        
        if($this->form_validation->run() == TRUE)
        {
            if(strcasecmp($this->session->userdata('captcha'), $this->input->post('captcha')) == 0)
            {
                $this->email->from($this->input->post('email'));
                $this->email->to('contact@holidaysrating.com');
                $this->email->subject($this->input->post('subject'));
                $this->email->message($this->input->post('message'));
                $fpath = '';
                
                if($this->upload->do_upload())      /* if there's an attachment */
                {
                    $attachment= $this->upload->data();
                    $fname=$attachment['file_name'];
                    $fpath=$attachment['file_path'].$fname;
                }
                
                /* if attachement exists */        
                if($fpath != '')
                    $this->email->attach($fpath);
                    
                $this->email->send();
                
                /* email is dispatched, now delete attachment from server */
                if($fpath != '')
                    unlink($fpath);
                    
                $data['main']='thank_you.php';
                $data['heading'] = 'Message Sent';
                $this->load->view('template_view', $data);
            }
            
            /* wrong captcha, redirect to same page */
            else
            {
                $generated_captcha = $this->generateRandStr(5);
                $this->session->set_userdata('captcha', $generated_captcha);
                $captcha = array(
    			'word'			=> $generated_captcha,
    			'img_path'		=> './captcha/',
    			'img_url' 		=> base_url().'captcha/',
    			'font_path'		=> './fonts/impact.ttf',
    			'img_width'		=> '300',
    			'img_height' 	=> '50',
    			'expiration'	=> '3600'
                );
    
        		$img = create_captcha($captcha);
        		$data['image'] = $img['image'];
                $data['main'] = 'contact_us.php';
                $data['heading'] = 'Contact Us';
                $this->load->view('template_view', $data);
            } 
        }
        
        else 
        {
            $generated_captcha = $this->generateRandStr(5);
            $this->session->set_userdata('captcha', $generated_captcha);
            $captcha = array(
			'word'			=> $generated_captcha,
			'img_path'		=> './captcha/',
			'img_url' 		=> base_url().'captcha/',
			'font_path'		=> './fonts/impact.ttf',
			'img_width'		=> '300',
			'img_height' 	=> '50',
			'expiration'	=> '3600'
            );

    		$img = create_captcha($captcha);
    		$data['image'] = $img['image'];
            $data['main'] = 'contact_us.php';
            $data['heading'] = 'Contact Us';

            if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
            
            $this->load->view('template_view', $data);
        }       
    }
    
    private function generateRandStr($length)
	{ 
		$randstr = ""; 
		
		for($i=0; $i<$length; $i++)
		{ 
			$randnum = mt_rand(0,61); 
			
			if($randnum < 10)
			{ 
				$randstr .= chr($randnum+48); 
			}

			else if($randnum < 36)
			{ 
				$randstr .= chr($randnum+55); 
			}

			else
			{ 
				$randstr .= chr($randnum+61); 
			} 
		} 

		return $randstr; 
    }
    
    public function countrylist()
    {
        $data['countries'] = $this->Country_model->get_countries($this->uri->segment(3));
        $this->load->view('countrylist', $data);
    }
    
    public function search()
    {
        $country = $this->input->post('country');
        $result = $this->Country_model->country_to_controller($country);
        redirect($result . '/' . $country, 'refresh');
    }
}