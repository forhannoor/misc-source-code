<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['main_content']='home/index_view.php';
        $this->load->view('template', $data);
    }        
}
#************#
# End of file
#************#