<?php

class Rating_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function save($rater, $name)
    {
        $r = R::dispense('ratings');
        $r->name = $name;
        $r->rating = $this->input->post('star1');
        $r->rater = $rater;
        R::store($r);
    }
    
    public function get_rating($obj)
    {
        $sql = '
            SELECT AVG(rating) as avg
            FROM ratings
            WHERE name LIKE "' . $obj . '"';
        
        $rating = R::getRow($sql);
        return $rating['avg'];
    }
    
    public function num_vote($obj)
    {
        $sql = '
            SELECT COUNT(rating) as num
            FROM ratings
            WHERE name LIKE "' . $obj . '"';
        
        $num = R::getRow($sql);
        return $num['num'];
    }
}