<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-us" />
<meta name="description" content="If you are looking for travel information, want to share your holiday experience or find the best destinations.. Check out our favorites!"/>
<meta name="keywords" content="Favorites, list, favorite, favoritelist "/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/schelpen.jpg" property="og:image" />

<title>Favorites | Holidaysrating</title>
</head>

<body>
<div id="top-head">
<div class="main">
<div class="logo"><img src="<?php echo base_url() ?>assets/images/logo.png" width="350" height="78" alt="logo" /></div>
<div class="menu">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
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
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- MainFavoritesTop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="6487681541"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
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
<?php if(isset($profile_info)): ?>
<p class="avatar"><?php echo anchor('user/index', img('./uploads/'.$profile_info->avatar)) ?></p>
<?php else: ?>
<p class="avatar"><?php echo anchor('user/index', img('assets/assets/avatar.jpg')) ?></p>
<?php endif ?>
<br />
<?php echo $this->session->userdata('username') ?>
<br />
<?php echo 'Member since&nbsp;: ' . date("d-m-Y" , $this->session->userdata('created_on')) ?>
<br />
<?php echo 'Last logged in: ' . date("d-m-Y" , $this->session->userdata('old_last_login')) ?>
<?php $CI = & get_instance() ?>
<?php $CI->load->model('Message_model') ?>
<?php $new_message_counter = $CI->Message_model->count_new($this->session->userdata('user_id')) ?>
<br/>
<br/>
<?php echo anchor('user/inbox', "Inbox ($new_message_counter new)") ?>
<br/>
<br/>
<?php echo anchor('auth/logout', 'Logout') ?>
<?php else: ?>
<h2>Member Login</h2>
<?php $this->load->view('auth/my_login') ?>
<br />
<?php echo anchor('auth/forgot_password', 'Forgot Password') ?>
&nbsp;&nbsp;&nbsp;
<?php echo anchor('auth/register', 'Register') ?>
<?php endif ?>
</div>
<img src="<?php echo base_url('assets/images/border.png') ?>" alt="Holiday" style="margin-top:12px" />
<h2>Members online</h2>
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

<div class="center">

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
<h1>Our favorite lists:</h1>
<p>This world is enormous, there is plenty to see and explore. <strong>Holidaysrating</strong> has made different lists of what we think are the best destinations. We did not rank them, it is on you to decide which one is your favorite! Because there are so many great spots in the world, we probably have forgotten a few, therefore we ask for your help... Let us know what you want to see in these favorite lists, become our travelguide!</p>
<br />	
<div class="favlist">
	<table style="width: 100%;margin-left:65px">
		<tr>
			<td style="width:50%"><?php echo anchor('favorites/beaches_index', 'The best beaches') ?></td>
			<td style="width:50%"><?php echo anchor('favorites/diving_index', 'The best diving') ?></td>
		</tr>
		<tr>	
			<td style="width:50%"><?php echo anchor('favorites/romantic_index', 'The most romantic cities') ?></td>
			<td style="width:50%"><?php echo anchor('favorites/wonders_index', 'Ancient wonders') ?></td>
		</tr>
		<tr>
			<td style="width:50%"><?php echo anchor('favorites/festivals_index', 'The best festivals') ?></td>
			<td style="width:50%"><?php echo anchor('favorites/ski_index', 'Ski Locations') ?></td>
		</tr>
		<tr>
			<td style="width:50%"><?php echo anchor('favorites/city_trips_index', 'The best city trips') ?></td>
			<td style="width:50%"><?php echo anchor('favorites/islands_index', 'The best islands') ?></td>
		</tr>
		<tr>
			<td style="width:50%"><?php echo anchor('favorites/train_trips_index', 'The best train trips') ?></td>
			<td style="width:50%"><?php echo anchor('favorites/cruises_index', 'The best cruises') ?></td>
		</tr>
		<tr>
			<td style="width:50%"><?php echo anchor('favorites/road_trips_index', 'The best road trips') ?></td>
			<td style="width:50%">&nbsp;</td>
		</tr>
</table>
</div>
</div>
<div class="clear"></div>
<div class="latest-news">
</div>

</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;Favorites</span></p>
<h2 style="margin-bottom:6px">Holidaysrating</h2>
<iframe width="192" height="120"  src="http://www.youtube-nocookie.com/embed/nihFnlZKiGY" frameborder="0" allowfullscreen></iframe>

<h2 style="margin-bottom:6px">Favorites</h2>
<p>There are thousands of wonderful travel destinations in the world. Do you already know where to go this year?</p>
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
<td><a class="addthis_button_google_plusone" g:plusone:size="medium"></a></td>
<td><a class="addthis_counter addthis_pill_style"></a></td>
</tr>
</table>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-512f1c611545a1da"></script>
<!-- AddThis Button END -->
</div>

<div class="clear"></div>
</div>
<div class="bottom"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- MainFavoritesBottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="7964414747"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
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
<li class="active"><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVEL NEWS') ?></li>
<li><?php echo anchor('blog/blog_index', 'BLOG') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/photos.jpg" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<p> <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use') ?> | &copy; Copyright <?php echo date('Y') ?> Holidaysrating All Rights Reserved</p>
</div>
</div>
<link href="<?php echo base_url() ?>assets/css/holiday.css" rel="stylesheet" type="text/css" />
</body>
</html>
