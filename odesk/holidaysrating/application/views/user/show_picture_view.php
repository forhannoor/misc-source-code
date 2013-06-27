<div id="image_gallery">
<!-- convert query result into a new array -->
<?php $new_array=array() ?>
<?php foreach($pictures->result() as $value): ?>
<?php $new_array[]=$value ?>
<?php endforeach ?>
<table>
<!-- display two images side by side -->
<?php for($i=0; $i<count($new_array); $i+=2): ?>
<tr>
<td><?php echo anchor('user/show_picture/'.$new_array[$i]->name, img('./uploads/media/'.$new_array[$i]->name)) ?></td>
<?php if(isset($new_array[$i+1])): ?>
<td><?php echo anchor('user/show_picture/'.$new_array[$i+1]->name, img('./uploads/media/'.$new_array[$i+1]->name)) ?></td>
<?php endif ?>
</tr>
<?php endfor ?>
</table>
<br />
<br />
<?php echo anchor('user/index', 'Back') ?>
</div>