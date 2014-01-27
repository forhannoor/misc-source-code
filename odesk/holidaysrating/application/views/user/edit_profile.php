<?php echo js('assets/js/form-validator/jquery.form-validator.min.js') ?>
<div class="profile_info_form">
<?php echo validation_errors() ?>
<br/>
<?php echo form_open_multipart('user/edit_profile') ?>
<?php foreach($profile_info->result() as $value): ?>
<?php echo form_label('Display Name', 'display_name') ?>
<br />
<?php echo form_input('display_name', $value->display_name, 'data-validation = required data-validation-error-msg = \'Display name cannot be empty\'') ?>
<br />
<?php echo form_label('About Me', 'about') ?>
<br/>
<?php echo form_textarea('about', $value->about, 'data-validation = required data-validation-error-msg = \'About me cannot be empty\'') ?>
<br/>
<?php echo form_label('Profile Privacy', 'privacy') ?>
<br/>
<?php $privacy_options=array(0 => 'Private', 1 => 'Public') ?>
<?php echo form_dropdown('privacy', $privacy_options) ?>
<br/>
<?php echo form_label('Country I live in', 'country') ?>
<br/>
<?php echo form_input('country', $value->country, 'data-validation = required data-validation-error-msg = \'Country cannot be empty\'') ?>
<br/>
<?php echo form_label('My favorite destination is', 'destination') ?>
<br/>
<?php echo form_input('destination', $value->favorite_destination, 'data-validation = required data-validation-error-msg = \'Destination cannot be empty\'') ?>
<?php endforeach ?>
<br/>
<?php echo form_label('Avatar', 'userfile') ?>
<br/>
<?php $avatar_upload=array('name' => 'userfile') ?>
<?php if(isset($errors)): ?>
<?php print_r($errors) ?>
<?php endif ?>     
<?php echo form_upload($avatar_upload) ?>
<br/>
<?php echo form_submit('', 'Submit') ?>
<?php echo form_reset('', 'Reset') ?>
<?php echo form_close() ?>
<br/>
<br/>
<?php echo anchor('user/index', img(base_url().'assets/assets/back.png')) ?>
</div>
<script>
$.validate({
    validateOnBlur : false,
    errorMessagePosition : 'top'
});
</script>