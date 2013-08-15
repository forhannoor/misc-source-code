<div class="rating">
<?php if($count > 0): ?>
<?php $img = array('src' => './uploads/media/' . $this->uri->segment(3)) ?>
<div class="single_photo"><?php echo img($img) ?></div>
<?php else: ?>
<p>Rate <?php echo ucfirst($this->uri->segment(3)) ?></p>
<?php endif ?>

<?php
echo form_open('user/rate');
echo form_hidden('count', $count);
echo form_label('Your Rating', 'rating');
$options = array(
    1 => 1,
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5
);
echo form_dropdown('rating', $options);
echo form_hidden('name', $this->uri->segment(3));

$submit_button = array('value' => 'Rate', 'class' => 'btn-red');

echo form_submit($submit_button);
echo form_close();
?>
</div>

<?php if($count > 0): ?>
<?php echo anchor('user/show_picture/' . $this->uri->segment(3), 'Back') ?>
<?php else: ?>
<?php echo anchor('topmenu/worldmap', 'Back') ?>
<?php endif ?>