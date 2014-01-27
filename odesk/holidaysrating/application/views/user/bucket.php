<?php if(count($bucket_list->result()) == 0): ?>
<h3>Your bucket list is empty!</h3>
<?php endif ?>
<ul>
<?php foreach($bucket_list->result() as $item): ?>
<li><?php echo anchor($item->url, $item->url) ?></li>
<?php endforeach ?>
</ul>