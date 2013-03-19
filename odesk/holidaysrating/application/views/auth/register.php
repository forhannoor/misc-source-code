<div id="auth_form">
<?php

echo validation_errors();
echo '<br/>';
echo '<br/>';
echo form_open('auth/register');
echo form_label('First Name', 'first_name');
echo '<br/>';
echo form_input('first_name');
echo '<br/>';
echo form_label('Last Name', 'last_name');
echo '<br/>';
echo form_input('last_name');
echo '<br/>';
echo form_label('Email', 'email');
echo '<br/>';
echo form_input('email');
echo '<br/>';
echo form_label('Password', 'password');
echo '<br/>';
echo form_password('password');
echo '<br/>';
echo form_label('Repeat Password', 'password_confirm');
echo '<br/>';
echo form_password('password_confirm');
echo '<br/>';
echo form_submit('', 'Submit');
echo '&nbsp;&nbsp;&nbsp;';
echo form_reset('', 'Reset');
echo form_close();

?>
</div>