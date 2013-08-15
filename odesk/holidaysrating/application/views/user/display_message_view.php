<?php $this->load->model('User_model') ?>
<?php foreach($message->result() as $m): ?>
<?php $sender = $this->User_model->get_username($m->from) ?>
<?php $receiver = $this->User_model->get_username($m->to) ?>
<p class="bold">From:</p>
<?php echo $sender[0]->username ?>
<br /><br />
<p class="bold">To:</p>
<?php echo $receiver[0]->username ?>
<br /><br />
<p class="bold">Subject:</p>
<?php echo $m->subject ?>
<br /><br />
<p class="bold">Message:</p>
<?php echo $m->content ?>
<?php endforeach ?>
<br/><br/>
<?php foreach($message->result() as $m): ?>
<?php if($m->from != $this->ion_auth->user()->row()->id): ?>
<?php echo anchor('user/send_message/'.$m->from, img(base_url().'assets/assets/reply.png')) ?>
<?php endif ?>
<?php endforeach ?>
<br/><br/>
<?php echo anchor('user/inbox', img(base_url().'assets/assets/inbox.png')) ?>
<br/><br/>
<?php echo anchor('user/sent', img(base_url().'assets/assets/sent.png')) ?>