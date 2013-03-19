<?php 

class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
    
    /* get profile information */
    public function get_profile_info($user_id)
    {
        $this->db->where('uid', $user_id);
        return $this->db->get('users_personal');
    }
    
    /* add profile information */
    public function add_profile_info($user_id)
    {
        $udata=$this->upload->data();
        $data=array(
                    'uid' => $user_id,
                    'avatar' =>$udata['file_name'] ,
                    'country' => $this->input->post('country'),
                    'favorite_destination' => $this->input->post('destination'),
                    'about' => $this->input->post('about'),
                    'privacy' => $this->input->post('privacy')
                );
                
        $this->db->insert('users_personal', $data);
    }
    
    /* update profile information */
    public function update_profile_info($user_id)
    {
        
    }
    
    /* upload picture/video */
    public function upload_media($user_id)
    {
        $udata=$this->upload->data();
        $data=array(
                    'uploader' => $user_id,
                    'category' => $this->input->post('category'),
                    'name' => $udata['file_name']
                ); 
               
        $this->db->insert('media', $data);             
    }
    
    /* retrieve media uploaded by user */   
    public function get_pictures($user_id)
    {
        $condition=array(
            'uploader' => $user_id,
            'category' => 'image'
        );
        
        $this->db->where($condition);
        return $this->db->get('media');       
    }
    
    public function get_videos($user_id)
    {
        $condition=array(
            'uploader' => $user_id,
            'category' => 'video'
        );
        
        $this->db->where($condition);
        return $this->db->get('media');       
    }
    
    public function add_banner($user_id)
    {
        $udata=$this->upload->data();
        
        $data=array(
            'uploader' => $user_id,
            'name' => $udata['file_name']
        );       
        
        $this->db->insert('banners', $data);
    }
    
    public function get_banner($user_id)
    {
        $this->db->where('uploader', $user_id);
        $query=$this->db->get('banners');
        
        /* if no banner is uploaded, use the default one */
        if($query->num_rows()==0)
        {
            $this->db->where('uploader', 0);
            return $this->db->get('banners');
        }
        
        return $query;
    }
}