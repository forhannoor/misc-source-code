<?php echo js('assets/js/form-validator/jquery.form-validator.min.js') ?>
<div class="profile_info_form">
<?php echo validation_errors() ?>
<br/>
<?php echo form_open_multipart('user/add_profile') ?>
<?php echo form_label('Choose your display name', 'display_name') ?>
<br />
<?php echo form_input('display_name', '', 'data-validation = required data-validation-error-msg = \'Display name cannot be empty\'') ?>
<br />
<?php echo form_label('About Me', 'about') ?>
<br/>
<?php echo form_textarea('about', '', 'data-validation = required data-validation-error-msg = \'About me cannot be empty\'') ?>
<br/>
<?php echo form_label('Profile Privacy', 'privacy') ?>
<br/>
<?php $privacy_options=array(0 => 'Private', 1 => 'Public') ?>
<?php echo form_dropdown('privacy', $privacy_options) ?>
<br/>
<?php echo form_label('My current location', 'country') ?>
<br/>
<?php echo form_input('country', '', 'data-validation = required data-validation-error-msg = \'Country cannot be empty\'') ?>
<br/>
<?php echo form_label('My favorite destination is', 'destination') ?>
<br/>
<?php echo form_input('destination', '', 'data-validation = required data-validation-error-msg = \'Destination cannot be empty\'') ?>
<br/>
<?php echo form_label('Upload Avatar', 'userfile') ?>
<br/>
<?php $avatar_upload=array('name' => 'userfile') ?>
<?php if(isset($errors)): ?>
<?php print_r($errors) ?>
<?php endif ?>
<?php echo form_upload($avatar_upload) ?>
<br/>
<?php echo form_submit('', 'Submit') ?>
<?php echo form_reset('', 'Reset') ?>
<?php echo form_close()  ?>
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