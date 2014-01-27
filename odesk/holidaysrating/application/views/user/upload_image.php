<?php echo js('assets/js/form-validator/jquery.form-validator.min.js') ?>
<div class="profile_info_form">
<?php echo form_open_multipart('user/upload_image') ?>
<?php if(isset($allowed_types)): ?>
<p>Allowed formats: <?php print_r($allowed_types) ?></p>
<?php endif ?>
<?php echo form_upload('userfile', '', 'data-validation = \'required\' data-validation-error-msg = \'You must upload a valid file\'') ?>
<br />    
<?php echo form_submit('', 'Submit') ?>
<?php echo form_close() ?>
<?php echo anchor('topmenu/dump_video', img('assets/assets/upload_video.png')) ?>
<br /><br />
<?php echo anchor('user/index', img('assets/assets/back.png')) ?>
</div>
<script>
$.validate({
    validateOnBlur : false,
    errorMessagePosition : 'top'
});
</script>