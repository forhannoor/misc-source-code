<?php 

class Blogger_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function get_all_blogs()
    {
        $query=$this->db->get('posts');
        return $query;
    }
    
    public function set_new_blog()
    {
        $data=array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'description' => $this->input->post('description')
        );    
        $this->db->insert('posts', $data);
    }
}
#************#
# End of file
#************#