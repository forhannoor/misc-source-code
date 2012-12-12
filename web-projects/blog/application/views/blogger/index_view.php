<h1>Blogger Page</h1>
<h3>Welcome 
<?php
    $user=$this->ion_auth->user()->row();
    echo $user->username;
?>
<h4><?php echo anchor('blogger/new_blog', 'New blog'); ?></h4>
<br/>
<?php
    if(count($blog_posts->result())==0)
        echo '<h2>No post found!</h2>';
        
    foreach($blog_posts->result() as $value)
    {
        echo '<b>Time: </b>';
        echo $value->time;
        echo '<br/>';
        echo '<b>Title: </b>';
        echo $value->title;
        echo '<br/>';
        echo '<b>Author: </b>';
        echo $value->author;
        echo '<br/>';
        echo '<b>Post: </b>';
        echo '<br/>';
        echo $value->description;
        echo '<br/>';
        echo anchor('comment/view_comments/'.$value->id, 'View Comments');
        echo '<br/>';
        echo '<br/>';
        echo '<br/>';
    }
?>
</h3>