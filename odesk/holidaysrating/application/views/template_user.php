<?php header("Expires: Mon, 26 Jul 1997 05:00:00 GMT") ?>
<?php header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT") ?>
<?php header("Cache-Control: no-store, no-cache, must-revalidate") ?> 
<?php header("Cache-Control: post-check=0, pre-check=0", false) ?>
<?php header("Pragma: no-cache") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Edit your profile, send messages and upload travel media."/>
<meta name="keywords" content="My Profile, Profile"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<title>Holidaysrating.com | The social travel community...</title>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.0.3.min.js') ?>"></script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=187439388064490";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="top-head">
<div class="main">
<div class="logo"><img src="<?php echo base_url('assets/images/logo.png') ?>" width="350" height="78" alt="logo" /></div>
<div class="menu">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li class="active"><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('blog/blog_index', 'BLOG') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVELNEWS') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
</div>
</div>
<div id="banner">
<?php if(isset($banner)): ?>
<?php echo img('./uploads/banners/'.$banner->name) ?>
<?php endif ?>
</div>
<div id="content"><h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top"></div>
<div class="middle">
<?php $new_message_counter = $this->User_model->count_new($this->session->userdata('user_id')) ?>
<ul class="items">
<li><?php echo anchor('user/inbox', img('assets/assets/inbox.png')); ?></li>
<li><?php echo anchor('user/sent', img('assets/assets/sent.png')); ?></li>
<li><?php echo anchor('user/upload_image', img('assets/assets/upload.png')); ?></li>
<li><?php echo anchor('user/index', img('assets/assets/password.png')); ?></li>
<li><?php echo anchor('topmenu/worldmap', img('assets/assets/explore.png')); ?></li>
<li><?php echo anchor('auth/logout', img('assets/assets/logout.png')); ?></li>
</ul>
<br />
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="border"/>
<center><h2>Members online</h2></center> 
<br/>
<ul class="profile-items">
<?php $users_online = $this->Ion_auth_model->users_online() ?>
<?php foreach($users_online as $u_online): ?>
<li><?php echo anchor('user/browse/' . $u_online->id, $u_online->username) ?></li>
<?php endforeach ?>
</ul>
</div>
<div class="bottom"></div>
</div>
<div class="center"><?php include $main ?></div>
<div class="right-side">
<div class="top"></div>
<div class="middle">
<h2>Friends</h2>
<p><?php echo anchor('user/inbox', "You have $new_message_counter new messages.") ?></p>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="border" />
<h2>Send in your favorite picture</h2>
<p>Do you like to see your favorite picture on this website? We will post your favorite destination picture as our location banner! You are our travelguide...</p>
<div class="clear"></div>
</div>
<div class="bottom"></div>
</div>
<div class="clear"></div>
<div id="footer">
<div class="google">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0797455318364345";
/* Bottom Ad */
google_ad_slot = "5117183149";
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
<li class="active"><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('regions/africa', 'AFRICA') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/antartica', 'ANTARTICA') ?></li>
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
<li><?php echo anchor('news/news_index', 'TRAVEL NEWS') ?></li>
<li><?php echo anchor('blog/blog_index', 'BLOG') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
<div class="logo"><center><img src="<?php echo base_url('assets/images/photos.jpg') ?>" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<p> <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use') ?> | <?php echo anchor('home/contact_us', 'Contact Us') ?> | &copy; Copyright <?php echo date('Y') ?> Holidaysrating All Rights Reserved</p>
</div>
</div>
<link href="<?php echo base_url('assets/css/user.css') ?>" rel="stylesheet" type="text/css" />
</body>
</html>