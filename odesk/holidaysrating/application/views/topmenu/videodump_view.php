<div class="dumped_videos_thumbnail">
    <?php $videos = $this->Video_model->get_videos($this->uri->segment(3)) ?>
    <?php foreach($videos->result() as $video): ?>
    <p><?php echo $video->orig_name ?></p>
    <p><?php echo $video->uploaded_at ?></p>
    <?php $uploader = $this->User_model->get_username($video->uploader) ?>
    <?php foreach ($uploader as $uloader): ?>
    <p>By <?php echo $uloader->username ?></p>
    <?php endforeach ?>
    <p><?php echo anchor('topmenu/video/'.substr($video->name, 0, 32), 'Play') ?></p>
    <?php endforeach ?>
</div>
<br />
<?php echo anchor('topmenu/dump_video', 'Dump video') ?>
<br />
<?php echo anchor('topmenu/videodump', 'Browse Videos by Regions') ?>