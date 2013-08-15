<div class="profile_info_form">
<?php

echo validation_errors();
echo '<br/>';
echo form_open_multipart('user/add_profile_info');
echo form_label('About Me', 'about');
echo '<br/>';
echo form_textarea('about');
echo '<br/>';
echo form_label('Profile Privacy', 'privacy');
echo '<br/>';
$privacy_options=array(0 => 'Private', 1 => 'Public');
echo form_dropdown('privacy', $privacy_options);
echo '<br/>';
echo form_label('Country', 'country');
echo '<br/>';
echo form_input('country');
echo '<br/>';
echo form_label('Destination', 'destination');
echo '<br/>';
echo form_input('destination');
echo '<br/>';
echo form_label('Upload Avatar', 'userfile');
echo '<br/>';
$avatar_upload=array(
                    'name' => 'userfile',
                );

if(isset($errors))
    print_r($errors);
     
echo form_upload($avatar_upload);
echo '<br/>';
echo form_submit('', 'Submit');
echo form_reset('', 'Reset');
echo form_close();
echo '<br/>';
echo '<br/>';
echo anchor('user/index', img(base_url().'assets/assets/back.png'));
?>
</div>