<?php $this->load->model('User_model'); ?>
<table class="border">
    <th>Recipient</th>
    <th>Subject</th>
    <th>Date</th>
    <?php foreach($messages->result() as $message): ?>
    <?php $recipient = $this->User_model->get_username($message->to) ?>
    <tr>
        <td><?php echo $recipient[0]->username ?></td>
        <td><?php echo anchor('user/display_message/'.$message->id, $message->subject) ?></td>
        <td><?php echo $message->created_at ?></td>
    </tr>
    <?php endforeach ?>
</table>