<div class="single_photo">
<?php echo img('./uploads/media/'.$picture) ?>
<br/>
<hr />
<div class="score"><p><?php echo $rating ?></p></div>
<p class="pull_left">Current Rating</p>
<p class="pull_right"><?php echo anchor('user/rate/'.$picture, 'Rate Now') ?></p>
<hr />
<br/>
<div class="comments">
<?php $this->load->model('User_model') ?>
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
</div>
<br/>
<div class="pagination"><?php echo $this->pagination->create_links() ?></div>
<br/>
</div>
<?php echo anchor('user/make_comment/'.$picture, 'Leave a Comment') ?>
<br/>
<br/>
<?php echo anchor('user/show_picture/all', 'Picture Gallery') ?>
<br/>
<br/>
<?php echo anchor('user/index', 'Back') ?>