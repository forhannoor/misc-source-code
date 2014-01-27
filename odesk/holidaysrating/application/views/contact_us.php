<?php echo js('assets/js/form-validator/jquery.form-validator.min.js') ?>
<div class="contact_page">
<?php echo validation_errors() ?>
<?php $attributes = array('class' => 'email') ?>
<?php echo form_open_multipart('home/contact_us', $attributes) ?>
<?php echo form_label('Name', 'name') ?>
<br />
<?php echo form_input('name', $this->input->post('name')) ?>
<br/>
<?php echo form_label('Email', 'email') ?>
<br/>
<?php echo form_input('email', $this->input->post('name'), 'data-validation = \'email\'') ?>
<br/>
<?php echo form_label('Subject', 'subject') ?>
<br/>
<?php echo form_input('subject', $this->input->post('name')) ?>
<br/>
<?php echo form_label('Message', 'message') ?>
<br/>
<?php echo form_textarea('message', $this->input->post('name'), 'data-validation = \'required\'') ?>
<br/>
<?php echo form_label('Attachment', 'userfile') ?>
<br/>
<br/>
<?php echo form_upload('userfile') ?>
<br/>
<?php echo $image  ?>
<br/>
<br/>
<?php echo form_label('Type here the letters and/or numbers you see above', 'captcha') ?>
<br/>
<?php echo form_input('captcha', '', 'data-validation = \'required\'') ?>
<br/>
<?php $submit = array('type' => 'submit', 'value' => 'Submit', 'class' => 'send') ?>
<?php echo form_submit($submit) ?>
<?php echo form_close() ?>
</div>
<script>
$.validate({
    validateOnBlur : false,
    errorMessagePosition : 'top'
});
</script>