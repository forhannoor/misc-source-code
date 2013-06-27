<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="If you are looking for travel information, want to share your holiday experience or find the best destinations.. Visit us on Holidaysrating.com and be our travelguide!"/>
<meta name="keywords" content="Holiday, holidays, rating, vacation, destination, world, worldmap, review, travel, travelguides, travelguide, travelblog, blog, favorites, Holidaysrating, Holidaysrating.com "/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<title>Holidaysrating.com, the social travel community...</title>
<!-- Holiday, Travel, rating -->


<link href="<?php echo base_url() ?>assets/css/user.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/wt-rotator.css"/>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.wt-rotator.min.js"></script>    
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/preview.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css"/>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/projekktor-1.2.27r248.min.js"></script>
</head>

<body>
<style>
    .profile-items{
        margin-left: 20px;
    }
    
    .profile-items li a:hover{
        text-decoration: none;
    }
    
    .profile-items li{
        margin-bottom: 10px;
    }
</style>
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
<div class="logo"><img src="<?php echo base_url() ?>assets/images/logo.png" width="350" height="78" alt="logo" /></div>
<div class="menu">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li class="active"><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/vote_now', 'VOTE NOW') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/main_blog', 'BLOG') ?></li>
</ul>
</div>
</div>
</div>


<!-- banner -->
<div id="banner">
    <?php if(isset($banner)): ?>
    <?php foreach($banner->result() as $value): ?>
    <?php echo img('./uploads/banners/'.$value->name) ?>
    <?php endforeach ?>
    <?php endif ?>
</div>



<div id="content"><h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top"></div>
<div class="middle">
<?php $new_message_counter = $this->User_model->count_new($this->ion_auth->user()->row()->id) ?>
<ul class="profile-items">
    <li><?php echo anchor('user/inbox', "Inbox ($new_message_counter new)") ?></li>
    <li><?php echo anchor('user/sent', "Sent Messages") ?></li>
    <li><?php echo anchor('user/upload_media', 'Upload Picture/Video') ?></li>
    <li><?php echo anchor('user/index', 'Change Password') ?></li>
    <li><?php echo anchor('user/index', 'Subscribe to Newsletter') ?></li>
    <li><?php echo anchor('user/index', 'Explore the World') ?></li>
    <li><?php echo anchor('auth/logout', 'Logout') ?></li>
</ul>
<br />
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border"/>
<h2>Members online</h2>
<br/>
<ul class="profile-items">
<?php $users_online = $this->Ion_auth_model->users_online() ?>
<?php foreach($users_online as $u_online): ?>
<li><?php echo $u_online->username ?></li>
<?php endforeach ?>
</ul>
</div>
<div class="bottom"></div>
</div>

<div class="center"><?php include $main ?></div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<h2>Video's</h2>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2>Pictures</h2>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2>Friends</h2>
<p>The friend request button should be in the page the profile visotors 
visit.</p>
<p>Your Profile is Public/Friends</p>
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
<li><?php echo anchor('news/main_news', 'LATEST NEWS') ?></li>
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