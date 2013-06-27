<div class="rating">
<p>Rating for: <?php echo $this->uri->segment(3) ?></p>
<?php
echo form_open('user/rate');
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
echo form_submit('', 'Rate');
echo form_close();
?>
</div>