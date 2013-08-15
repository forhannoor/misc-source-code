<?php 

class Admin extends CI_Controller
{
    public function index()
    {
        if(!$this->ion_auth->is_admin())
            redirect('home/index', 'refresh');
            
        $data['main']='admin/index.php';
        $this->load->view('layout_admin', $data);
    }
    
    public function comments()
    {
        if(!$this->ion_auth->is_admin())
            redirect('home/index', 'refresh');
            
        $data['main']='admin/comments.php';
        $data['comments'] = $this->Admin_model->get_comments();
        $this->load->view('layout_admin', $data);
    }
    
    public function comment_delete()
    {
        if(!$this->ion_auth->is_admin())
            redirect('home/index', 'refresh');
            
        $this->Admin_model->delete_comment($this->uri->segment(3));
        redirect('admin/comments', 'refresh');
    }
    
    public function banners()
    {
        if(!$this->ion_auth->is_admin())
            redirect('home/index', 'refresh');
            
        $data['main']='admin/banners.php';
        $data['banners'] = $this->Admin_model->get_banners();
        $this->load->view('layout_admin', $data);       
    }
    
    public function banner_delete()
    {
        if(!$this->ion_auth->is_admin())
            redirect('home/index', 'refresh');
            
        $this->Admin_model->delete_banner($this->uri->segment(3));
        redirect('admin/banners', 'refresh');
    }
    
    public function pictures()
    {
        if(!$this->ion_auth->is_admin())
            redirect('home/index', 'refresh');
            
        $data['main']='admin/pictures.php';
        $data['pictures'] = $this->Admin_model->get_pictures();
        $this->load->view('layout_admin', $data);       
    }
    
    public function picture_delete()
    {
        if(!$this->ion_auth->is_admin())
            redirect('home/index', 'refresh');
            
        $this->Admin_model->delete_picture($this->uri->segment(3));
        redirect('admin/pictures', 'refresh');       
    }
    
    public function videos()
    {
        if(!$this->ion_auth->is_admin())
            redirect('home/index', 'refresh');
            
        $data['main']='admin/videos.php';
        $data['videos'] = $this->Admin_model->get_videos();
        $this->load->view('layout_admin', $data);
    }
    
    public function video_delete()
    {
        if(!$this->ion_auth->is_admin())
            redirect('home/index', 'refresh');
            
        $this->Admin_model->delete_video($this->uri->segment(3));
        redirect('admin/videos', 'refresh');       
    }
    
    public function users()
    {
        if(!$this->ion_auth->is_admin())
            redirect('home/index', 'refresh');
            
        $data['main']='admin/users.php';
        $data['users'] = $this->Admin_model->get_users();
        $this->load->view('layout_admin', $data);       
    }
    
    public function user_delete()
    {
        if(!$this->ion_auth->is_admin())
            redirect('home/index', 'refresh');
            
        $this->Admin_model->delete_user($this->uri->segment(3));
        redirect('admin/users', 'refresh');       
    }
    
    public function ratings()
    {
        if(!$this->ion_auth->is_admin())
            redirect('home/index', 'refresh');
            
        $data['main']='admin/ratings.php';
        $data['ratings'] = $this->Admin_model->get_ratings();
        $this->load->view('layout_admin', $data);              
    }
}