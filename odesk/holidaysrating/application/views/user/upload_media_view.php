<div class="profile_info_form">
<?php

echo validation_errors();
echo '<br/>';
echo form_open_multipart('user/upload_media');
echo form_label('Category', 'category');
echo '&nbsp;&nbsp;';
$categories=array('image' => 'Image', 'video' => 'Video');
echo form_dropdown('category', $categories);

$media_upload=array('name' => 'userfile');
echo '<br/>';
echo form_upload($media_upload);

if(isset($errors))
    print_r($errors);
    
echo '<br/>';
echo form_submit('', 'Submit');
echo form_close();

?>
</div>