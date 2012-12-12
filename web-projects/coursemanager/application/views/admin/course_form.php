<h1>Add a Course</h1>
<div id="course_form">
    <?php
        echo validation_errors();
        echo form_open('admin/add_course');
        echo form_label('Course ID', 'course_id');
        echo '<br/>';
        echo form_input('course_id');
        echo '<br/>';
        echo form_label('Title', 'title');
        echo '<br/>';
        echo form_input('title');
        echo '<br/>';
        echo form_label('Description', 'description');
        echo '<br/>';
        echo form_input('description');
        echo '<br/>';
        echo form_label('Credit', 'credit');
        echo '<br/>';
        echo form_input('credit');
        echo '<br/>';
        echo form_label('Status', 'status');
        echo '<br/>';
        echo form_input('status');
        echo '<br/>';
        echo form_label('Grade', 'grade');
        echo '<br/>';
        echo form_input('grade');
        echo '<br/>';
        echo form_label('Grade Point', 'grade_point');
        echo '<br/>';
        echo form_input('grade_point');
        echo '<br/>';
        
        $sub_array=array(
            'id' => 'testbutton',
            'value' => 'Add'
        );
        
        $res_array=array(
            'id' => 'testbutton',
            'value' => 'Reset'
        );
        
        echo form_submit($sub_array);
        echo form_reset($res_array);
        echo '<br/>';
        echo form_close();
        echo anchor('admin/index', 'Back');
    ?>
</div>