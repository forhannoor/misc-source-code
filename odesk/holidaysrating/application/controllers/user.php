<?php 
/* This controller handles actions for authenticated visitors */
class User extends CI_Controller
{
    /* takes to profile page */
    public function index()
    {
        /* redirect to login page if user is not authenticated */
        if(!$this->ion_auth->logged_in())
        {
            echo 'You are not logged in';
            redirect('home/index', 'refresh');
        }           
            
        $data['heading']='My Profile';
        $data['main']='user/profile_view.php';
        $this->load->model('User_model');
        $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
        $data['profile_info']=
        $this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
        $data['pictures']=$this->User_model->get_pictures($this->ion_auth->user()->row()->id);
        $data['videos']=$this->User_model->get_videos($this->ion_auth->user()->row()->id);
        $this->load->view('template_user', $data);
    }
    
    public function add_profile_info()
    {
        /* display form to collect profile information */
        
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('about', 'About Me', 'required');
        
        /* set upload options */
        $config['upload_path']='./uploads';
        $config['allowed_types']='gif|jpg|png|bmp';
        $config['max_width']='128';
        $config['max_height']='128';
        $this->load->library('upload', $config);
    
        /* if form is submitted and validated */
        if($this->form_validation->run()==TRUE)
        {
            /* if upload not successful */
            if(!$this->upload->do_upload())
            {
                $this->load->model('User_model');
                $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
                $data['heading']='My Profile';
                $data['errors']=$this->upload->display_errors();
                $data['main']='user/add_profile_info_view.php';
                $this->load->view('template_user', $data);
            }
            
            else
            {
                /* upload successful*/
                $this->load->model('User_model');
                $this->User_model->add_profile_info($this->ion_auth->user()->row()->id);
                redirect('user/index', 'refresh');    
            }
        }
        
        /* if user is requesting to see the form or form is not validated */
        else 
        {
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['heading']='My Profile';
            $data['main']='user/add_profile_info_view.php';
            $this->load->view('template_user', $data);
        }
    }
    
    public function upload_media()
    {   
        $this->form_validation->set_rules('category', 'Category', 'required');
        
        /* set upload options */
        $config['upload_path']='./uploads/media';
        $config['allowed_types']='gif|jpg|png|bmp|mp4|avi|dat|mkv|flv|mpeg';
        $this->load->library('upload', $config);
        
        /* if user has selected a file to upload */
        if($this->form_validation->run()==TRUE)
        {
            /* if upload not successful */
            if(!$this->upload->do_upload())
            {
                $this->load->model('User_model');
                $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
                $data['heading']='Upload Picture/Video';
                $data['errors']=$this->upload->display_errors();
                $data['main']='user/upload_media_view.php';
                $this->load->view('template_user', $data);
            }
            
            else
            {
                /* upload successful*/
                $this->load->model('User_model');
                $this->User_model->upload_media($this->ion_auth->user()->row()->id);
                redirect('user/index', 'refresh');    
            }                      
        }
        
        else
        {
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['heading']='Upload Picture/Video';
            $data['main']='user/upload_media_view.php';
            $this->load->view('template_user', $data);           
        }
    }
    
    /* add personal banner */
    public function add_banner()
    {
        $config['upload_path']='./uploads/banners';
        $config['allowed_types']='gif|jpg|png|bmp';
        $config['max_width']='2000';
        $config['max_height']='200';
        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload())
        {
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['heading']='Add Banner';
            $data['errors']=$this->upload->display_errors();
            $data['main']='user/add_banner_view.php';
            $this->load->view('template_user', $data);
        }
        
        else 
        {
            $this->load->model('User_model');
            $this->User_model->add_banner($this->ion_auth->user()->row()->id);
            redirect('user/index', 'refresh');           
        }                     
    }
    
    /* show pictures */
    public function show_picture()
    {
        $section=$this->uri->segment(3);
        
        /* if show_picture/all is selected */
        if(strcmp('all', $section)==0)
        {
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['pictures']=$this->User_model->get_pictures($this->ion_auth->user()->row()->id);
            $data['heading']='Picture Gallery';
            $data['main']='user/show_picture_view.php';
            $this->load->view('template_user', $data);
        }
        
        else
        {
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['picture']=$section;
            $data['heading']='Picture Gallery';
            $data['main']='user/show_single_picture_view.php';
            $this->load->view('template_user', $data);
        }
    }
    
    /* show videos */
    public function show_video()
    {
        $section=$this->uri->segment(3);
        
        /* if show/all is selected */
        if(strcmp('all', $section)==0)
        {
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['heading']='Video Gallery';
            $data['videos']=$this->User_model->get_videos($this->ion_auth->user()->row()->id);
            $data['main']='user/show_video_view.php';
            $this->load->view('template_user', $data);
        }
        
        else
        {
                       
        }       
    }
}