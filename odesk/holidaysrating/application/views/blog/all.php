<?php foreach ($blogs as $blog): ?>
<h4><?php echo anchor('blog/read/' . $blog->id, $blog->title) ?></h4>
<?php endforeach ?>
<br />
<?php echo anchor('blog/blog_index', 'Back') ?>
<div class="pagination"><?php echo $this->pagination->create_links() ?></div>