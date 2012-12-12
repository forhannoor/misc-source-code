<h1>Write Your Comment</h1>
<?php

echo validation_errors();
echo form_open('comment/make_comment');
echo form_label('Name', 'name');
echo '<br/>';
echo form_input('name');
echo '<br/>';
echo form_label('Comment', 'comment');
echo '<br/>';
echo form_textarea('comment');
echo '<br/>';
echo form_submit('', 'Post');
echo form_reset('', 'Clear');
echo form_close();
echo '<br/>';
echo anchor('blogger/index', 'Back to post');

#************#
# End of file
#************#