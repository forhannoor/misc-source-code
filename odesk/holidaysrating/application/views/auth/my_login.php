<div>
<?php

echo form_open('auth/my_login');
echo form_label('Email', 'identity');
echo form_input('identity');
echo form_label('Password', 'password');
echo form_password('password');
echo '<p style = "color: black; margin-top: 8px;">Remember Me';
echo form_checkbox('remember', '1', FALSE, 'id="remember"');
echo '</p>';



if(isset($error))
    echo $error;
        
echo form_submit('', 'Log in');
echo form_close(); 
?>
<br />
</div>