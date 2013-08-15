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
    
    public function get_pictures()
    {
        $pictures = R::findAll('media');
        return $pictures;
    }
    
    public function delete_picture($id)
    {
        $picture = R::load('media', $id);
        R::trash($picture);       
    }
    
    public function get_videos()
    {
        $sql = 'SELECT * FROM videos GROUP BY region ORDER BY region';
        $rows = R::getAll($sql);
        $videos = R::convertToBeans('videos', $rows);
        return $videos;
    }
    
    public function delete_video($id)
    {
        $video = R::load('videos', $id);
        R::trash($video);       
    }
    
    public function get_users()
    {
        $sql = "SELECT u.id, u.username, u.email, u.first_name, u.last_name, p.avatar, p.country FROM users as u LEFT JOIN users_personal as p ON u.id = p.uid ";
        $rows = R::getAll($sql);
        $users = R::convertToBeans('users', $rows);
        return $users;
    }
    
    public function delete_user($id)
    {
        $user = R::load('users', $id);
        R::trash($user);       
    }
    
    public function get_ratings()
    {
        $sql = "SELECT id, name, AVG(rating) AS rating FROM ratings GROUP BY name ORDER BY rating DESC ";
        $rows = R::getAll($sql);
        $ratings = R::convertToBeans('ratings', $rows);
        return $ratings;
    }
}