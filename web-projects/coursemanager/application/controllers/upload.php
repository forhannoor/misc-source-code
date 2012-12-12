<?php

    class Upload extends CI_Controller
    {
        public function __construct() {
            parent::__construct();
        }
        
        public function index()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            $data['error']='';
            $data['main_content']='upload/propic_upload_form.php';
            $this->load->view('template', $data);
        }
		
        public function do_upload()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            /* upload configuration */
            $config['upload_path']='./uploads/images/';
            $config['allowed_types']='gif|png|jpg';
            $config['max_size']=1000;
            $config['max_height']=768;
            $config['max_width']=1024;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload())
            {
                $data=array('error' => $this->upload->display_errors());
                $data['main_content']='upload/propic_upload_form.php';
                $this->load->view('template', $data);
            }

            else
            {
                $this->load->model('Upload_model');
                //update profile picture information into database 
                $this->Upload_model->update_propic($this->upload->data());
				redirect('admin/profile', 'refresh');
                //pass uploaded data to view in case need to show 
				/*
                $data['upload_data']=  $this->upload->data();
                $data['main_content']='upload/upload_success.php';
                $this->load->view('template', $data);
				*/
            }
        }
        
        public function uploaded_data()
        {
            $config['upload_path']='./uploads/images/';
            $this->load->library('upload', $config);
            $data['upload_data']=$this->upload->data();
            $data['main_content']='upload/upload_success.php';
            $this->load->view('template', $data);
        }
        
        public function delete_propic()
        {
            $this->load->model('Upload_model');
            $this->Upload_model->delete_propic();
            redirect('admin/profile', 'refresh');
        }
    }

?>