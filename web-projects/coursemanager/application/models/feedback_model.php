<?php

	class Feedback_model extends CI_Model
	{
		public function __construct()
		{
			 parent::__construct();
		}

		public function process_feedback()
		{
			$data=array(
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'feedback' => $this->input->post('feedback')
				);

			$this->db->insert('feedback', $data);
		}
	}

?>