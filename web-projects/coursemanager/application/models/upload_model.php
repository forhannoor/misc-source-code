<?php

    class Upload_model extends CI_Model
    {
        public function __construct() {
            parent::__construct();
        }
        
        public function update_propic($arg)
        {
            $data=array(
                'uploader_id' => $this->ion_auth->get_user()->id,
                'propic' => $arg['file_name']
            );
            
            $this->db->insert('uploads', $data);
        }
        
        public function get_propic_info()
        {
            $where_array=array(
                'uploader_id' =>  $this->ion_auth->get_user()->id
            );
            
            $this->db->select('propic');
            $this->db->where($where_array);
            $path_query = $this->db->get('uploads');
            
            if(count($path_query)==0)
                return 0;
            
            else 
                return $path_query;
        }
        
        public function delete_propic()
        {
            $where_array=array(
                'uploader_id' => $this->ion_auth->get_user()->id
            );
            
            $this->db->where($where_array);
            $this->db->delete('uploads');
        }
    }

?>