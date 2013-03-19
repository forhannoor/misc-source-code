<div>
<?php

if(isset($errors))
    print_r($errors);
    
echo form_open_multipart('user/add_banner');
echo form_label('Banner', 'userfile');
echo form_upload('userfile');
echo form_submit('', 'Submit');
echo form_close();

?>
</div>