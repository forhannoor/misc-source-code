<?php 

class Admin extends Base_Admin_Controller
{
    private $layout = 'layout_admin';
    
    public function index()
    {
        $data['main']='admin/index.php';
        $this->load->view($this->layout, $data);
    }
    
    public function comments()
    {
        $data['main']='admin/comments.php';
        $data['comments'] = $this->Admin_model->get_comments();
        $this->load->view($this->layout, $data);
    }
    
    public function comment_delete()
    {
        $this->Admin_model->delete_comment($this->uri->segment(3));
        redirect('admin/comments', 'refresh');
    }
    
    public function banners()
    {
        $data['main']='admin/banners.php';
        $data['banners'] = $this->Admin_model->get_banners();
        $this->load->view($this->layout, $data);       
    }
    
    public function banner_delete()
    {
        $this->Admin_model->delete_banner($this->uri->segment(3));
        redirect('admin/banners', 'refresh');
    }
    
    public function pictures()
    {
        $data['main']='admin/pictures.php';
        $data['pictures'] = $this->Admin_model->get_pictures();
        $this->load->view($this->layout, $data);       
    }
    
    public function picture_delete()
    {
        $this->Admin_model->delete_picture($this->uri->segment(3));
        redirect('admin/pictures', 'refresh');       
    }
    
    public function videos()
    {
        $data['main']='admin/videos.php';
        $data['videos'] = $this->Admin_model->get_videos();
        $this->load->view($this->layout, $data);
    }
    
    public function video_delete()
    {
        $this->Admin_model->delete_video($this->uri->segment(3));
        redirect('admin/videos', 'refresh');       
    }
    
    public function users()
    {
        $data['main']='admin/users.php';
        $data['users'] = $this->Admin_model->get_users();
        $this->load->view($this->layout, $data);       
    }
    
    public function user_delete()
    {
        $this->Admin_model->delete_user($this->uri->segment(3));
        redirect('admin/users', 'refresh');       
    }
    
    public function ratings()
    {
        $data['main']='admin/ratings.php';
        $data['ratings'] = $this->Admin_model->get_ratings();
        $this->load->view($this->layout, $data);              
    }
    
    public function pm()
    {
        $this->form_validation->set_rules('message', 'Message', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        
        if($this->form_validation->run() == TRUE)
        {
            $this->Admin_model->send_pm();
            redirect('admin/index', 'refresh');
        }
        
        else
        {
            $data['main']='admin/pm.php';
            $this->load->view($this->layout, $data);
        }
    }
    
    public function note()
    {
        if($this->uri->segment(3))
        {
            $data['note'] = $this->Admin_model->get_notes($this->uri->segment(3));           
            $data['main'] = 'admin/note_read.php';
            $this->load->view($this->layout, $data);
        }
        
        else
        {
            $data['notes'] = $this->Admin_model->get_notes();           
            $data['main'] = 'admin/note.php';
            $this->load->view($this->layout, $data);
        }
        
               
    }
    
    public function note_create()
    {
        if(!$this->ion_auth->is_admin())
            redirect('home/index', 'refresh');
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        
        if($this->form_validation->run() == TRUE)
        {
            $this->Admin_model->create_note($this->ion_auth->user()->row()->id);
            redirect('admin/note', 'refresh');
        }
        
        else
        {
            $data['main'] = 'admin/note_create.php'; 
            $this->load->view($this->layout, $data);
        }
    }
    
    public function note_changestatus()
    {
        $id = $this->uri->segment(3);
        $this->Admin_model->updatestatus_note($id);
        redirect('admin/note', 'refresh');
    }
    
    public function note_delete($id)
    {
        $this->Admin_model->delete_note($id);
        redirect('admin/note', 'refresh');
    }
    
    public function note_edit($id)
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');  
        
        if($this->form_validation->run() == TRUE)
        {
            $this->Admin_model->update_note($id);
            redirect('admin/note', 'refresh');
        }
        
        else
        {
            $data['note'] = $this->Admin_model->get_notes($id);
            $data['main'] = 'admin/note_edit.php'; 
            $this->load->view($this->layout, $data);
        }     
    }
    
    public function blogs()
    {
        $this->load->model('Blog_model');
        $data['blogs'] = $this->Blog_model->get_by_status();
        $data['main'] = 'admin/blogs.php';
        $this->load->view($this->layout, $data);
    }
    
    public function blog_delete($id)
    {
        $this->load->model('Blog_model');
        $this->Blog_model->delete($id);
        redirect('admin/blogs', 'refresh');
    }
    
    public function blog_approve($id)
    {
        $this->load->model('Blog_model');
        $this->Blog_model->approve($id);
        redirect('admin/blogs', 'refresh');
    }
    
    public function blog_read($id)
    {
        $this->load->model('Blog_model');
        $data['blog'] = $this->Blog_model->get($id);
        $data['main'] = 'admin/blog_read.php';
        $this->load->view($this->layout, $data);
    }
    
    public function blog_edit($id)
    {
        $this->load->model('Blog_model');
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');
        
        if($this->form_validation->run() == TRUE)
        {
            $this->Blog_model->update($id);
            redirect('admin/blog_read/' . $id, 'refresh');
        }
        
        else
        {
            $data['blog'] = $this->Blog_model->get($id);
            $data['main'] = 'admin/blog_edit.php';
            $this->load->view($this->layout, $data);
        }
    } 
}