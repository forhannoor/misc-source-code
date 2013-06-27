<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="If you are looking for travel information, want to share your holiday experience or find the best destinations.. Check out our favorites!"/>
<meta name="keywords" content="Favorites, list, favorite, favoritelist "/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<title>Favorites</title>
<link href="<?php echo base_url() ?>assets/css/holidayOthers.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/wt-rotator.css"/>
</head>

<body>
<div id="top-head">
<div class="main">
<div class="logo"><img src="<?php echo base_url() ?>assets/images/logo.png" width="350" height="78" alt="logo" /></div>
<div class="menu">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li class="active"><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/vote_now', 'VOTE NOW') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEO DUMP') ?></li>
<li><?php echo anchor('topmenu/blog', 'BLOG') ?></li>
</ul>
</div>
</div>
</div>
<div id="banner">
<div class="google">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0797455318364345";
/* MainFavorites */
google_ad_slot = "6487681541";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

</div>

<div id="content"><h1>Favorites</h1>
<div class="clear"></div>
<div class="left-side">
<div class="top"></div>
<div class="middle">
<div class="my_login">
<?php if($this->ion_auth->logged_in()): ?>
<h2>Status</h2>
<br/>
<?php if(isset($profile_info)): ?>
<?php foreach($profile_info->result() as $value): ?>
<?php echo img('./uploads/'.$value->avatar) ?>
<?php endforeach ?>
<?php endif ?>
<br />
<?php echo $this->ion_auth->user()->row()->first_name.' ' ?>
<?php echo $this->ion_auth->user()->row()->last_name.' ' ?>
<?php echo '<br>' ?>
<?php $joined_in=date("d-m-Y" , $this->ion_auth->user()->row()->created_on) ?>
<?php echo 'Member since&nbsp;: '.$joined_in ?>
<?php echo '<br>' ?>
<?php $last_login=date("d-m-Y" , $this->ion_auth->user()->row()->last_login) ?>
<?php echo 'Last logged in: '.$last_login ?>
<?php echo '<br>' ?>
<?php echo anchor('auth/logout', 'Logout') ?>
<?php else: ?>
<h2>Member Login</h2>
<?php include APPPATH.'views/auth/my_login.php' ?>
<br />
<?php echo anchor('auth/forgot_password', 'Forgot Password') ?>
&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo anchor('auth/register', 'Register') ?>
<?php endif ?>
</div>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />

<h2>Members online</h2>
<p>Holidaysrating is a new, fun and social website where you can search for information, vote for your favorite destination or share your holiday experience!</p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2>Advertisement Here</h2>
<p>Holidaysrating is a new, fun and social website where you can search for information, vote for your favorite destination or share your holiday experience!</p>
</div>
<div class="bottom"></div>
</div>

<div class="center">
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
<h1>Our favorite lists:</h1>
	<table style="width: 100%">
		<tr>
			<td><?php echo anchor('list_favorites/amazing_beaches', 'Amazing Beaches') ?></td>
			<td><?php echo anchor('list_favorites/diving', 'Diving') ?></td>
			<td><?php echo anchor('list_favorites/romantic_cities', 'Romantic Cities') ?></td>
		</tr>
		<tr>
			<td><?php echo anchor('list_favorites/ancient_wonders', 'Ancient Wonders') ?></td>
			<td><?php echo anchor('list_favorites/festivals', 'Festivals') ?></td>
			<td><?php echo anchor('list_favorites/ski_locations', 'Ski Locations') ?></td>
		</tr>
		<tr>
			<td><?php echo anchor('list_favorites/city_trips', 'City Trips') ?></td>
			<td><?php echo anchor('list_favorites/magical_islands', 'Magical Islands') ?></td>
			<td><?php echo anchor('list_favorites/train_trips', 'Train Trips') ?></td>
		</tr>
		<tr>
			<td><?php echo anchor('list_favorites/cruises', 'Cruises') ?></td>
			<td><?php echo anchor('list_favorites/road_trips', 'Road Trips') ?></td>
			<td>&nbsp;</td>
		</tr>
</table>
</div>
<div class="clear"></div>
<div class="latest-news">
</div>

</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'HOME') ?>&gt;Favorites</span></p>
<h2>Favortites</h2>
<p>There are thousands of wonderful travel destinations in the world. Do you already know what to do this summer?</p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2>Like it..</h2>
<div class="social">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<table style="margin-top:8px;">
<tr>
<td><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a></td>
<td><a class="addthis_button_tweet"></a></td>
</tr>
<tr>
<td><a class="addthis_button_pinterest_pinit"></a></td>
<td><a class="addthis_counter addthis_pill_style"></a></td>
</tr>
</table>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-512f1c611545a1da"></script>
<!-- AddThis Button END -->
</div>

<div class="clear"></div>
</div>
<div class="bottom"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0797455318364345";
/* MainFavoritesBottom */
google_ad_slot = "7964414747";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</div>
<div class="clear"></div>

<div class="first-column">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/vote_now', 'VOTE NOW') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/africa', 'AFRICA') ?></li>
<li><?php echo anchor('regions/asia', 'ASIA') ?></li>
<li><?php echo anchor('regions/caribbean', 'CARIBBEAN') ?></li>
<li><?php echo anchor('regions/central_america', 'CENTRAL AMERICA') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/europe', 'EUROPE') ?></li>
<li><?php echo anchor('regions/north_america', 'NORTH AMERICA') ?></li>
<li><?php echo anchor('regions/oceania', 'OCEANIA') ?></li>
<li><?php echo anchor('regions/south_america', 'SOUTH AMERICA') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/main_news', 'TRAVEL NEWS') ?></li>
<li><?php echo anchor('topmenu/main_blog', 'BLOG') ?></li>
<li><?php echo anchor('help/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/photos.jpg" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>

<p> <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use') ?> | &copy; Copyright 2013 Holidays Rating All Rights Reserved</p>
</div>
</div>
</body>
</html>
