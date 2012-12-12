<?php  

class Comment extends CI_Controller
{
    public function index()
    {
        
    }
    
    public function view_comments()
    {
        $this->load->model('Comment_model');
        $data['comments']=$this->Comment_model->get_comments();
        $data['main_content']='comment/view_comments.php';
        $this->load->view('template', $data);
    }
    
    public function make_comment()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('comment', 'Comment', 'required');
        
        if($this->form_validation->run()==FALSE)
        {
            $data['main_content']='comment/comment_form.php';
            $this->load->view('template', $data);
        }
        
        else
        {
            $this->load->model('Comment_model');
            $this->Comment_model->set_comment();
            redirect('blogger/index', 'refresh');    
        }
    }
}
#************#
# End of file
#************#