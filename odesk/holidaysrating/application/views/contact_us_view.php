<div class="contact_page">
<?php

echo validation_errors();
//echo '<br/>';
//echo $captcha_error;
//echo '<br/>';
$attributes = array('class' => 'email');
echo form_open_multipart('home/contact_us', $attributes);
echo form_label('Name', 'name');
echo '<br/>';
echo form_input('name');
echo '<br/>';
echo form_label('Email', 'email');
echo '<br/>';
echo form_input('email');
echo '<br/>';
echo form_label('Subject', 'subject');
echo '<br/>';
echo form_input('subject');
echo '<br/>';
echo form_label('Message', 'message');
echo '<br/>';
echo form_textarea('message');
echo '<br/>';
echo form_label('Attachment', 'userfile');
echo '<br/>';
echo '<br/>';
echo form_upload('userfile');
echo '<br/>';
echo $image;
echo '<br/>';
echo '<br/>';
echo form_label('Captcha', 'captcha');
echo '<br/>';
echo form_input('captcha');
echo '<br/>';

$submit = array(
    'type' => 'submit', 
    'value' => 'Submit', 
    'class' => 'send'
);

echo form_submit($submit);
echo form_close();

?>
</div>