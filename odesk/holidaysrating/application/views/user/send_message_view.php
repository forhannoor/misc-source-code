<?php echo js('assets/js/form-validator/jquery.form-validator.min.js') ?>
<div class="banner-form">
<?php echo validation_errors() ?>
<?php echo smiley_js() ?>
<?php $recipient = urlsafe_b64decode($this->uri->segment(3)) ?>
<?php $to = $this->User_model->username($recipient) ?>
<p>To: <?php echo $to ?> </p>
<?php $avatar = $this->User_model->avatar($recipient) ?>
<?php if (isset($avatar)): ?>
<?php echo img('./uploads/'.$avatar) ?>
<?php else: ?>
<?php echo img('assets/assets/avatar.jpg') ?>
<?php endif ?>
<br/>
<br/>
<br/>
<?php echo form_open("user/send_message/" . $this->uri->segment(3)) ?>
<?php echo form_hidden('from', $this->session->userdata('user_id')) ?>
<?php echo form_hidden('to', $recipient) ?>
<?php echo form_label('Subject', 'subject') ?>
<br/>
<?php echo form_input('subject', '', 'data-validation = required data-validation-error-msg = \'Subject cannot be empty\'') ?>
<br/>
<br/>
<?php echo form_label('Content', 'content') ?>
<br/>
<?php echo form_textarea('content', '', 'id = description data-validation = required data-validation-error-msg = \'Content cannot be empty\'') ?>
<br/>
<br/>
<p>Click to insert a smiley!</p>
<br />
<?php echo $smiley_table ?>
<br />
<?php echo form_submit('', 'Send') ?>
&nbsp;&nbsp;
<?php echo form_close() ?>
<br />
<?php echo anchor('user/index', 'Back') ?>
</div>
<script>
$.validate({
    validateOnBlur : false,
    errorMessagePosition : 'top'
});
</script>