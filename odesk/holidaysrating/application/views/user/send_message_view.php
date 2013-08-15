<div class="banner-form">
<?php echo validation_errors() ?>
<?php $this->load->model('User_model') ?>
<?php $to = $this->User_model->get_username($this->uri->segment(3)) ?>
<?php $avatar = $this->User_model->get_avatar($this->uri->segment(3)) ?>
<p>To:
<?php foreach($to as $t): ?>
<?php echo $t->username ?>
<?php endforeach ?> 
</p>
<?php foreach($avatar->result() as $avtr): ?>
<?php echo img('./uploads/'.$avtr->avatar) ?>
<?php endforeach ?>
<br/>
<br/>
<br/>
<?php echo form_open("user/send_message") ?>
<?php echo form_hidden('from', $this->ion_auth->user()->row()->id) ?>
<?php echo form_hidden('to', $this->uri->segment(3)) ?>
<?php echo form_label('Subject', 'subject') ?>
<br/>
<?php echo form_input('subject') ?>
<br/>
<br/>
<?php echo form_label('Content', 'content') ?>
<br/>
<?php echo form_textarea('content') ?>
<br/>
<br/>
<?php echo form_submit('', 'Send') ?>
&nbsp;&nbsp;
<?php echo form_close() ?>
</div>