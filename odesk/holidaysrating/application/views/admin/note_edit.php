<h3>Edit Note</h3>
<?php echo validation_errors() ?>
<?php echo form_open('admin/note_edit/' . $note->id) ?>
<p>Title</p>
<?php echo form_input('title', $note->title) ?>
<p>Description</p>
<?php echo form_textarea('description', $note->description) ?>
<p>Status</p>
<?php echo form_dropdown('status', array(0 => 'Done', 1 => 'Pending'), $note->status) ?>
<p><?php echo form_submit(array('class' => 'btn btn-primary'), 'Save') ?></p>
<?php echo form_close() ?>
<br />
<?php echo anchor('admin/note', 'Back') ?>