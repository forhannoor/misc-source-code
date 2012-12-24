<?php

	class Admin extends CI_Controller
	{
		public function index()
		{
			if(!$this->ion_auth->is_admin())
				redirect('home/index', 'refresh');

			$data['main_content']='admin/index_view.php';
			$this->load->view('template', $data);
		}

		public function student_personal_details()
		{
			if(!$this->ion_auth->is_admin())
				redirect('home/index', 'refresh');

			$this->load->model('student_model');
			$query=$this->student_model->get_all_personal_details();
			$data['query_result']=$query;
			$data['main_content']='admin/student_personal_details_view.php';
			$this->load->view('template', $data);			
		}

		public function student_academic_details()
		{
			if(!$this->ion_auth->is_admin())
				redirect('home/index', 'refresh');

			$this->load->model('student_model');
			$query=$this->student_model->get_all_academic_details();
			$data['query_result']=$query;
			$data['main_content']='admin/student_academic_details_view.php';
			$this->load->view('template', $data);			
		}

		public function add_academic_details()
		{
			$this->form_validation->set_rules('uni_id', 'ID', 'required');
			$this->form_validation->set_rules('department', 'Department', 'required');
			$this->form_validation->set_rules('credits_completed', 'Credits completed', 'required');
			$this->form_validation->set_rules('cgpa', 'CGPA', 'required');

			if($this->form_validation->run()==FALSE)
			{
				$data['main_content']='admin/add_academic_details_form.php';
				$this->load->view('template', $data);
			}

			else
			{
				$this->load->model('student_model');
				$this->student_model->process_academic_info();
				redirect('admin/student_academic_details', 'refresh');
			}
		}
	}

?>