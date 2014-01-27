<?php 

class User extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('table');
    }
    
    public function index()
    {
        $this->load->model('Video_model');
        $data['heading']='My Profile';
        $data['main']='user/index.php';
        $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
        $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
        $data['pictures'] = $this->Picture_model->find_by_uploader($this->session->userdata('user_id'), 4);
        $data['videos']=$this->Video_model->find_by_uploader($this->session->userdata('user_id'), 4);
        $data['bucket_list'] = $this->User_model->get_bucket_list($this->session->userdata('user_id'));
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $this->load->view('template_user', $data);
    }
    
    public function add_profile()
    {
        $this->form_validation->set_rules('country', 'Country', 'trim|required|xss_clean');
        $this->form_validation->set_rules('about', 'About Me', 'trim|required|xss_clean');
        
        $config['upload_path']='./uploads';
        $config['allowed_types']='gif|jpg|png|bmp';
        $config['max_width']='128';
        $config['max_height']='128';
        $this->load->library('upload', $config);
    
        if($this->form_validation->run()==TRUE)
        {
            if(!$this->upload->do_upload())
            {
                /* upload not successful */
                $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
                $data['heading']='Add Profile Information';
                $data['errors']=$this->upload->display_errors();
                $data['main']='user/add_profile.php';
                $data['users_online'] = $this->Ion_auth_model->users_online();
                $this->load->view('template_user', $data);
            }
            
            else
            {
                /* upload successful*/
                $this->User_model->add_profile_info($this->session->userdata('user_id'));
                redirect('user/index', 'refresh');    
            }
        }
        
        else 
        {
            $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
            $data['heading']='Add Profile Information';
            $data['main']='user/add_profile.php';
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }
    }
    
    public function edit_profile()
    {
        $this->form_validation->set_rules('country', 'Country', 'trim|required|xss_clean');
        $this->form_validation->set_rules('about', 'About Me', 'trim|required|xss_clean');
        
        $config['upload_path']='./uploads';
        $config['allowed_types']='gif|jpg|png|bmp';
        $config['max_width']='128';
        $config['max_height']='128';
        $this->load->library('upload', $config);
        
        if($this->form_validation->run()==TRUE)
        {
            if(!$this->upload->do_upload())
            {
                /* upload failed */
                $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
                $data['heading']='Edit Profile Information';
                $data['errors']=$this->upload->display_errors();
                $data['main']='user/edit_profile.php';
                $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
                $data['users_online'] = $this->Ion_auth_model->users_online();
                $this->load->view('template_user', $data);
            }
            
            else
            {
                /* upload successful*/
                $this->User_model->update_profile_info($this->session->userdata('user_id'));
                redirect('user/index', 'refresh');    
            }            
        }
        
        else
        {
            $data['heading']='Edit Profile Information';
            $data['main']='user/edit_profile.php';
            $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);            
        }        
    }
    
    public function upload_image()
    {   
        $config['upload_path']='./uploads/media';
        $config['allowed_types']='gif|jpg|png|bmp';
        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload())
        {
            /* upload failed */
            $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
            $data['heading']='Upload Picture';
            $data['errors']=$this->upload->display_errors();
            $data['main']='user/upload_image.php';
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $data['allowed_types'] = $config['allowed_types'];
            $this->load->view('template_user', $data);
        }
        
        else
        {
            /* upload successful */
            $this->Picture_model->save($this->session->userdata('user_id'));
            redirect('user/index', 'refresh');    
        }
    }
    
    public function add_banner()
    {
        $config['upload_path']='./uploads/banners';
        $config['allowed_types']='gif|jpg|png|bmp';
        $config['max_width']='2000';
        $config['max_height']='200';
        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload())
        {
            /* upload failed */
            $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
            $data['heading']='Add Banner';
            $data['errors']='You must upload gif, jpg, png or bmp file<br/>Max allowed dimension 2000 * 200';
            $data['main']='user/add_banner.php';
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }
        
        else 
        {
            /* upload successful */
            $this->User_model->add_banner($this->session->userdata('user_id'));
            redirect('user/index', 'refresh');           
        }
    }
    
    public function show_picture()
    {
        $section=$this->uri->segment(3);
        
        /* picture gallery requested */
        if(strcmp('all', $section)==0)
        {
            $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
            $data['pictures'] = $this->Picture_model->find_by_uploader($this->session->userdata('user_id'));
            $data['heading']='Picture Gallery';
            $data['main']='user/show_picture_view.php';
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }
        
        /* particular picture requested */
        else
        {
            $this->session->set_flashdata('redirectUrl', current_url());
            $config['base_url'] = site_url('user/show_picture/'.$section);
            $config['total_rows'] = R::count('comments', ' pid = :pid', array(':pid' => $section));
            $config['per_page'] = 5;
            $config['num_links'] = 2;
            $config['uri_segment'] = 4; 
            $this->load->library('pagination', $config);
            $this->load->library('table');
            $data['main'] = 'user/show_single_picture_view.php';
            $data['heading'] = 'Picture Gallery';
            $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
            $data['picture']=$section;
            $data['rating'] = $this->Rating_model->get_rating($section);
            $data['num_voter'] = $this->Rating_model->num_vote($section);
            $this->db->where('pid', $section);
            $data['comments'] = $this->db->get('comments', $config['per_page'], $this->uri->segment($config['uri_segment']));
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }
    }
    
    public function show_video()
    {
        $section=$this->uri->segment(3);
        
        /* if show/all is selected */
        if(strcmp('all', $section)==0)
        {
            
            $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
            $data['heading']='Video Gallery';
            $data['videos']=$this->User_model->get_videos($this->session->userdata('user_id'));
            $data['main']='user/show_video_view.php';
            
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }
        
        else
        {
            
            $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
            $data['heading']='Video Gallery';
            $data['main']='user/show_video_view.php';
            
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }       
    }
    
    public function make_comment()
    {
        $this->form_validation->set_rules('description', 'Comment', 'trim|required|min_length[5]|xss_clean');
        
        if($this->form_validation->run()==TRUE)
        {
            $this->User_model->make_comment($this->session->userdata('user_id'));
            $redirectUrl = $this->session->flashdata('redirectUrl');
            
            if($redirectUrl)
                redirect($redirectUrl, 'refresh');
                
            redirect('home/index', 'refresh');
        }   
        
        else
        {
            $this->session->set_flashdata('redirectUrl', $this->session->flashdata('redirectUrl'));
            $img_array = get_clickable_smileys(base_url() . 'assets/smileys/', 'description');
            $col_array = $this->table->make_columns($img_array, 10);
            $data['smiley_table'] = $this->table->generate($col_array);
            $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
            //$data['picture']=$section;
            $data['heading']='Leave Comment';
            $data['main']='user/make_comment.php';
            
            $data['users_online'] = $this->Ion_auth_model->users_online();
            //$data['main']='user/show_single_picture_view.php';
            $this->load->view('template_user', $data);
        }    
    }
    
    public function rate()
    {
        /* check if user is rating a picture or a country */
        $segment = $this->uri->segment(3);
        $pattern = '/\..../';   // to detect image extensions , i.e. .gif, .png etc.
        preg_match($pattern, $segment, $matches, PREG_OFFSET_CAPTURE);
        $count = count($matches);   // if match found, $count > 0
        
        $this->form_validation->set_rules('star1', 'Rating', 'required');
        
        if($this->form_validation->run()==TRUE)
        {
            $item=$this->input->post('name');
            $this->Rating_model->save($this->session->userdata('user_id'), $item);
            
            if($this->input->post('count') > 0)
                redirect('user/show_picture/' . $item, 'refresh');
                
            else
                redirect('topmenu/worldmap', 'refresh');        
        }       
        
        else
        {
            $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
            $data['heading']='Give Rating';
            $data['main']='user/rate_view.php';
            $data['count'] = $count;
            
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);
        }              
    }
    
    public function send_message()
    {
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
        $this->form_validation->set_rules('content', 'Content', 'trim|required|xss_clean');
        
        if($this->form_validation->run() == True)
        {
            $this->User_model->send_message();
            redirect('user/sent', 'refresh');
        }
        
        else 
        {
            $img_array = get_clickable_smileys(base_url() . 'assets/smileys/', 'description');
            $col_array = $this->table->make_columns($img_array, 10);
            $data['smiley_table'] = $this->table->generate($col_array);
            $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
            $data['heading']='Send PM';
            $data['main']='user/send_message_view.php';
            $data['users_online'] = $this->Ion_auth_model->users_online();
            $this->load->view('template_user', $data);               
        }              
    }
    
    public function inbox()
    {
        $this->load->model('Message_model');
        $user_id = $this->session->userdata('user_id');
        $data['messages'] = $this->Message_model->allTo($user_id);
        $data['heading'] = 'Inbox';
        $data['banner'] = $this->User_model->get_banner($user_id);
        $data['main'] = 'user/inbox_view.php';
        $this->load->view('template_user', $data); 
    }
    
    public function sent()
    {
        $this->load->model('Message_model');
        $user_id = $this->session->userdata('user_id');
        $data['messages'] = $this->Message_model->allFrom($user_id);
        $data['heading'] = 'Sent Messages';
        $data['banner'] = $this->User_model->get_banner($user_id);
        $data['main'] = 'user/sent_view.php';
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $this->load->view('template_user', $data);
    }
    
    public function display_message($id)
    {
        $this->load->model('Message_model');
        $data['heading'] = 'Message';
        $data['banner'] = $this->User_model->get_banner($this->session->userdata('user_id'));
        $data['message'] = $this->Message_model->find($id, $this->session->userdata('user_id'));
        $data['main'] = 'user/display_message_view.php';
        
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $this->load->view('template_user', $data);
    }
    
    public function browse()
    {
        $user_id = $this->uri->segment(3);
        $heading = $this->User_model->get_display_name($user_id);
        $data['heading'] = $heading[0]->display_name;
        $data['main'] = 'user/browse.php';
        
        $data['banner'] = $this->User_model->get_banner($user_id);
        $data['profile_info'] =
        $this->User_model->get_profile_info($user_id);
        $data['pictures'] = $this->User_model->get_pictures($user_id);
        $data['videos'] = $this->Video_model->get_videos_by_uploader($user_id);
        
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $this->load->view('template_user', $data);       
    }
    
    public function browse_picture()
    {
        $user_id = $this->uri->segment(3);
        $data['banner']=$this->User_model->get_banner($user_id);
        $data['pictures']=$this->User_model->get_pictures($user_id);
        $data['heading']='Picture Gallery';
        $data['main']='user/show_picture_view.php';
        
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $this->load->view('template_user', $data);             
    }
    
    public function bucket()
    {
        $data['banner']=$this->User_model->get_banner($this->session->userdata('user_id'));
        $data['heading']='Bucket List';
        $data['main']='user/bucket.php';
        $data['users_online'] = $this->Ion_auth_model->users_online();
        $data['bucket_list'] = $this->User_model->get_bucket_list($this->session->userdata('user_id'));
        $this->load->view('template_user', $data);
    }
    
    public function add_to_bucket()
    {
        $this->User_model->add_to_bucket($this->session->userdata('user_id'));
    }
}