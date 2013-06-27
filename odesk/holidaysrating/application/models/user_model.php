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
        $udata=$this->upload->data();
        $data=array(
                    'avatar' =>$udata['file_name'] ,
                    'country' => $this->input->post('country'),
                    'favorite_destination' => $this->input->post('destination'),
                    'about' => $this->input->post('about'),
                    'privacy' => $this->input->post('privacy')
                );

        $this->db->where('uid', $user_id);                
        $this->db->update('users_personal', $data);
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
    
    public function add_banner($user_id)
    {
        $udata=$this->upload->data();
        
        $data=array(
            'uploader' => $user_id,
            'name' => $udata['file_name']
        );       
        
        $this->db->insert('banners', $data);
    }
    
    public function edit_banner($user_id)
    {
        $udata=$this->upload->data();
        
        $data=array(
            'name' => $udata['file_name']
        );       
        
        $this->db->where('uploader', $user_id);
        $this->db->update('banners', $data);
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
    
    public function make_comment($user_id)
    {
        $data=array(
            'pid' => $this->input->post('pid'),
            'cid' => $user_id,
            'description' => $this->input->post('description')
        );
        
        $this->db->insert('comments', $data);
    }
    
    /* returns comments for a media file */
    public function get_comments($pid)
    {
        $this->db->where('pid', $pid);
        return $this->db->get('comments'); 
    }
    
    /* returns username of a user */
    public function get_username($user_id)
    {
        $this->db->select('username');
        $this->db->where('id', $user_id);
        return $this->db->get('users')->result();       
    }
    
    public function set_rating($user_id, $pid)
    {
        $data=array(
            'name' => $pid,
            'rating' => $this->input->post('rating'),
            'rater' => $user_id
        );
        
        $this->db->insert('ratings', $data);
    }
    
    /* returns rating of an object */
    public function get_rating($pid)
    {
        $total = 0;
        $this->db->select('rating');
        $this->db->where('name', $pid);
        $x=$this->db->get('ratings');
        
        foreach($x->result() as $value)
            $total += $value->rating;
        
        if(count($x->result()) != 0)
            return $total/count($x->result());
            
        return '..';
    }
    
    /* gets avatar of specific user */
    public function get_avatar($user_id)
    {
        $this->db->select('avatar');
        $this->db->where('uid', $user_id);
        return $this->db->get('users_personal');       
    }
    
    /* sends message to a specific user */
    public function send_message()
    {
        $data = array(
            'from' => $this->input->post('from'),
            'to' => $this->input->post('to'),
            'subject' => $this->input->post('subject'),
            'content' => $this->input->post('content')
        );       
        
        $this->db->insert('personal_messages', $data);
    }
    
    /* gets inbox messages */
    public function get_inbox($user_id)
    {
        $this->db->where('to', $user_id);
        return $this->db->get('personal_messages');
    }
    
    /* gets sent messages */
    public function get_sent($user_id)
    {
        $this->db->where('from', $user_id);
        return $this->db->get('personal_messages');
    }
    
    /* counts number of unread messages */
    public function count_new($user_id)
    {
        $this->db->where('to', $user_id);
        $this->db->where('read_status', 1);
        $query = $this->db->get('personal_messages');
        return count($query->result());
    }
    
    /* gets a message and marks it as being read */
    public function get_message($message_id)
    {
        $data = array(
            'read_status' => 0
        );
        
        $this->db->where('id', $message_id);
        $this->db->update('personal_messages', $data);
        
        $this->db->where('id', $message_id);
        return $this->db->get('personal_messages');       
    }
}