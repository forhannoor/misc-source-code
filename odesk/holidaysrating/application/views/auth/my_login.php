<div>
<?php

//echo validation_errors();
echo form_open('auth/my_login');
echo form_label('Email', 'identity');
echo form_input('identity');
echo '<br/>';
echo form_label('Password', 'password');
echo form_password('password');
echo '<br/>';
if(isset($error))
    echo $error;
echo form_submit('', 'Log in');
echo form_close(); 
?>
</div>