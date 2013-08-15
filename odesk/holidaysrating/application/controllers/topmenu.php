<?php 

class topmenu extends CI_Controller
{
    public function worldmap()
    {
      	$data['main']='topmenu/worldmap.php';
      	$data['heading']='Worldmap';
      	$this->load->model('User_model');
      	
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('topmenu/worldmap', $data);
    }

    public function favorites()
    {
      $data['main']='topmenu/favorites.php';
      $data['heading']='Favorites';
      $this->load->model('User_model');

      if($this->ion_auth->logged_in())
          $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

      $this->load->view('topmenu/favorites', $data);
    }

    public function helpcenter()
    {
        $data['main']='topmenu/helpcenter.php';
        $data['heading']='Helpcenter';
        $this->load->model('User_model');
      
        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      
        $this->load->view('topmenu/helpcenter', $data);
    }

    public function videodump()
    {
        $this->load->model('Video_model');
        $this->session->set_flashdata('redirectUrl', base_url() . 'index.php/topmenu/videodump');
        
        if($this->uri->segment(3) == '')
        {
            $data['heading']='Videodump';
            $data['videos'] = $this->Video_model->get_videos_latest();
            $this->load->view('topmenu/videodump', $data);
        }
        
        else
        {
            $data['main'] = 'topmenu/videodump_view.php';
            $data['heading'] = 'Videos from '.$this->uri->segment(3);
            //$this->load->view('template', $data);
            $this->load->view('template_view', $data);
        }
    }
   
    public function main_blog()
    {
        $data['main']='topmenu/main_blog.php';
        $data['heading']='Blog';
        $this->load->model('User_model');

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);

        $this->load->view('topmenu/main_blog', $data);
    }
    
    /* video upload */
    public function dump_video()
    {
        if(!$this->ion_auth->logged_in())
        {
            $redirectUrl = $this->session->flashdata('redirectUrl');
            $this->session->set_flashdata('msg', 'You are not logged in');
            
            if($redirectUrl)
                redirect($redirectUrl, 'refresh');
                
            redirect('home/index', 'refresh');
        }
            
            
        /* set upload options */
        $config['upload_path']='./uploads/media/videos';
        /* any extension is allowed for the time being */
        $config['allowed_types']='*';
        /* must modify php.ini to increase uploaded file size limit */
        $config['max_size']='20971520';
        /* prevents user to guess a file name and play */
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        
        $this->form_validation->set_rules('region', 'Region', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        
        if($this->form_validation->run() == TRUE)
        {
            if(!$this->upload->do_upload())
            {
                /* if upload not successful */
                $data['main']='topmenu/dump_video_view.php';
                $data['heading'] = 'Dump Video';
                $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
                $data['errors'] = $this->upload->display_errors();
                $this->load->view('template_user', $data);
            }
            
            else
            {
                /* upload successful*/
                $this->Video_model->upload_video();
                redirect('topmenu/videodump', 'refresh');    
            }
        }
        
        else
        {
            $data['main']='topmenu/dump_video_view.php';
            $data['heading'] = 'Dump Video';
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $this->load->view('template_user', $data);
        }
    }
    
    /* plays the video */   
    public function video()
    {
        $this->load->model('Video_model');
        $data['video'] = $this->Video_model->get_video($this->uri->segment(3));
        $data['main']='topmenu/video_view.php';
        $data['heading'] = 'Holidays Player';
        $data['comments'] = $this->Video_model->get_comments($this->uri->segment(3));
        //$this->load->view('template', $data);
        $this->load->view('template_player', $data);
    }
}