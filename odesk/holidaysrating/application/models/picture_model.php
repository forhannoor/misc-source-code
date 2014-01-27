<?php

class Picture_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    /* insert uploaded image */
    public function save($uploader)
    {
        $picture_data = $this->upload->data();        
        $picture = R::dispense('pictures');
        $picture->uploader = $uploader;
        $picture->name = $picture_data['file_name'];
        R::store($picture);
    }
    
    public function find_by_uploader($uploader, $limit = 0)
    {
        if(!$limit)
            $pictures = R::find('pictures', ' uploader = :uploader', array(':uploader' => $uploader));
            
        else
            $pictures = R::find('pictures', ' uploader = :uploader ORDER BY created_at DESC LIMIT :limit', array(':uploader' => $uploader, ':limit' => $limit));
            
        return $pictures;
    }
    
    public function get_all()
    {
        return R::findAll('pictures');
    }
}