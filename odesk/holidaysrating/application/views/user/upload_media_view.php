<div class="profile_info_form">
<?php echo validation_errors() ?>

<?php echo form_open_multipart('user/upload_media') ?>

<?php echo form_hidden('category', 'image') ?>

<?php $media_upload=array('name' => 'userfile') ?>

<?php echo form_upload($media_upload) ?>

<?php if(isset($errors)): ?>
<?php print_r($errors) ?>
<?php endif ?>

<br />    

<?php echo form_submit('', 'Submit') ?>
<?php echo form_close() ?>

<?php echo anchor('topmenu/videodump', 'Upload Video') ?>
<br /><br />
<?php echo anchor('user/index', img(base_url().'assets/assets/back.png')) ?>
</div>