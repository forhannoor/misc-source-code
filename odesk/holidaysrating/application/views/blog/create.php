<?php echo js('assets/js/tinymce/tinymce.min.js') ?>
<script>
tinymce.init({selector:'textarea'});
</script>
<?php if(isset($title)): ?>
<title><?php echo $title ?></title>
<?php endif ?>
<?php echo validation_errors() ?>
<?php echo form_open('blog/create') ?>
<p>Title</p>
<?php echo form_input('title', $this->input->post('title')) ?>
<p>Body</p>
<?php echo form_textarea('body', $this->input->post('body')) ?>
<br />
<?php echo form_submit('', 'Submit') ?>
<?php echo form_close() ?>