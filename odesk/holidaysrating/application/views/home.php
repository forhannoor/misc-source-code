<?php if($this->session->flashdata('msg')): ?>
<h2 class="alert"><?php echo $this->session->flashdata('msg') ?></h2>
<?php  endif?>
<div class="top"></div>
<div class="middle">
<?php echo anchor('favorites/festivals', img('assets/images/img-1.jpg')); ?>
<?php echo anchor('favorites/amazing_beaches', img('assets/images/img-2.jpg')); ?>
<?php echo anchor('favorites/cruises', img('assets/images/img-3.jpg')); ?>
<?php echo anchor('favorites/ancient_wonders', img('assets/images/img-4.jpg')); ?>
<?php echo anchor('favorites/diving', img('assets/images/img-5.jpg')); ?>
<?php echo anchor('favorites/romantic_cities', img('assets/images/img-10.jpg')); ?>
<?php echo anchor('favorites/train_trips', img('assets/images/img-9.jpg')); ?>
<?php echo anchor('favorites/ski_locations', img('assets/images/img-8.jpg')); ?>
<?php echo anchor('favorites/road_trips', img('assets/images/img-7.jpg')); ?>
<?php echo anchor('favorites/magical_islands', img('assets/images/img-6.jpg')); ?>
</div>
<div class="bottom"></div>
<div class="hot">
<h1>This months BEST RATED</h1>
<div class="tour">
<?php echo anchor('australia_states/queensland', img('assets/images/a.jpg')); ?>
<h2>Rafting</h2>
<h3>Rafting at the Tully</h3>
</div>
<div class="tour">
<?php echo anchor('australia_states/queensland', img('assets/images/b.jpg')); ?>
<h2>Cairns, Queensland</h2>
<h3>Close to the great barrier reef</h3></div>
</div>
<div class="clear"></div>
<br />
<h1>Latest Videos</h1>
<div class="middle">
    <?php foreach($videos as $video): ?>
    <?php $thumbnail = array('src' => 'assets/images/thumbnail.jpg', 'title' => $video->orig_name) ?>
    <?php echo anchor('topmenu/video/'.$video->name, img($thumbnail)) ?>
    <?php endforeach ?>
</div>
<br />
<div class="latest-news">
<h4>Travel news</h4>
<p>Travel alerts, make sure you know all the inns and outs! <?php echo anchor('news/travel_alerts', 'Read more') ?></p>

<p>Holidaysrating is a new, fun and social website where you can search for information, vote for your favorite destination or share your holiday experience! <?php echo anchor('news/new_website', 'Read more') ?></p>
</div>