<?php 

class topmenu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Video_model');
    }
    
    public function worldmap()
    {
      	$data['main']='topmenu/worldmap.php';
      	$data['heading']='Worldmap';
      	
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));
      	
      	$this->load->view('topmenu/worldmap', $data);
    }

    public function favorites()
    {
      $data['main']='topmenu/favorites.php';
      $data['heading']='Favorites';

      if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));

      $this->load->view('topmenu/favorites', $data);
    }

    public function helpcenter()
    {
        $data['main']='topmenu/helpcenter.php';
        $data['heading']='Helpcenter';
      
        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      
        $this->load->view('topmenu/helpcenter', $data);
    }

    public function videodump()
    {
        $this->session->set_flashdata('redirectUrl', base_url() . 'index.php/topmenu/videodump');
        
        if($this->uri->segment(3) == '')    // region not specified
        {
            $data['heading']='Videodump';
            $data['videos'] = $this->Video_model->get(4, 0, 0);
            $this->load->view('topmenu/videodump', $data);
        }
        
        else    // region specified
        {
            $data['main'] = 'topmenu/videodump_view.php';
            $data['heading'] = 'Videos from '.$this->uri->segment(3);
            $data['videos'] = $this->Video_model->get_where('region', $this->uri->segment(3));
            $this->load->view('template_view', $data);
        }
    }
   
    public function main_blog()
    {
        $data['main']='topmenu/main_blog.php';
        $data['heading']='Blog';

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));

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
        
        /* upload configurations */    
        $config['upload_path']='./uploads/media/videos';
        $config['allowed_types']='mp4';
        $config['max_size']='20971520';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        
        $this->form_validation->set_rules('region', 'Region', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        
        if($this->form_validation->run() == TRUE)
        {
            if(! $this->upload->do_upload())
            {
                /* upload not successful */
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
            $data['allowed_types'] = $config['allowed_types'];
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $this->load->view('template_user', $data);
        }
    }
    
    /* video playback */   
    public function video($name)
    {
        $this->load->model('Comment_m');
        $data['video'] = $this->Video_model->get_where('name', $name, 1);
        $data['main']='topmenu/video_view.php';
        $data['heading'] = 'Holidays Player';
        $data['comments'] = $this->Comment_m->get_where('pid', $name);
        $this->load->view('template_player', $data);
    }
}