<?php echo js('assets/js/form-validator/jquery.form-validator.min.js') ?>
<div class="banner-form">
<?php if(isset($errors)): ?>
<?php print_r($errors) ?>
<?php endif ?>   
<br /><br /> 
<?php echo form_open_multipart('user/add_banner') ?>
<?php echo form_upload('userfile', '', 'data-validation = \'required\' data-validation-error-msg = \'You must upload a valid file\'') ?>
<br /><br />
<?php echo form_submit('', 'Submit') ?>
<?php echo form_close() ?>
<br/>
<?php echo anchor('user/index', img(base_url().'assets/assets/back.png')) ?>
</div>
<script>
$.validate({
    validateOnBlur : false,
    errorMessagePosition : 'top'
});
</script>