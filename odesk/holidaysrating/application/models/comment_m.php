<?php

class Comment_m extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'comments';
        $this->_fields = array(0 => 'id', 1 => 'pid', 2 => 'time', 3 => 'cid', 4 => 'description');
    }
}