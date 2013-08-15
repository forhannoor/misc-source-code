<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/change_password");?>

      <p>Old Password:<br />
      <?php echo form_input($old_password);?>
      </p>
      
      <p>New Password (at least <?php echo $min_password_length;?> characters long):<br />
      <?php echo form_input($new_password);?>
      </p>
      
      <p>Confirm New Password:<br />
      <?php echo form_input($new_password_confirm);?>
      </p>
      
      <?php echo form_input($user_id);?>
      <?php $submit_button = array('name' => 'submit', 'value' => 'Change', 'class' => 'btn-submit-green') ?>
      <p><?php echo form_submit($submit_button) ?></p>
      
<?php echo form_close();?>