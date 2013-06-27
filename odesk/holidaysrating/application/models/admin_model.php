<?php 

class Admin_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
    
    public function get_comments()
    {
        $comments = R::findAll('comments', ' ORDER BY time DESC ');
        return $comments;
    }
    
    public function delete_comment($id)
    {
        $comment = R::load('comments', $id);
        R::trash($comment);
    }
    
    public function get_banners()
    {
        $banners = R::findAll('banners', ' WHERE uploader <> 0 ');
        return $banners;
    }
    
    public function delete_banner($id)
    {
        $banner = R::load('banners', $id);
        R::trash($comment);
    }
}