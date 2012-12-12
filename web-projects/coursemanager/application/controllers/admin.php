<?php

    class Admin extends CI_Controller
    {
        public function index()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            else
            {
                $data['main_content']='admin/index.php';
                $this->load->view('template', $data);
            }
        }
        
        public function add_course()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            $this->form_validation->set_rules('course_id', 'Course ID', 'required|max_length[7]|min_length[6]');
            $this->form_validation->set_rules('title','Title');
            $this->form_validation->set_rules('description','Description');
            $this->form_validation->set_rules('credit', 'Credit', 'required|is_numeric' );
            $this->form_validation->set_rules('status', 'Status', 'is_numeric');
            $this->form_validation->set_rules('grade', 'Grade', 'max_length[2]');
            $this->form_validation->set_rules('grade_point','Grade Point', 'is_numeric' );
            
            if($this->form_validation->run()==FALSE)
            {
                $data['main_content']='admin/course_form.php';
                $this->load->view('template', $data);
            }
            
            else
            {
                $this->load->model('Course_model');
                $this->Course_model->add_course();
                $data['main_content']='admin/add_success.php';
                $this->load->view('template', $data);
            }
        }
        
        public function course_list()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            $this->load->model('Course_model');
            $data['result']=$this->Course_model->get_course_list();
            $data['main_content']='admin/course_list.php';
            $this->load->view('template', $data);
        }
        
        public function result()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            $this->load->model('Course_model');
            $data['credit_completed']=$this->Course_model->get_total_credit();
            $data['gradepoint']=  $this->Course_model->get_total_gp();
            $data['cgpa']=  $this->Course_model->get_result();
            $data['credit_remaining']=  $this->Course_model->get_remaining_credit();
            $data['number_courses']=  $this->Course_model->number_courses();
            $data['number_A']=  $this->Course_model->number_A();
            $data['main_content']='admin/result.php';
            $this->load->view('template', $data);
        }
        
        public function delete()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            $this->load->model('Course_model');
            $this->Course_model->delete_row();
            $this->course_list();
//            $data['main_content']='admin/course_list.php';
//            $this->load->view('template', $data);
        }
        
        public function update()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            $this->load->model('Course_model');
            $data['prev']=$this->Course_model->get_record();
            $data['main_content']='admin/update_form.php';
            $this->load->view('template', $data);
        }
        
        public function process_update()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            $this->load->model('Course_model');
            $this->Course_model->update_record();
            redirect ('admin/course_list','refresh');
        }
        
        public function update_grade_point()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            $this->load->model('Course_model');
            $this->Course_model->set_grade_point();
            redirect ('admin/course_list','refresh');
        }
        
        public function help_update_grade_point()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            $data['main_content']='admin/help_update_grade_point_view.php';
            $this->load->view('template', $data);
        }
        
        public function profile()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            $this->load->model('Upload_model');
            $data['image_info']=$this->Upload_model->get_propic_info();
            $data['main_content']='admin/profile_view.php';
            $this->load->view('template', $data);
        }

        public function excel()
        {
            $this->load->model('Course_model');
            $this->Course_model->excel_backup();
        }

        public function csv()
        {
            $this->load->model('Course_model');
            $this->Course_model->csv_backup();
        }
        
        public function search()
        {
            if(!$this->ion_auth->logged_in())
                redirect ('home/index','refresh');
            
            $this->form_validation->set_rules('key', 'Key', 'required');
            
            if($this->form_validation->run()==FALSE)
            {
                $data['main_content']='admin/search_form.php';
                $this->load->view('template', $data);
            }
            
            else
            {
                $this->load->model('Course_model');
                $data['result']=$this->Course_model->search();
                $data['main_content']='admin/search_result.php';
                $this->load->view('template', $data);
            }
        }
    }

?>