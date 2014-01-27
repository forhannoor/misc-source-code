<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.rating.css') ?>" />
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.0.3.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.rating.js') ?>"></script>
<div class="rating">
<?php if($count > 0): ?>
<?php $img = array('src' => './uploads/media/' . $this->uri->segment(3)) ?>
<div class="single_photo"><?php echo img($img) ?></div>
<?php else: ?>
<p>Rate <?php echo ucfirst($this->uri->segment(3)) ?></p>
<?php endif ?>

<?php echo form_open('user/rate') ?>
<?php echo form_hidden('count', $count) ?>

<input name="star1" type="radio" class="star" value="1" />
<input name="star1" type="radio" class="star" value="2" />
<input name="star1" type="radio" class="star" value="3" />
<input name="star1" type="radio" class="star" value="4" />
<input name="star1" type="radio" class="star" value="5" />
<input name="star1" type="radio" class="star" value="6" />
<input name="star1" type="radio" class="star" value="7" />
<input name="star1" type="radio" class="star" value="8" />
<input name="star1" type="radio" class="star" value="9" />
<input name="star1" type="radio" class="star" value="10" />

<?php echo form_hidden('name', $this->uri->segment(3)) ?>
<?php $submit_button = array('value' => 'Rate', 'class' => 'btn') ?>
<?php echo form_submit($submit_button) ?>
<?php echo form_close() ?>
</div>
<?php if($count > 0): ?>
<?php echo anchor('user/show_picture/' . $this->uri->segment(3), 'Back') ?>
<?php else: ?>
<?php echo anchor('topmenu/worldmap', 'Back') ?>
<?php endif ?>