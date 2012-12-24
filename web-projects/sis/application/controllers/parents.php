<?php

	class Parents extends CI_Controller
	{  
		public function index()
		{
			if(!$this->ion_auth->logged_in())
				redirect('home/index', 'refresh');
				
			$this->load->view('parents/parents_view');
		}
	}

?>