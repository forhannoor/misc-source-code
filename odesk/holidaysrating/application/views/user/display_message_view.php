<?php if(isset($message)): ?>
<?php $sender = $this->User_model->username($message->from) ?>
<?php $recipient = $this->User_model->username($message->to) ?>
<p class="bold">From:</p>
<?php echo $sender ?>
<br /><br />
<p class="bold">To:</p>
<?php echo $recipient ?>
<br /><br />
<p class="bold">Subject:</p>
<?php echo $message->subject ?>
<br /><br />
<p class="bold">Message:</p>
<?php echo parse_smileys($message->content, base_url('assets/smileys/')) ?>
<br/><br/>
<?php if($message->from != $this->session->userdata('user_id')): ?>
<?php echo anchor('user/send_message/' . urlsafe_b64encode($message->from), img(base_url('assets/assets/reply.png'))) ?>
<?php endif ?>
<br/><br/>
<?php else: ?>
<p>You have no such message.</p>
<br/><br/>
<?php endif ?>
<?php echo anchor('user/inbox', img('assets/assets/inbox.png')) ?>
<br/><br/>
<?php echo anchor('user/sent', img('assets/assets/sent.png')) ?>