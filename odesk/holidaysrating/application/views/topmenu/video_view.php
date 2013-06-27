<style type="text/css">
	/*body { background-color: #fdfdfd; padding: 0 20px; color:#000; font: 13px/18px monospace; width: 800px;}
	a { color: #360; }
	h3 { padding-top: 20px; } */
</style>
<?php foreach($video->result() as $v): ?>
<?php $file_name = $v->name ?>
<?php $temp = explode('.', $file_name) ?>
<?php $extension = $temp[1] ?>
<?php $region = $v->region ?>
<?php endforeach ?>
<video id="player_a" class="projekktor" poster="media/intro.png" title="this is Projekktor" width="auto" height="385" controls>
    <source src="../../../uploads/media/videos/<?php echo $file_name ?>" type="video/<?php echo $extension ?>" />
</video>

<script type="text/javascript">
$(document).ready(function() {
    projekktor(
    '#player_a', // destination-container-selector-fuzz a la jQuery
    {}, // an empty Projekktor-ccofig-object
    function(player) { // "onready" callback -
        $('#projekktorver').html( player.getPlayerVer() );
    }
    );
});
</script>
<br />
<h2>Comments</h2>
<br />
<br />
<?php foreach($comments->result() as $comment): ?>
<?php $av = $this->User_model->get_avatar($comment->cid) ?>
<?php foreach($av->result() as $avtr): ?>
<?php echo img('./uploads/'.$avtr->avatar) ?>
<?php endforeach ?>
<?php $commenter = $this->User_model->get_username($comment->cid) ?>
<?php foreach($commenter as $cmntr): ?>
<p><?php echo $cmntr->username ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo anchor('user/send_message/'.$comment->cid, 'PM') ?>
</p>
<?php endforeach ?>
<p><?php echo $comment->time ?></p>
<br />
<br />
<p><?php echo $comment->description ?></p>
<hr />
<br />
<br />
<?php endforeach ?>
<?php echo anchor('user/make_comment/'.$temp[0], 'Leave a Comment') ?>
<br />
<?php echo anchor('topmenu/videodump/'.$region, 'Videos from '.strtoupper($region)) ?>
<br />
<?php echo anchor('topmenu/videodump', 'Browse Videos by Region') ?>