<h3>New Note</h3>
<?php echo validation_errors() ?>
<?php echo form_open('admin/note_create') ?>
<p>Title</p>
<?php echo form_input('title') ?>
<p>Description</p>
<?php echo form_textarea('description') ?>
<p><?php echo form_submit(array('class' => 'btn btn-primary'), 'Save') ?></p>
<?php echo form_close() ?>
<br />
<?php echo anchor('admin/note', 'Back') ?>