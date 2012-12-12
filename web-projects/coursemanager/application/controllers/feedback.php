<?php

	class Feedback extends CI_Controller
	{
		public function index()
		{
			$data['main_content']='feedback/feedback_form.php';
			$this->load->view('template', $data);
		}

		public function give_feedback()
		{
			$this->form_validation->set_rules('name', 'Name', 'optional');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('feedback', 'Feedback', 'required|min_length[6]');

			if($this->form_validation->run()==FALSE)
				$this->index();

			else
			{
				$this->load->model('Feedback_model');
				$this->Feedback_model->process_feedback();
				$data['main_content']='feedback/feedback_success.php';				
				$this->load->view('template', $data);
			}
		}
	}

?>