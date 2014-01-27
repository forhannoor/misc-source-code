<h3>Banners</h3>

<div class="banners">
<?php foreach($banners as $banner): ?>
<?php $img = array('src' => './uploads/banners/'.$banner->name, 'class' => 'thumbnail') ?>
<a href="<?php echo base_url() ?>uploads/banners/<?php echo $banner->name ?>" class="fancybox"><?php echo img($img) ?></a>
<br />
<?php echo $banner->time ?>

<?php $username = $this->User_model->get_username($banner->uploader) ?>
<?php echo ' by: '.$username[0]->username ?>
<br />
<?php echo btn_delete('admin/banner_delete/' . $banner->id) ?>
<br />
<br />
<?php endforeach ?>
</div>

<?php echo anchor('admin/index', 'Back') ?>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>