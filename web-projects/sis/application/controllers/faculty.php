<?php
class Faculty extends CI_Controller
{
    public function index()
    {
		if(!$this->ion_auth->logged_in())
			redirect('home/index', 'refresh');
			
        $this->load->view('faculty/faculty_view');  
    }  
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
