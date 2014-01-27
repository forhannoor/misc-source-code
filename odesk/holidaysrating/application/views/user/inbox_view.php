<?php $this->load->model('User_model'); ?>
<table class="border">
<th>From</th>
<th>Subject</th>
<th>Date</th>

<?php foreach($messages as $message): ?>
<?php $sender = $this->User_model->username($message->from) ?>
<tr>
<td><?php echo $sender ?></td>
<td><?php echo anchor('user/display_message/'.$message->id, $message->subject) ?></td>
<td><?php echo $message->created_at ?></td>
</tr>
<?php endforeach ?>
</table>