<h1>Add Academic Details</h1>
<?php

echo validation_errors();
echo form_open('admin/add_academic_details');
echo form_label('ID', 'uni_id');
echo '<br/>';
echo form_input('uni_id');
echo '<br/>';
echo form_label('Department', 'department');
echo '<br/>';
echo form_input('department');
echo '<br/>';
echo form_label('Credits Completed', 'credits_completed');
echo '<br/>';
echo form_input('credits_completed');
echo '<br/>';
echo form_label('CGPA', 'cgpa');
echo '<br/>';
echo form_input('cgpa');
echo '<br/>';
echo form_submit('', 'Submit');
echo form_reset('', 'Reset');
echo form_close();
echo '<br/>';
echo anchor('admin/index', 'Back');
###############
##END OF FILE##
###############