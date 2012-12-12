<h1>Search Form</h1>
<?php

    echo validation_errors();
    echo form_open('admin/search');
    echo form_label('Keyword', 'key');
    echo '<br/>';
    echo form_input('key');
    echo '<br/>';
    echo '<br/>';
    
    $sub_array=array(
            'id' => 'testbutton',
            'value' => 'Search'
        );
    
    echo form_submit($sub_array);
    echo form_close();
    echo anchor('admin/index', 'Back');

?>