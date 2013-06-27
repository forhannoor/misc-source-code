<?php if($this->session->flashdata('msg')): ?>
<h2><?php echo $this->session->flashdata('msg') ?></h2>
<?php  endif?>
<div class="top"></div>
<div class="middle">
<?php echo anchor('list_favorites/festivals', img('assets/images/img-1.jpg')); ?>
<?php echo anchor('list_favorites/amazing_beaches', img('assets/images/img-2.jpg')); ?>
<?php echo anchor('list_favorites/cruises', img('assets/images/img-3.jpg')); ?>
<?php echo anchor('list_favorites/ancient_wonders', img('assets/images/img-4.jpg')); ?>
<?php echo anchor('list_favorites/diving', img('assets/images/img-5.jpg')); ?>
<?php echo anchor('list_favorites/romantic_cities', img('assets/images/img-10.jpg')); ?>
<?php echo anchor('list_favorites/train_trips', img('assets/images/img-9.jpg')); ?>
<?php echo anchor('list_favorites/ski_locations', img('assets/images/img-8.jpg')); ?>
<?php echo anchor('list_favorites/road_trips', img('assets/images/img-7.jpg')); ?>
<?php echo anchor('list_favorites/magical_islands', img('assets/images/img-6.jpg')); ?>
</div>
<div class="bottom"></div>
<div class="hot">
<h1>This months BEST RATED</h1>
<div class="tour">
<img src="<?php echo base_url() ?>assets/images/a.jpg" alt="Great Barrier Reef" />
<h2>Cairns, Queensland</h2>
<h3>Close to the great barrier reef</h3>
</div>
<div class="tour">
<img src="<?php echo base_url() ?>assets/images/b.jpg" alt="Rafting" /> 
<h2>Rafting</h2>
<h3>Rafting at the Tully</h3></div>
</div>
<div class="clear"></div>
<div class="latest-news">
<h4>Travel news</h4>
<p>Travel alerts, make sure you know all the inns and outs! <?php echo anchor('news/travel_alerts', 'Read more') ?></p>

<p>Holidaysrating is a new, fun and social website where you can search for information, vote for your favorite destination or share your holiday experience! <?php echo anchor('news/new_website', 'Read more') ?></p>
</div>