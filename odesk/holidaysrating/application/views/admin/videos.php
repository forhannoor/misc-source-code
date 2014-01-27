<h3>Videos</h3>

<ul class="thumbnails">
    <?php foreach($videos as $video): ?>
    <?php $thumbnail = array('src' => 'assets/images/thumbnail.jpg', 'title' => $video['title']) ?>
    <li>
        <?php echo anchor('topmenu/video/'.$video['name'], img($thumbnail), array('target' => '_blank')) ?>
        <br />
        <center>
        <p>
        <?php echo anchor('topmenu/video/'.$video['name'], '<i class = \'icon-play\'></i> Play', array('target' => '_blank')) ?>
        &nbsp;&nbsp;
        <?php echo anchor('admin/video_delete/' . $video['id'], '<i class = \'icon-remove\'></i> Delete', array('onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?')")) ?>
        </p>
        </center>
        
        <h6><?php echo $video['title'] ?></h6>
        <h6>by <?php echo $video['username'] ?></h6>
    </li>
    <?php endforeach ?>
</ul>
<?php echo anchor('admin/index', 'Back') ?>