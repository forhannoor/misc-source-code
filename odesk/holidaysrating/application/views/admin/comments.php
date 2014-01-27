<h3>Comments</h3>
<?php foreach($comments as $comment): ?>
<?php echo $comment->time ?>
<br />
<?php $username = $this->User_model->get_username($comment->cid) ?>
<?php echo 'By '.$username[0]->username ?>
<br />
<?php echo $comment->description ?>
<br />
<a href="<?php echo base_url() ?>index.php/admin/comment_delete/<?php echo $comment->id ?>" onclick="return confirm('You are about to delete a record. This cannot be undone. Are you sure?')"><i class="icon-remove">&nbsp;&nbsp;&nbsp;&nbsp;Delete</i></a>
<br />
<br />
<?php endforeach ?>
<?php echo anchor('admin/index', 'Back') ?>