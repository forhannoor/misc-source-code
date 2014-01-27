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
        $pictures = R::findAll('pictures');
        return $pictures;
    }
    
    public function delete_picture($id)
    {
        $picture = R::load('pictures', $id);
        R::trash($picture);
    }
    
    public function get_videos()
    {
        $sql = '
            SELECT v.id, v.name, v.name, v.orig_name, v.title, v.uploader, u.username 
            FROM videos as v
            JOIN users as u
            ON v.uploader = u.id
        ';
        
        $rows = R::getAll($sql);
        return $rows;
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
    
    public function get_num_voters($name)
    {
        $num_voters = R::count('ratings', 'name = ?', array($name));
        return $num_voters;
    }
    
    public function send_pm()
    {
        R::setStrictTyping(false);
        $from = $this->input->post('from');
        $subject = $this->input->post('subject');
        $content = $this->input->post('message');
        
        $users = R::findAll('users', " WHERE id <> $from");
        
        foreach($users as $user)
        {
            $personal_message = R::dispense('personal_messages');
            $personal_message->from = $from;
            $personal_message->to = $user->id;
            $personal_message->content = $content;
            $personal_message->subject = $subject;
            R::store($personal_message);
        }
    }
    
    public function get_notes($id = 0)
    {
        if($id == 0)
            $notes = R::findAll('notes', 'ORDER BY created_at');
            
        else
            $notes = R::findOne('notes', ' id = :id', array(':id' => $id)); 
            
        return $notes;       
    }
    
    public function create_note($writer)
    {
        $note = R::dispense('notes');
        $note->author = $writer;
        $note->title = $this->input->post('title');
        $note->description = $this->input->post('description');
        R::store($note);
    }
    
    public function updatestatus_note($id)
    {
        $note = R::findOne('notes', ' id = :id', array(':id' => $id));
        
        if($note->status == 1)
        {
            $note->status = 0;
            R::store($note);
        }
    }
    
    public function delete_note($id)
    {
        $note = R::load('notes', $id);
        R::trash($note);       
    }
    
    public function update_note($id)
    {
        $note = R::load('notes', $id);
        $note->title = $this->input->post('title');
        $note->description = $this->input->post('description');
        $note->status = $this->input->post('status');
        R::store($note);       
    }
}