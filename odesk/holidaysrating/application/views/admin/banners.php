<h3>Banners</h3>

<div class="banners">
<?php foreach($banners as $banner): ?>
<?php $img = array('src' => './uploads/banners/'.$banner->name, 'class' => 'thumbnail') ?>
<a href="<?php echo base_url() ?>uploads/banners/<?php echo $banner->name ?>"><?php echo img($img) ?></a>
<br />
<?php echo $banner->time ?>

<?php $username = $this->User_model->get_username($banner->uploader) ?>
<?php echo ' by: '.$username[0]->username ?>
<br />
<a href="<?php echo base_url() ?>index.php/admin/banner_delete/<?php echo $banner->id ?>"><i class="icon-remove">&nbsp;&nbsp;&nbsp;&nbsp;Delete</i></a>
<br />
<br />
<?php endforeach ?>
</div>

<?php echo anchor('admin/index', 'Back') ?>