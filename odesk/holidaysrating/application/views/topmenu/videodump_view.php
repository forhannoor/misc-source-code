<div class="list">
<?php foreach ($videos as $video): ?>
<p><?php echo anchor('topmenu/video/' . $video->name, $video->title) ?></p>
<p><?php echo $video->uploaded_at ?></p>
<br />
<?php endforeach ?>
</div>
<br />
<?php echo anchor('topmenu/dump_video', 'Dump video') ?>
<br />
<?php echo anchor('topmenu/videodump', 'Browse Videos by Regions') ?>
<style type="text/css">
.list{
    width: 100%;
    height: 400px;
    overflow: auto;
}
</style>