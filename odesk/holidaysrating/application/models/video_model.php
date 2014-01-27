<?php 

class Video_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
        $this->_table = 'videos';
	}
    
    public function get($limit = 0, $offset = 0, $ascending = 1)
    {
        if(! $limit && ! $offset && $ascending) // get all videos in ascending order
            $videos = R::findAll('videos');
            
        else if(! $ascending && ! $limit)   // get all videos in descending order
            $videos = R::findAll('video', ' ORDER BY uploaded_at DESC');
            
        else if($ascending && $limit)   // get videos with limit in ascending order
            $videos = R::findAll('videos', ' LIMIT :limit OFFSET :offset', array(':limit' => $limit, ':offset' => $offset));
            
        else if(! $ascending && $limit) // get videos with limit in descending order
            $videos = R::findAll('videos', ' ORDER BY uploaded_at DESC LIMIT :limit OFFSET :offset', array(':limit' => $limit, ':offset' => $offset));        
            
        return $videos;
    }
    
    public function get_videos($region)
    {
        $this->db->where('region', $region);
        return $this->db->get('videos');
    }
    
    /* upload and convert video */
    public function upload_video()
    {
        $uploaded_data=$this->upload->data();
        
        $data = array(
            'name' => $uploaded_data['raw_name'] . '.mp4',
            'orig_name' => $uploaded_data['orig_name'],
            'title' => $this->input->post('title'),
            'region' => $this->input->post('region'),
            'uploader' => $this->input->post('uploader'),
        );
        
        $this->db->insert('videos', $data);
        
        /* convert video to flv to ensure playback */
        $ffmpeg_path = FCPATH . 'ffmpeg/ffmpeg';
        $file = $uploaded_data['file_path'] . $uploaded_data['file_name'];
        $output = $uploaded_data['file_path'] . $uploaded_data['raw_name'] . '.mp4';
        //exec("$ffmpeg_path -i $file -f flv $output");
        exec("$ffmpeg_path -i $file -f mp4 $output", $o, $return);
        
        if(!$return){
            echo "Conversion success";
        }
        
        else{
            echo "Error occured!";
        }
    }
    
    public function get_comments($video_name)
    {
        $this->db->where('pid', $video_name);
        return $this->db->get('comments');
    }
    
    public function find_by_uploader($id, $limit = 0)
    {
        if($limit == 0)
            $videos = R::find('videos', ' uploader = ? ', array($id));
            
        else
            $videos = R::find('videos', ' uploader = :uploader ORDER BY uploaded_at DESC LIMIT :limit ', array(':uploader' => $id, ':limit' => $limit));
            
        return $videos;
    }
}