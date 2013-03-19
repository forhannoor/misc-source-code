<p>Please enter your email address so we can send you an email to reset your password.</p>

<div id="auth_form">
<?php
echo validation_errors();
echo '<br>';
echo '<br>';
echo form_open('auth/forgot_password');
echo form_label('Email', 'email');
echo form_input('email');
echo form_submit('', 'Submit');
echo form_close();
?>
</div>