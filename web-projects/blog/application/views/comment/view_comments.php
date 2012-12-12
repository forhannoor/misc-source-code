<h1>Comments</h1>
<?php
    
    if(count($comments->result()==0))
        echo '<h3>No comments yet!</h3>';
        
    foreach($comments->result() as $value)
    {
        echo $value->time;
        echo '<br/>';
        echo $value->name;
        echo '<br/>';
        echo $value->comment;
        echo '<br/>';
    }
    
    echo anchor('comment/make_comment/'.$this->uri->segment(3), 'Make Comment');
    
?>