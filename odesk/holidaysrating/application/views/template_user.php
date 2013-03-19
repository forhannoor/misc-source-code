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


<link href="<?php echo base_url() ?>assets/css/holiday.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/wt-rotator.css"/>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.wt-rotator.min.js"></script>    
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/preview.js"></script>
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
<li><a href="index.html" class="active">HOME</a></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><a href="main/favorites.html">FAVORITES</a></li>
<li><a href="main/worldmap.html">WORLDMAP</a></li>
<li><a href="main/vote-now.html">VOTE NOW</a></li>
<li><a href="main/video-dump.html">VIDEO DUMP</a></li>
<li><a href="main/blog.html">BLOG</a></li>
</ul>
</div>
</div>
</div>


<!-- banner -->
<div id="banner">
    <?php foreach($banner->result() as $value): ?>
    <?php echo img('./uploads/banners/'.$value->name) ?>
    <?php endforeach ?>
</div>



<div id="content"><h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top"></div>
<div class="middle">
<ul class="profile-items">
    <li><?php echo anchor('user/index', 'Inbox') ?></li>
    <li><?php echo anchor('user/index', 'Send Message') ?></li>
    <li><?php echo anchor('user/upload_media', 'Upload Picture/Video') ?></li>
    <li><?php echo anchor('user/index', 'Change Password') ?></li>
    <li><?php echo anchor('user/index', 'Subscribe to Newsletter') ?></li>
    <li><?php echo anchor('user/index', 'Explore the World') ?></li>
    <li><?php echo anchor('auth/logout', 'Logout') ?></li>
</ul>
<br />
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border">
<h2>Members online</h2>
<p>Holidaysrating is a new, fun and social website where you can search for information, vote for your favorite destination or share your holiday experience!</p>
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





<div class="first-coloum">
<ul>
<li><a href="index.html">HOME</a></li>
<li><a href="main/favorites.html">FAVORITES</a></li>
<li><a href="main/news.html">LATEST NEWS</a></li>
<li><a href="main/blog.html">BLOG</a></li>
</ul>
</div>
<div class="first-coloum">
<ul>
<li><a href="html/regions/africa.html">AFRICA</a></li>
<li><a href="html/regions/antartica.html">ANTARTICA</a></li>
<li><a href="html/regions/asia.html">ASIA</a></li>
<li><a href="html/regions/central-america-and-the-caribbean.html">CENTRAL AMERICA</a></li>
</ul>
</div>
<div class="first-coloum">
<ul>
<li><a href="html/regions/europe.html">EUROPE</a></li>
<li><a href="html/regions/north-america.html">NORTH AMERICA</a></li>
<li><a href="html/regions/oceania.html">OCEANIA</a></li>
<li><a href="html/regions/south-america.html">SOUTH AMERICA</a></li>
</ul>
</div>
<div class="first-coloum">
<ul>
<li><a href="main/privacy-policy.html">PRIVACY POLICY</a></li>
<li><a href="main/terms-of-use.html">TERMS OF USE</a></li>
<li><a href="my-profile/my-profile.html">MY PROFILE</a></li>
<li><a href="main/contact-us.html">CONTACT US</a></li>
</ul>
</div>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/photos.jpg" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<div class="clear"></div>
<p> Privacy Policy | Terms of Use | &copy; Copyright 2013 Holidays Rating All Rights Reserved</p>
</div>
</div>
</body>
</html>