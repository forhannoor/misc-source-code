<h3>PM to all</h3>
<?php echo validation_errors() ?>
<?php echo form_open('admin/pm') ?>
<p>Subject</p>
<p><?php echo form_input('subject') ?></p>
<?php echo form_hidden('from', $this->ion_auth->user()->row()->id) ?>
<p>Message</p>
<p><?php echo form_textarea('message') ?></p>
<?php $submit_button = array('name' => 'submit', 'value' => 'Send', 'class' => 'btn btn-primary') ?>
<?php echo form_submit($submit_button) ?>
<?php echo form_close() ?>