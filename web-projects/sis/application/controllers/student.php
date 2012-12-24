<?php
	class Student extends CI_Controller
	{ 
		public function index()
		{
			if(!$this->ion_auth->logged_in())
				redirect('home/index', 'refresh');
			
			$this->load->model('student_model');
			$personal_record_exists=$this->student_model->record_exists();
			$data['main_content']='student/index_view.php';
			$data['record']=$personal_record_exists;
			$this->load->view('template', $data);
		}
		 
		public function add_personal_info()
		{
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
			$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('father_name', 'Father\'s Name', 'required');
			$this->form_validation->set_rules('mother_name', 'Mother\'s Name', 'required');
			$this->form_validation->set_rules('permanent_address', 'Permanent Address', 'required');
			$this->form_validation->set_rules('present_address', 'Present Address', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');

			if($this->form_validation->run()==FALSE)
			{
				$data['main_content']='student/add_personal_info_form.php';
				$this->load->view('template', $data);
			}

			else
			{
				$this->load->model('student_model');
				$this->student_model->process_personal_info();
				redirect('student/index', 'refresh');
			}
		}

		public function view_personal_info()
		{
			$this->load->model('student_model');
			$query=$this->student_model->get_personal_details();
			$data['main_content']='student/view_personal_info.php';
			$data['query']=$query;
			$this->load->view('template', $data);						
		}     
	}

?>