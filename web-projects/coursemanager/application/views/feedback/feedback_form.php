<h1>Feedback Form</h1>
<p>Your feedback is very important. It will help to improve this system to interact better with users. Please provide your valuable opinion.</p>
<div id="course_form">
    <?php

        echo validation_errors();
        echo form_open('feedback/give_feedback');
        echo form_label('Name', 'name');
        echo '<br/>';
        echo form_input('name');
        echo '<br/>';
        echo form_label('Email', 'email');
        echo '<br/>';
        echo form_input('email');
        echo '<br/>';
        echo form_label('Feedback', 'feedback');
        echo '<br/>';
        echo form_textarea('feedback');
        echo '<br/>';
        echo '<br/>';

        $sub_array=array(
            'id' => 'testbutton',
            'value' => 'Submit'
        );

        $res_array=array(
        'id' => 'testbutton',
        'value' => 'Reset'
        );

        echo form_submit($sub_array);
        echo form_reset($res_array);
        echo form_close();

    ?>
        
    <?php echo anchor('home/index', 'Back');?>
</div>