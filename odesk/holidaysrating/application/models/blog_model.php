<?php

class Blog_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function create($author)
    {
        $blog = R::dispense('blogs');
        $blog->author = $author;
        $blog->title = $this->input->post('title');
        $blog->body = $this->input->post('body');
        R::store($blog);
    }
    
    public function update($id)
    {
        $blog = R::load('blogs', $id);
        $blog->title = $this->input->post('title');
        $blog->body = $this->input->post('body');
        R::store($blog);
    }
    
    public function get_all($limit = 0, $offset = 0)
    {
        if(! $limit && ! $offset)
        {
            $blogs = R::findAll('blogs', ' approved = :approved', array(':approved' => 1));
        }
        
        else
        {
            $blogs = R::find('blogs', ' approved = :approved LIMIT :limit OFFSET :offset', array(':approved' => 1, ':limit' => $limit, ':offset' => $offset));
        }
        
        return $blogs;
    }
    
    public function get_by_status($status = 0)
    {
        $blogs = R::find('blogs', ' approved = :approved', array(':approved' => $status));
        return $blogs;
    }
    
    public function delete($id)
    {
        $blog = R::load('blogs', $id);
        R::trash($blog);
    }
    
    public function approve($id)
    {
        $blog = R::load('blogs', $id);
        $blog->approved = 1;
        R::store($blog);
    }
    
    public function get($id)
    {
        $blog = R::load('blogs', $id);
        return $blog;
    }
    
    public function get_recent($limit = 1)
    {
        $blogs = R::findAll('blogs', ' where approved = 1 ORDER BY created_at DESC LIMIT :limit', array(':limit' => $limit));
        return $blogs;
    }
}