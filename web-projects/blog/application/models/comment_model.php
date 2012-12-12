<?php

    class Comment_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        
        public function get_comments()
        {
            $id=$this->uri->segment(3);    
            $this->db->where('id', $id);
            $query=$this->db->get('comments');
            return $query;
        }
        
        public function set_comment()
        {
            $data=array(
                'name' => $this->input->post('name'),
                'comment' => $this->input->post('comment')
            );
            
            $this->db->insert('comments', $data);
        }
    }
#************#
# End of file
#************#