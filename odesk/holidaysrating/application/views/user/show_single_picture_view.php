<div class="single_photo">
<?php echo img('./uploads/media/'.$picture) ?>
<br/>
<hr />
<div class="score"><p><?php echo round($rating, 1) ?></p></div>
<p class="pull_left">Current Rating</p>
<p class="pull_right"><?php echo anchor('user/rate/'.$picture, 'Rate Now') ?></p>
<p>Users voted: <?php echo $num_voter ?></p>
<hr />
<br/>
<div class="comments">
<?php foreach($comments->result() as $comment): ?>
<?php $av = $this->User_model->get_avatar($comment->cid) ?>
<?php foreach($av->result() as $avtr): ?>
<?php echo img('./uploads/'.$avtr->avatar) ?>
<?php endforeach ?>
<?php $commenter = $this->User_model->get_username($comment->cid) ?>
<?php foreach($commenter as $cmntr): ?>
<p><?php echo $cmntr->username ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php if ($comment->cid != $this->session->userdata('user_id')): ?>
<?php echo anchor('user/send_message/'.urlsafe_b64encode($comment->cid), img(base_url().'assets/images/pm-icon.gif')) ?>
<?php endif ?>
</p>
<?php endforeach ?>
<p><?php echo $comment->time ?></p>
<br />
<?php $str = $comment->description ?>
<?php $str = parse_smileys($str, base_url() . 'assets/smileys/') ?>
<blockquote><?php echo $str ?></blockquote>
<hr />
<?php endforeach ?>
</div>
<br/>
<div class="pagination"><?php echo $this->pagination->create_links() ?></div>
<br/>
</div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" /><?php echo anchor('user/make_comment/'.$picture, 'Leave a comment') ?>
</div>
<br/>
<br/>
<?php echo anchor('user/show_picture/all', 'Picture Gallery') ?>
<br/>
<br/>
<?php echo anchor('user/index', 'Back') ?>