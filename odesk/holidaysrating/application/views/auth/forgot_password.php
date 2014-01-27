<p>Please enter your email address so we can send you an email to reset your password.</p>
<div id="auth_form">
<?php echo validation_errors() ?>
<?php echo form_open('auth/forgot_password') ?>
<?php echo form_label('Email', 'email') ?>
<?php echo form_input('email') ?>
<?php echo form_submit('', 'Submit') ?>
<?php echo form_close() ?>
</div>