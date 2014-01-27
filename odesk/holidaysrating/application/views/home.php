<?php header("Expires: Mon, 26 Jul 1997 05:00:00 GMT") ?>
<?php header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT") ?>
<?php header("Cache-Control: no-store, no-cache, must-revalidate") ?> 
<?php header("Cache-Control: post-check=0, pre-check=0", false) ?>
<?php header("Pragma: no-cache") ?>
<?php $msg = $this->session->flashdata('msg') ?>
<?php if(strlen($msg) > 0): ?>
<h2 class="alert"><?php echo $msg ?></h2>
<?php  endif?>
<div class="top"></div>
<div class="middle">
<?php echo anchor('favorites/festivals_index', img('assets/images/img-1.jpg')); ?>
<?php echo anchor('favorites/beaches_index', img('assets/images/img-2.jpg')); ?>
<?php echo anchor('favorites/cruises_index', img('assets/images/img-3.jpg')); ?>
<?php echo anchor('favorites/wonders_index', img('assets/images/img-4.jpg')); ?>
<?php echo anchor('favorites/diving_index', img('assets/images/img-5.jpg')); ?>
<?php echo anchor('favorites/romantic_index', img('assets/images/img-10.jpg')); ?>
<?php echo anchor('favorites/train_trips_index', img('assets/images/img-9.jpg')); ?>
<?php echo anchor('favorites/ski_index', img('assets/images/img-8.jpg')); ?>
<?php echo anchor('favorites/road_trips_index', img('assets/images/img-7.jpg')); ?>
<?php echo anchor('favorites/islands_index', img('assets/images/img-6.jpg')); ?>
</div>
<div class="bottom"></div>
<div class="hot">
<h1>This months BEST RATED</h1>
<div class="tour">
<?php echo anchor('australia_adventures/jungle_surfing', img('assets/images/a.jpg')); ?>
<h2>Jungle Surfing</h2>
<h3>Explore the tropical rainforest</h3>
</div>
<div class="tour">
<?php echo anchor('australia_states/queensland', img('assets/images/b.jpg')); ?>
<h2>Cairns, Queensland</h2>
<h3>Close to the great barrier reef</h3></div>
</div>
<div class="clear"></div>
<br />
<br />
<div class="text" style="margin-bottom:15px"><h4><?php echo anchor('topmenu/videodump', 'Latest Videos') ?></h4></div>
<div class="top"></div>
<div class="middleVideo">
<?php foreach($videos as $video): ?>
<?php echo anchor('topmenu/video/'.$video->name, img(array('src' => 'assets/images/thumbnail.jpg', 'title' => $video->title))) ?>
<?php endforeach ?>
</div>
<div class="bottom"></div>
<br />
<div class="text"><h4><?php echo anchor('news/main_news', 'Travel News') ?></h4></div>
<div class="latest-news">
<p>Snow in Cairo for the first time in 112 years! <br />
When you think of Cairo, you definetly don't think on snow and freezing cold... <?php echo anchor('news/snow_in_cairo', 'Read more') ?></p>
</div>
<div class="latest-news">
<p>Travel alerts, make sure you know everything about your trip.<br />
Is it safe to go? <?php echo anchor('news/travel_alerts', 'Read more') ?></p>
</div>