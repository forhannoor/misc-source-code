<h1>Add Personal Information</h1>
<?php

    echo validation_errors();
    echo form_open('student/add_personal_info');
    echo form_label('Last Name', 'last_name');
    echo '<br/>';
    echo form_input('last_name');
    echo '<br/>';
    echo form_label('First Name', 'first_name');
    echo '<br/>';
    echo form_input('first_name');
    echo '<br/>';
    echo form_label('Father\'s Name', 'father_name');
    echo '<br/>';
    echo form_input('father_name');
    echo '<br/>';
    echo form_label('Mother\'s Name', 'mother_name');
    echo '<br/>';
    echo form_input('mother_name');
    echo '<br/>';
    echo form_label('Present Address', 'present_address');
    echo '<br/>';
    echo form_input('present_address');
    echo '<br/>';
    echo form_label('Permanent Address', 'permanent_address');
    echo '<br/>';
    echo form_input('permanent_address');
    echo '<br/>';
    echo form_label('Email', 'email');
    echo '<br/>';
    echo form_input('email');
    echo '<br/>';
    echo form_label('Phone', 'phone');
    echo '<br/>';
    echo form_input('phone');
    echo '<br/>';
    echo form_submit('', 'Submit');
    echo form_reset('', 'Reset');
    echo form_close();

?>