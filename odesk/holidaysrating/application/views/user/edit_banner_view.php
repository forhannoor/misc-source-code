<div class="banner-form">
<?php

if(isset($errors))
    print_r($errors);
    
echo form_open_multipart('user/edit_banner');
echo form_label('Banner', 'userfile');
echo form_upload('userfile');
echo form_submit('', 'Submit');
echo form_close();
echo '<br/>';
echo '<br/>';
echo anchor('user/index', img(base_url().'assets/assets/back.png'));
?>
</div>