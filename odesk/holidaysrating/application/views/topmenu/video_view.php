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
<h2>Comments</h2>
<br />
<?php foreach ($comments as $comment): ?>
<?php $commentator = $this->User_model->get_profile_information($comment->cid) ?>
<?php if (isset($commentator->avatar)): ?>
<p class="avatar"><?php echo img('./uploads/'.$commentator->avatar) ?></p>
<?php else: ?>
<p class="avatar"><?php echo img('assets/assets/avatar.jpg') ?></p>
<?php endif ?>
<p class="comment"><?php echo $comment->description ?></p>
<?php if (isset($commentator->display_name)): ?>
<p><?php echo $commentator->display_name ?></p>
<?php endif ?>
<p><?php echo $comment->time ?></p>
<?php if ($comment->cid != $this->session->userdata('user_id')): ?>
<p><?php echo anchor('user/send_message/' . urlsafe_b64encode($comment->cid), img('assets/images/pm-icon.gif')) ?></p>
<?php endif ?>
<br />
<?php endforeach ?>

<div class = "link-without-orientation">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment"/>
<?php echo anchor('user/make_comment/'.$temp[0], 'Leave a Comment') ?>
<br />
<img src="<?php echo base_url() ?>assets/assets/from-region.png" alt="holidaysplayer" style="margin-top:4px">
<?php echo anchor('topmenu/videodump/'.$region, 'Videos from '.strtoupper($region)) ?>
<br />
<img src="<?php echo base_url() ?>assets/assets/browse.png" alt="browse" style="margin-top:4px">
<?php echo anchor('topmenu/videodump', 'Browse Videos by Region') ?>
</div>