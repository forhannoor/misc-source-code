<?php 

class blog extends CI_Controller
{
    private $layout = 'template_blog';
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_model');
    }
    
    public function blog_index()
    {
        $data['main']='blog/index.php';
        $data['heading']='Blog';
        $data['title'] = 'Blog';
        $data['blogs'] = $this->Blog_model->get_recent(10);
        
        $this->session->set_flashdata('redirectUrl', current_url());

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view($this->layout, $data);
    }
    
    public function raymond()
    {
        $data['main']='blog/raymond.php';
        $data['heading']='Ray and Dominica';
        $data['title'] = 'Follow Raymond in Dominica';

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view($this->layout, $data);
    }
    
    public function angie()
    {
        $data['main']='blog/angie.php';
        $data['heading']='Angie and Australia';
        $data['title'] = 'Explore Australia with Angie';

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view($this->layout, $data);
    }
    
    public function josh()
    {
        $data['main']='blog/josh.php';
        $data['heading']='Josh and Israel';
        $data['title'] = 'Josh knows his way in Israel';

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view($this->layout, $data);
    }
    
    public function create()
    {
        if(!$this->ion_auth->logged_in())
        {
            $this->session->set_flashdata('msg', 'You are not logged in!');
            redirect('blog/blog_index', 'refresh');
        }
        
        $this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[100]|xss_clean');
        $this->form_validation->set_rules('body', 'Body', 'trim|required|max_length[500]|xss_clean');
        
        if($this->form_validation->run() == TRUE)
        {
            $this->Blog_model->create($this->session->userdata('user_id'));
            $this->session->set_flashdata('msg', 'Your blog is waiting for approval');
            redirect('home/index', 'refresh');
        }
        
        else
        {
            $data['title'] = 'Create Story';
            $data['heading'] = 'Create Story';
            $data['main'] = 'blog/create.php';
            $data['profile_info'] = $this->User_model->get_profile_information($this->session->userdata('user_id'));
            $this->load->view($this->layout, $data);
        }
    }
    
    public function read($id)
    {
        $blog = $this->Blog_model->get($id);
        $data['main']='blog/read.php';
        $data['heading']='Blog';
        $data['blog'] = $blog;
        $data['title'] = $blog->title;

        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view($this->layout, $data);
    }
    
    public function all()
    {
        $config['base_url'] = site_url('blog/all');
        $config['total_rows'] = R::count('blogs', ' approved = :approved', array(':approved' => 1));
        $config['per_page'] = 10;
        $config['num_links'] = 2;
        $config['uri_segment'] = 3;
        $this->load->library('pagination', $config);
        $this->load->library('table');
        
        $data['main'] = 'blog/all.php';
        $data['heading'] = 'Blog List';
        $data['title'] = 'Blog List';
        $data['blogs'] = $this->Blog_model->get_all($config['per_page'], (int) $this->uri->segment($config['uri_segment']));
        
        if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_information($this->session->userdata('user_id'));

        $this->load->view($this->layout, $data);
    }
}