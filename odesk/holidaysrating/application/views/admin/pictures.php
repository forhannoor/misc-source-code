<h3>Pictures</h3>

<ul class="thumbnails">
    <?php foreach($pictures as $picture): ?>
    <?php $image = array('src' => './uploads/media/'.$picture->name, 'class' => 'thumbnail') ?>
    <li>
        <a class="fancybox" href="<?php echo base_url() ?>uploads/media/<?php echo $picture->name ?>"><?php echo img($image) ?></a>
        <a href="<?php echo base_url() ?>index.php/admin/picture_delete/<?php echo $picture->id ?>" onclick="return confirm('You are about to delete a record. This cannot be undone. Are you sure?')"><i class="icon-remove"></i> Delete</a>
    </li>
    <?php endforeach ?>
</ul>
<?php echo anchor('admin/index', 'Back') ?>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>