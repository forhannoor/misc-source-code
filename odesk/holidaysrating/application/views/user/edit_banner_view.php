<div class="banner-form">
<?php if(isset($errors)): ?>
<?php print_r($errors) ?>
<?php endif ?>    
<?php echo form_open_multipart('user/edit_banner') ?>
<?php echo form_label('Banner', 'userfile') ?>
<?php echo form_upload('userfile') ?>
<?php echo form_submit('', 'Submit') ?>
<?php echo form_close() ?>
<br/><br/>
<?php echo anchor('user/index', img(base_url().'assets/assets/back.png')) ?>
</div>