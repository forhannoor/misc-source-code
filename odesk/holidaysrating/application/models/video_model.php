<?php 

class Video_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
    
    public function get_video($name)
    {
        $this->db->like('name', $name);
        return $this->db->get('videos');
    }
    
    public function get_videos($region)
    {
        $this->db->where('region', $region);
        return $this->db->get('videos');
    }
    
    public function get_videos_latest()
    {
        $sql = "SELECT * FROM videos ORDER BY uploaded_at DESC LIMIT 5";
        $rows = R::getAll($sql);
        $videos = R::convertToBeans('videos', $rows);
        return $videos;
    }
    
    public function upload_video()
    {
        $uploaded_data=$this->upload->data();
        
        $data = array(
            'name' => $uploaded_data['file_name'],
            'orig_name' => $uploaded_data['orig_name'],
            'title' => $this->input->post('title'),
            'region' => $this->input->post('region'),
            'uploader' => $this->input->post('uploader')
        );
        
        $this->db->insert('videos', $data);
    }
    
    public function get_comments($video_name)
    {
        $this->db->where('pid', $video_name);
        return $this->db->get('comments');
    }
    
    public function get_videos_by_uploader($id)
    {
        $videos = R::find('videos', ' uploader = ? ', array($id));
        return $videos;
    }
}