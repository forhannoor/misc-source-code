<h3><?php echo $blog->title ?></h3>
<p><?php echo $blog->body ?></p>
<?php if(! $blog->approved): ?>
<?php echo anchor('admin/blog_approve/' . $blog->id, '<i class = "icon-thumbs-up"></i>') ?>
<?php endif ?>
<?php echo hspace(3) ?>
<a href="<?php echo site_url('admin/blog_edit/' . $blog->id) ?>"><i class="icon-edit"></i></a>
<?php echo hspace(3) ?>
<a href="<?php echo site_url('admin/blog_delete/' . $blog->id) ?>" onclick="return confirm('You are about to delete a record. This cannot be undone. Are you sure?')"><i class="icon-trash"></i></a>
<br /><br />
<?php echo anchor('admin/blogs', 'Back') ?>