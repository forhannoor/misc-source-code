<div class="hot">
<?php if ($blog->id && $blog->approved): ?>
<?php $avatar = $this->User_model->avatar($blog->author) ?>
<?php if (isset($avatar)): ?>
<div class="avatar-left"><?php echo img('./uploads/' . $avatar) ?></div>
<?php else: ?>
<div class="avatar-left"><?php echo img('assets/assets/avatar.jpg') ?></div>
<?php endif ?>
<?php echo $this->User_model->username($blog->author) ?>
<div class="story">
<?php echo $blog->body ?>
<br /><br />
<?php echo $blog->created_at ?>
</div>
<?php elseif (! $blog->id): ?>
<h2 class="alert">No such blog found!</h2>
<?php else: ?>
<h2 class="alert">The blog you requested has not been approved yet!</h2>
<?php endif ?>
</div>
<style>
.avatar-left{
    height: auto;
    float: left;
    clear: both;
    display: block;
    margin-bottom: 10px;
}

.story{
    float: left;
    clear: left;
}
</style>