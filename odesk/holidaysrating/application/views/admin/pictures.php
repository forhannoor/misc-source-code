<h3>Pictures</h3>

<ul class="thumbnails">
    <?php foreach($pictures as $picture): ?>
    <?php $image = array('src' => './uploads/media/'.$picture->name, 'class' => 'thumbnail') ?>
    <li>
        <a href="<?php echo base_url() ?>uploads/media/<?php echo $picture->name ?>"><?php echo img($image) ?></a>
        <a href="<?php echo base_url() ?>index.php/admin/picture_delete/<?php echo $picture->id ?>"><i class="icon-remove"></i> Delete</a>
    </li>
    <?php endforeach ?>
</ul>
<?php echo anchor('admin/index', 'Back') ?>