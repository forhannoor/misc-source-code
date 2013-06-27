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
            $this->session->set_flashdata('msg', 'You are not logged in');
            redirect('home/index', 'refresh');        
        }
            
        $data['heading']='My Profile';
        $data['main']='user/index_view.php';
        $this->load->model('User_model');
        $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
        $data['profile_info']=
        $this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
        $data['pictures']=$this->User_model->get_pictures($this->ion_auth->user()->row()->id);
        $data['videos']=$this->Video_model->get_videos_by_uploader($this->ion_auth->user()->row()->id);
        $this->load->model('Ion_auth_model');
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $this->load->view('template_user', $data);
    }
    
    public function add_profile_info()
    {
        /* redirect to login page if user is not authenticated */
        if(!$this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('msg', 'You are not logged in');
            redirect('home/index', 'refresh');        
        }
        
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
                $data['heading']='Add Profile Information';
                $data['errors']=$this->upload->display_errors();
                $data['main']='user/add_profile_info_view.php';
                $this->load->model('Ion_auth_model');
                $data['users_online'] = $this->Ion_auth_model->users_online();
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
            $data['heading']='Add Profile Information';
            $data['main']='user/add_profile_info_view.php';
            $this->load->model('Ion_auth_model');
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }
    }
    
    public function edit_profile_info()
    {
        /* redirect to login page if user is not authenticated */
        if(!$this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('msg', 'You are not logged in');
            redirect('home/index', 'refresh');        
        }
        
        /* display form to collect profile information */
        
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('about', 'About Me', 'required');
        
        /* set upload options */
        $config['upload_path']='./uploads';
        $config['allowed_types']='gif|jpg|png|bmp';
        $config['max_width']='128';
        $config['max_height']='128';
        $this->load->library('upload', $config);
        
        /* form submitted and validated */
        if($this->form_validation->run()==TRUE)
        {
            /* if upload not successful */
            if(!$this->upload->do_upload())
            {
                $this->load->model('User_model');
                $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
                $data['heading']='Edit Profile Information';
                $data['errors']=$this->upload->display_errors();
                $data['main']='user/edit_profile_info_view.php';
                $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
                $this->load->model('Ion_auth_model');
                $data['users_online'] = $this->Ion_auth_model->users_online();
                $this->load->view('template_user', $data);
            }
            
            else
            {
                /* upload successful*/
                $this->load->model('User_model');
                $this->User_model->update_profile_info($this->ion_auth->user()->row()->id);
                redirect('user/index', 'refresh');    
            }            
        }
        
        else
        {
            $data['heading']='Edit Profile Information';
            $data['main']='user/edit_profile_info_view.php';
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
            $this->load->model('Ion_auth_model');
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);            
        }        
    }
    
    public function upload_media()
    {
        /* redirect to login page if user is not authenticated */
        if(!$this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('msg', 'You are not logged in');
            redirect('home/index', 'refresh');        
        }
        
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
                $this->load->model('Ion_auth_model');
                $data['users_online'] = $this->Ion_auth_model->users_online();
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
            $this->load->model('Ion_auth_model');
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);           
        }
    }
    
    /* add personal banner */
    public function add_banner()
    {
        /* redirect to login page if user is not authenticated */
        if(!$this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('msg', 'You are not logged in');
            redirect('home/index', 'refresh');        
        }
        
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
            $this->load->model('Ion_auth_model');
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }
        
        else 
        {
            $this->load->model('User_model');
            $this->User_model->add_banner($this->ion_auth->user()->row()->id);
            redirect('user/index', 'refresh');           
        }                     
    }
    
    public function edit_banner()
    {
        /* redirect to login page if user is not authenticated */
        if(!$this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('msg', 'You are not logged in');
            redirect('home/index', 'refresh');        
        }
        
        $config['upload_path']='./uploads/banners';
        $config['allowed_types']='gif|jpg|png|bmp';
        $config['max_width']='2000';
        $config['max_height']='200';
        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload())
        {
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['heading']='Edit Banner';
            $data['errors']=$this->upload->display_errors();
            $data['main']='user/edit_banner_view.php';
            $this->load->model('Ion_auth_model');
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }
        
        else 
        {
            $this->load->model('User_model');
            $this->User_model->edit_banner($this->ion_auth->user()->row()->id);
            redirect('user/index', 'refresh');           
        }
    }
    
    /* show pictures */
    public function show_picture()
    {
        /* redirect to login page if user is not authenticated */
        if(!$this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('msg', 'You are not logged in');
            redirect('home/index', 'refresh');        
        }
        
        $section=$this->uri->segment(3);
        
        /* if show_picture/all is selected */
        if(strcmp('all', $section)==0)
        {
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['pictures']=$this->User_model->get_pictures($this->ion_auth->user()->row()->id);
            $data['heading']='Picture Gallery';
            $data['main']='user/show_picture_view.php';
            $this->load->model('Ion_auth_model');
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }
        
        else
        {
            //$this->load->model('User_model');
//            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
//            $data['picture']=$section;
//            $data['rating'] = $this->User_model->get_rating($section);
//            $comments=$this->User_model->get_comments($section);
//            $organized_comments=array();
//            
//            foreach($comments->result() as $comment)
//            {
//                $organized_comments[]=$comment->time;
//                $organized_comments[]=$this->User_model->get_username($comment->cid);
//                $organized_comments[]=$comment->description;
//            }
//            
//            $data['comments']=$organized_comments;
//            $data['heading']='Picture Gallery';
//            $data['main']='user/show_single_picture_view.php';
//            $this->load->view('template_user', $data);

            $this->load->model('User_model');
            $config['base_url'] = site_url('user/show_picture/'.$section);
            $config['total_rows'] = $this->User_model->get_comments($section)->num_rows();
            $config['per_page'] = 5;
            $config['num_links'] = 5;
            $config['uri_segment'] = 4; 
            $this->load->library('pagination', $config);
            $this->load->library('table');
            $data['main'] = 'user/show_single_picture_view.php';
            $data['heading'] = 'Picture Gallery';
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['picture']=$section;
            $data['rating'] = $this->User_model->get_rating($section);
            $this->db->where('pid', $section);
            $data['comments'] = $this->db->get('comments', $config['per_page'], $this->uri->segment(4));
            $this->load->model('Ion_auth_model');
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }
    }
    
    /* show videos */
    public function show_video()
    {
        /* redirect to login page if user is not authenticated */
        if(!$this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('msg', 'You are not logged in');
            redirect('home/index', 'refresh');        
        }
        
        $section=$this->uri->segment(3);
        
        /* if show/all is selected */
        if(strcmp('all', $section)==0)
        {
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['heading']='Video Gallery';
            $data['videos']=$this->User_model->get_videos($this->ion_auth->user()->row()->id);
            $data['main']='user/show_video_view.php';
            $this->load->model('Ion_auth_model');
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }
        
        else
        {
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['heading']='Video Gallery';
            $data['main']='user/show_video_view.php';
            $this->load->model('Ion_auth_model');
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }       
    }
    
    public function make_comment()
    {
        /* redirect to login page if user is not authenticated */
        if(!$this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('msg', 'You are not logged in');
            redirect('home/index', 'refresh');        
        }
        
        $this->form_validation->set_rules('description', 'Comment', 'required|min_length[5]');
        
        if($this->form_validation->run()==TRUE)
        {
            $this->load->model('User_model');
            $photo_id=$this->input->post('pid');
            $this->User_model->make_comment($this->ion_auth->user()->row()->id);
            redirect('home/index', 'refresh');        
        }   
        
        else
        {
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            //$data['picture']=$section;
            $data['heading']='Leave Comment';
            $data['main']='user/make_comment_view.php';
            $this->load->model('Ion_auth_model');
            $data['users_online'] = $this->Ion_auth_model->users_online();
            //$data['main']='user/show_single_picture_view.php';
            $this->load->view('template_user', $data);
        }    
    }
    
    public function rate()
    {
        /* redirect to login page if user is not authenticated */
        if(!$this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('msg', 'You are not logged in');
            redirect('home/index', 'refresh');        
        }
        
        $this->form_validation->set_rules('rating', 'Rating', 'required');
        
        if($this->form_validation->run()==TRUE)
        {
            $this->load->model('User_model');
            $photo_id=$this->input->post('name');
            $this->User_model->set_rating($this->ion_auth->user()->row()->id, $photo_id);
            redirect('/', 'refresh');        
        }   
        
        else
        {
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['heading']='Give Rating';
            $data['main']='user/rate_view.php';
            $this->load->model('Ion_auth_model');
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }              
    }
    
    /* sends personal message */
    public function send_message()
    {
        /* redirect to login page if user is not authenticated */
        if(!$this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('msg', 'You are not logged in');
            redirect('home/index', 'refresh');        
        }
        
        $this->form_validation->set_rules('content', 'Message Content', 'required');
        
        if($this->form_validation->run() == True)
        {
            $this->load->model('User_model');
            $this->User_model->send_message();
            redirect('user/index', 'refresh');
        }
        
        else 
        {
            $this->load->model('User_model');
            $data['banner']=$this->User_model->get_banner($this->ion_auth->user()->row()->id);
            $data['heading']='Send PM';
            $data['main']='user/send_message_view.php';
            $this->load->model('Ion_auth_model');
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);               
        }              
    }
    
    /* user inbox */
    public function inbox()
    {
        $user_id = $this->ion_auth->user()->row()->id;  # get user id
        $this->load->model('User_model');
        $data['messages'] = $this->User_model->get_inbox($user_id); # get personal messages came for the user
        $data['heading'] = 'Inbox';
        $data['banner'] = $this->User_model->get_banner($user_id);
        $data['main'] = 'user/inbox_view.php';
        $this->load->view('template_user', $data); 
    }
    
    /* user sent messages */
    public function sent()
    {
        $user_id = $this->ion_auth->user()->row()->id;  # get user id
        $this->load->model('User_model');
        $data['messages'] = $this->User_model->get_sent($user_id); # get personal messages came for the user
        $data['heading'] = 'Sent Messages';
        $data['banner'] = $this->User_model->get_banner($user_id);
        $data['main'] = 'user/sent_view.php';
        $this->load->model('Ion_auth_model');
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $this->load->view('template_user', $data);
    }
    
    /* displays inbox message */
    public function display_message()
    {
        $message_id = $this->uri->segment(3);   # get message id
        $this->load->model('User_model');
        $data['heading'] = 'Message';
        $data['banner'] = $this->User_model->get_banner($this->ion_auth->user()->row()->id);
        $data['message'] = $this->User_model->get_message($message_id);
        $data['main'] = 'user/display_message_view.php';
        $this->load->model('Ion_auth_model');
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $this->load->view('template_user', $data);
    }
}