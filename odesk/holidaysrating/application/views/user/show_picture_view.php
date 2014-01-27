<div id="image_gallery">
<table>
<?php for($i = 1; $i <= count($pictures); $i += 2): ?>
<tr>
<td><?php echo anchor('user/show_picture/'.$pictures[$i]->name, img('./uploads/media/'.$pictures[$i]->name)) ?></td>
<?php if(isset($pictures[$i+1])): ?>
<td><?php echo anchor('user/show_picture/'.$pictures[$i+1]->name, img('./uploads/media/'.$pictures[$i+1]->name)) ?></td>
<?php endif ?>
</tr>
<?php endfor ?>
</table>
<br />
<?php echo anchor('user/index', 'Back') ?>
</div>