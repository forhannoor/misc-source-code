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
<?php echo anchor('user/send_message/'.$comment->cid, img(base_url().'assets/images/pm-icon.gif')) ?>
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