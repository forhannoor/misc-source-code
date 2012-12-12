<h1>Write New Blog</h1>
<?php

echo validation_errors();
echo form_open('blogger/new_blog');
echo form_label('Title', 'title');
echo '<br/>';
echo form_input('title');
echo '<br/>';
echo form_label('Author', 'author');
echo '<br/>';
echo form_input('author');
echo '<br/>';
echo form_label('Description', 'description');
echo '<br/>';
echo form_textarea('description');
echo '<br/>';
echo form_submit('', 'Post');
echo form_reset('', 'Clear');
echo form_close();
echo '<br/>';
echo anchor('blogger/index', 'Back');

#************#
# End of file
#************#