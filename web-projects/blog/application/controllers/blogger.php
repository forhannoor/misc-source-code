<?php

class Blogger extends CI_Controller
{
    public function index()
    {
        if(!$this->ion_auth->logged_in())
            redirect('auth/login', 'refresh');
        
        $this->load->model('Blogger_model');
        $result=$this->Blogger_model->get_all_blogs();
        $data['main_content']='blogger/index_view.php';
        $data['blog_posts']=$result;
        $this->load->view('template', $data);
    }
    
    public function new_blog()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        
        if($this->form_validation->run()==FALSE)
        {
            $data['main_content']='blogger/new_blog_form.php';
            $this->load->view('template', $data);
        }
        
        else
        {
            $this->load->model('Blogger_model');
            $this->Blogger_model->set_new_blog();
            redirect('blogger/index', 'refresh');    
        }
    }
}
#************#
# End of file
#************#