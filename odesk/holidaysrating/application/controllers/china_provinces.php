<?php 

class china_provinces extends CI_Controller
{
    public function index()
    {
    }    
    
    public function anhui()
    {
      	$data['main']='china_provinces/anhui.php';
      	$data['heading']='Anhui';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/anhui', $data);
    }
    public function fujian()
    {
      	$data['main']='china_provinces/fujian.php';
      	$data['heading']='Fujian';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/fujian', $data);
    }
    public function gansu()
    {
      	$data['main']='china_provinces/gansu.php';
      	$data['heading']='Gansu';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
      	   $data['profile_info']=$this->User_model->get_profile_info($this->ion_auth->user()->row()->id);
      	
      	$this->load->view('china_provinces/gansu', $data);
    }
    public function guangdong()
    {
      	$data['main']='china_provinces/guangdong.php';
      	$data['heading']='Guangdong';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/guangdong', $data);
    }
    public function guangxi()
    {
      	$data['main']='china_provinces/guangxi.php';
      	$data['heading']='Guangxi';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/guangxi', $data);
    }
    public function guizhou()
    {
      	$data['main']='china_provinces/guizhou.php';
      	$data['heading']='Guizhou';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/guizhou', $data);
    }
    public function hainan()
    {
      	$data['main']='china_provinces/hainan.php';
      	$data['heading']='Hainan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/hainan', $data);
    }
    public function hebei()
    {
      	$data['main']='china_provinces/hebei.php';
      	$data['heading']='Hebei';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/hebei', $data);
    }
    public function heilongjiang()
    {
      	$data['main']='china_provinces/heilongjiang.php';
      	$data['heading']='Heilongjiang';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/heilongjiang', $data);
    }
    public function henan()
    {
      	$data['main']='china_provinces/henan.php';
      	$data['heading']='Henan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/henan', $data);
    }
    public function hongkong()
    {
      	$data['main']='china_provinces/hongkong.php';
      	$data['heading']='Hongkong';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/hongkong', $data);
    }
    public function hubei()
    {
      	$data['main']='china_provinces/hubei.php';
      	$data['heading']='Hubei';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/hubei', $data);
    }
    public function hunan()
    {
      	$data['main']='china_provinces/hunan.php';
      	$data['heading']='Hunan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/hunan', $data);
    }
    public function jiangsu()
    {
      	$data['main']='china_provinces/jiangsu.php';
      	$data['heading']='Jiangsu';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/jiangsu', $data);
    }
    public function jiangxi()
    {
      	$data['main']='china_provinces/jiangxi.php';
      	$data['heading']='Jiangxi';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/jiangxi', $data);
    }
    public function jilin()
    {
      	$data['main']='china_provinces/jilin.php';
      	$data['heading']='Jilin';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/jilin', $data);
    }
    public function liaoning()
    {
      	$data['main']='china_provinces/liaoning.php';
      	$data['heading']='Liaoning';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/liaoning', $data);
    }
    public function macau()
    {
      	$data['main']='china_provinces/macau.php';
      	$data['heading']='Macau';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/macau', $data);
    }
    public function neimongol()
    {
      	$data['main']='china_provinces/neimongol.php';
      	$data['heading']='Neimongol';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/neimongol', $data);
    }
    public function ningxia()
    {
      	$data['main']='china_provinces/ningxia.php';
      	$data['heading']='Ningxia';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/ningxia', $data);
    }
    public function qinghai()
    {
      	$data['main']='china_provinces/qinghai.php';
      	$data['heading']='Qinghai';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/qinghai', $data);
    }
    public function shaanxi()
    {
      	$data['main']='china_provinces/shaanxi.php';
      	$data['heading']='Shaanxi';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/shaanxi', $data);
    }
    public function shandong()
    {
      	$data['main']='china_provinces/shandong.php';
      	$data['heading']='Shandong';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/shandong', $data);
    }
    public function shanxi()
    {
      	$data['main']='china_provinces/shanxi.php';
      	$data['heading']='Shanxi';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/shanxi', $data);
    }
    public function sichuan()
    {
      	$data['main']='china_provinces/sichuan.php';
      	$data['heading']='Sichuan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/sichuan', $data);
    }
    public function tibet()
    {
      	$data['main']='china_provinces/tibet.php';
      	$data['heading']='Tibet';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/tibet', $data);
    }
    public function xinjiang()
    {
      	$data['main']='china_provinces/xinjiang.php';
      	$data['heading']='Xinjiang';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/xinjiang', $data);
    }
    public function yunnan()
    {
      	$data['main']='china_provinces/yunnan.php';
      	$data['heading']='Yunnan';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/yunnan', $data);
    }
    public function zhejiang()
    {
      	$data['main']='china_provinces/zhejiang.php';
      	$data['heading']='Zhejiang';
        $data['left_sidebar'] = 'sidebar/left_sidebar';              	
        
      	if($this->ion_auth->logged_in())
            $data['profile_info']=$this->User_model->get_profile_info($this->session->userdata('user_id'));
      	
      	$this->load->view('china_provinces/zhejiang', $data);
    }






}