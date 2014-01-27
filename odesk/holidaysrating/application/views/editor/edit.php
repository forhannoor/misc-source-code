<h3>Edit</h3>
<?php echo form_open('editor/save') ?>
<?php echo form_hidden('path', $path) ?>
<?php echo form_textarea('content', $content) ?>
<br/>
<?php echo form_submit('', 'Save') ?>
<?php echo form_close() ?>