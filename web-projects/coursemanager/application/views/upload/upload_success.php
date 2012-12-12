<h3>Your file has beem uploaded successfully</h3>

<ul>
    <?php foreach($upload_data as $item=>$value): ?>
    <li><?php echo $item; ?> : <?php echo $value; ?></li>
    <?php endforeach; ?>
</ul>

<p><?php echo anchor('upload', 'Upload another file'); ?></p>
<?php echo anchor('admin/index', 'Back'); ?>