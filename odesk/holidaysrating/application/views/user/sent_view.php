<?php $this->load->model('User_model'); ?>
<table class="border">
<th>To</th>
<th>Subject</th>
<th>Date</th>

<?php foreach($messages as $message): ?>
<?php $recipient = $this->User_model->username($message->to) ?>
<tr>
<td><?php echo $recipient ?></td>
<td><?php echo anchor('user/display_message/'.$message->id, $message->subject) ?></td>
<td><?php echo $message->created_at ?></td>
</tr>
<?php endforeach ?>
</table>