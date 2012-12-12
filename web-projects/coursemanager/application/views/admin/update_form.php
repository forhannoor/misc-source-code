<div id="course_form">
<?php
    echo validation_errors();
    echo form_open('admin/process_update');
    
    foreach($prev->result() as $p)
    {
        echo form_label('Course ID', 'course_id');
        echo '<br/>';
        echo form_input('course_id', $p->course_code);
        echo '<br/>';
        echo form_label('Title', 'title');
        echo '<br/>';
        echo form_input('title', $p->title);
        echo '<br/>';
        echo form_label('Description', 'description');
        echo '<br/>';
        echo form_input('description', $p->description);
        echo '<br/>';
        echo form_label('Credit', 'credit');
        echo '<br/>';
        echo form_input('credit', $p->credit);
        echo '<br/>';
        echo form_label('Status', 'status');
        echo '<br/>';
        echo form_input('status', $p->status);
        echo '<br/>';
        echo form_label('Grade', 'grade');
        echo '<br/>';
        echo form_input('grade', $p->grade);
        echo '<br/>';
        echo form_label('Grade Point', 'grade_point');
        echo '<br/>';
        echo form_input('grade_point', $p->grade_point);
        echo '<br/>';
    }
    
    echo form_submit('', 'Update');
    echo '<br/>';
    echo form_close();
    echo anchor('admin/course_list', 'Back');

?>
</div>