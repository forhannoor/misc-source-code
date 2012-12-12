<h1>Email Service</h1>
<?php
    
    echo validation_errors();
    $form_attr=array(
        'id' => 'email_form'
    );
    
    echo form_open_multipart('email/send_email', $form_attr);
    echo form_label('To', 'to');
    echo form_input('to');
    echo '<br/>';
    echo form_label('CC', 'cc');
    echo form_input('cc');
    echo '<br/>';
    echo form_label('BCC', 'bcc');
    echo form_input('bcc');
    echo '<br/>';
    echo form_label('Subject', 'subject');
    echo form_input('subject');
    echo '<br/>';
    echo form_label('Message', 'message');
    echo '<br/>';
    echo form_textarea('message');
    echo '<br/>';
    echo '<br/>';
    echo form_label('Attachment', 'userfile');
    echo '<br/>';
    
?>

<input type="file" name="userfile" size="20" />
<br/><br/>

<?php
    
    $sub_array=array(
        'id' => 'testbutton',
        'value' => 'Send'
    );
    
    $res_array=array(
        'id' => 'testbutton',
        'value' => 'Reset'
    );
    
    echo form_submit($sub_array);
    echo form_reset($res_array);
    echo form_close();
    echo anchor('admin/index', 'Back');
    
?>