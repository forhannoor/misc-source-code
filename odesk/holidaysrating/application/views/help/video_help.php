<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="description" content="Helpcenter: Video"/>
<meta name="keywords" content="Help, Video"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/profile.jpg" property="og:image" />

<title>Helpcenter: Rating</title>
<link href="<?php echo base_url() ?>assets/css/holiday.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/wt-rotator.css"/>
</head>

<body>
<div id="top-head">
<div class="main">
<div class="logo">
	<img src="<?php echo base_url() ?>assets/images/logo.png" width="350" height="78" alt="logo" /></div>
<div class="menu">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/main_blog', 'BLOG') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
</div>
</div>
<div id="banner">
<div class="google">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0797455318364345";
/* Help Top */
google_ad_slot = "8416472740";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

</div>


<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top"></div>
<div class="middle">
<div class="my_login">
<?php if($this->ion_auth->logged_in()): ?>
<h2>Welcome</h2>
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
<br />
<?php $last_login=date("d-m-Y" , $this->ion_auth->user()->row()->last_login) ?>
<?php echo 'Last logged in: '.$last_login ?>
<?php $this->load->model('User_model') ?>
<?php $new_message_counter = $this->User_model->count_new($this->ion_auth->user()->row()->id) ?>
<br/>
<br/>
<?php echo anchor('user/inbox', "Inbox ($new_message_counter new)") ?>
<br/>
<br/>
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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:12px" />

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


<div class="center">
<div class="hot">

<h3 style="margin-top:20px">Video</h3>
<p>Coming soon.</p> 

<h3 style="margin-top:10px">Video</h3>
<p>Coming soon.</p> 


<div class="clear"></div>
<div class="latest-news">
</div>

</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here &gt;<?php echo anchor('home/index', 'Home') ?>&gt;Helpcenter:Video</span></p>
<h2>Help</h2>
<div class="social">
<ul>
<li class="buttonlink" style="margin-top:10px"><?php echo anchor('help/external_links', img('assets/assets/links.png')); ?></li>
<li class="buttonlink" style="margin-top:10px"><?php echo anchor('home/contact_us', img('assets/assets/contact.png')); ?></li>
</ul>
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
/* Help Bottom */
google_ad_slot = "2369939146";
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
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
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
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
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
