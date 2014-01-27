<?php echo js('assets/js/form-validator/jquery.form-validator.min.js') ?>
<div class="comment_section">
<?php echo validation_errors() ?>
<?php echo smiley_js() ?>
<?php echo form_open('user/make_comment') ?>
<?php echo form_hidden('pid', $this->uri->segment(3)) ?>
<?php echo form_label('Comment', 'description') ?>
<br/>
<?php echo form_textarea('description', '', "id = description data-validation = required data-validation-error-msg = \"Comment cannot be empty\"") ?>
<br/>
<br />
<p>Click to insert a smiley!</p>
<br />
<?php echo $smiley_table ?>
<br />
<?php echo form_submit('', 'Submit') ?>
<?php echo form_close() ?>
</div>
<br />
<a href="<?php echo $this->session->flashdata('redirectUrl') ?>">Back</a>
<script>
$.validate({
    validateOnBlur : false,
    errorMessagePosition : 'top'
});
</script>