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
}