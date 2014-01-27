<?php echo js('assets/js/form-validator/jquery.form-validator.min.js') ?>
<div>
<?php echo form_open('auth/my_login') ?>
<?php echo form_label('Email', 'identity') ?>
<?php echo form_input('identity', '', 'data-validation = \'required\' data-validation-error-msg = \'*Fill out fields\'') ?>
<br />
<?php echo form_label('Password', 'password') ?>
<?php echo form_password('password', '', 'data-validation = \'required\' data-validation-error-msg = \'*Fill out fields\'') ?>
<p style = "color: black; margin-top: 8px;">Remember Me
<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"') ?>
</p>
<?php if(isset($error)): ?>
<?php echo $error ?>
<?php endif ?>        
<?php echo form_submit('', 'Login') ?>
<?php echo form_close() ?>
<div style="margin: 10px auto auto;">
<?php echo anchor('auth/fb_login', img('assets/images/FBlogin.png'), array('class' => 'anchor-opacity')) ?>
</div>
<br />
</div>
<script>
$.validate({
    validateOnBlur : false,
    errorMessagePosition : 'element'
});
</script>