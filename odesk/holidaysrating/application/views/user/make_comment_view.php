<div class="comment_section">
<?php
echo validation_errors();
echo form_open('user/make_comment');
echo form_hidden('pid', $this->uri->segment(3));
echo form_label('Comment', 'description');
echo '<br/>';
echo form_textarea('description');
echo '<br/>';
echo form_submit('', 'Submit');
echo form_close();
?>
</div>