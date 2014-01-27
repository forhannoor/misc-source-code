<?php

class Session_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function users_online()
    {
        $sql = '
            SELECT COUNT(session_id)
            FROM ci_sessions
        ';
        
        $num_rows = R::exec($sql);
        return $num_rows;
    }
}