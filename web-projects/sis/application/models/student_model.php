<?php
	
	class Student_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function process_personal_info()
		{
			$data=array(
                'id' => $this->ion_auth->user()->row()->uid,
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'father_name' => $this->input->post('father_name'),
                'mother_name' => $this->input->post('mother_name'),
                'present_address' => $this->input->post('present_address'),
                'permanent_address' => $this->input->post('permanent_address'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone')
            );

            $this->db->insert('student_personal_info', $data);
		}

		public function get_all_personal_details()
		{
			$query=$this->db->get('student_personal_info');
			return $query;
		}

		public function get_all_academic_details()
		{
			$query=$this->db->get('student_academic_info');
			return $query;
		}

		public function record_exists()
		{
			$i=$this->ion_auth->user()->row()->uid;
			$this->db->where('id', $i);
			$query=$this->db->get('student_personal_info');

			if(count($query->result())==0)
				return FALSE;

			else
				return TRUE;
		}

		public function get_personal_details()
		{
			$this->db->where('id', $this->ion_auth->user()->row()->uid);
			$query=$this->db->get('student_personal_info');
			return $query;
		}

		public function process_academic_info()
		{
			$data=array(
                'uni_id' => $this->input->post('uni_id'),
                'department' => $this->input->post('department'),
                'credits_completed' => $this->input->post('credits_completed'),
                'cgpa' => $this->input->post('cgpa')
            );

            $this->db->insert('student_academic_info', $data);
		}
	}

?>