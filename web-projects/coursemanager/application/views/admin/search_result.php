<h1>Search Result</h1>
<?php

    if($result->num_rows()==0)
        echo 'Sorry. Your search key did not return any result. Perhaps try with another key.<br/>';
    
    else
    {
        foreach($result->result() as $r)
        {
            echo $r->course_code;
            echo '<br/>';
            echo $r->title;
            echo '<br/>';
            echo $r->description;
            echo '<br/>';
            echo $r->grade;
            echo '<br/>';
            echo $r->grade_point;
            echo '<br/>';
        }
    }
    
    echo '<br/>';
    echo anchor('admin/search', 'Search Again');
    echo '<br/>';
    echo anchor('admin/index', 'Back');

?>