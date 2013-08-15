<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Raymond in Dominica"/>
<meta name="keywords" content=" Raymond in Dominica "/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/blacklogo.jpg" property="og:image" />

<title>Raymond in Dominica</title>
<link href="<?php echo base_url() ?>assets/css/holiday.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/wt-rotator.css"/>
</head>

<body>
<div id="top-head-blog">
<div class="main">
<div class="logo"><img src="<?php echo base_url() ?>assets/images/logo.png" width="350" height="78" alt="logo" /></div>
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
<div id="banner-blog">
<div class="google">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0797455318364345";
/* BlogTop */
google_ad_slot = "8976705944";
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
<div class="top-blog"></div>
<div class="middle-blog ">
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
<div class="bottom-blog"></div>
</div>


<div class="center">
<div class="hot">
<img src="<?php echo base_url() ?>assets/images/blog/avatarRay.JPG" alt="Raymond" style="margin-left:2px;margin-bottom:7px" />
<p>Dominica is a unspoiled island, full with nature and just fabulous. When you are in the Caribbean, you definitely need to visit this great destination! So three years ago, my wife and I decided to spend a few days in Dominica.
We bought a ticket with Liat Airways and we flew from Saint martin to the Commonwealth of Dominica. Or just Dominica. It was a hell of a flight. Small airplanes, clouds and wind are a perfect combination for heavy turbulance but luckely it is just 40 minutes away....</p>
<a href="http://www.holidaysrating.com/assets/images/blog/waterfallbig.JPG" target="_blank"><img src="<?php echo base_url() ?>assets/images/blog/waterfall.jpg" alt="Dominica" style="float:right;margin:4px 5px 5px 5px" /></a>
<p style="text-align:left;margin-top:7px">Once on the ground, the first thing you see is the beautiful nature. Everywhere you look; green. The mountains sticking into the clouds.
Although the Commonwealth of Dominica is independant, it still has got UK written of her. One of the examples would be the fact they drive on the left side. For us, Europeans it can be tricky. Not that I find it difficult to drive but more because I always look to the wrong side of the road when I want to cross the road walking!</p>
<h4 style="margin-top:15px">Around the island</h4>
<p style="text-align:left">This amazing island has got plenty of things to do. Walk one of the many tracks in the rainforest, located in the center of the island, find the many waterfalls or lakes, including the second world largest boiling lake or go shopping in Rosseau.<br /><br />
My wife and I hired a car at the airport and from there we drove around the island. Rosseau is the island's capital city with a port for the cruiseships, where Portsmouth has got the better airport. It is just amazing to ride over the scenic highway, beautiful coastline filled with palms.</p>
<a href="http://www.holidaysrating.com/assets/images/blog/creekbig.JPG" target="_blank"><img src="<?php echo base_url() ?>assets/images/blog/creek.jpg" alt="Raymond" style="margin:5px 5px 2px 5px" /></a>
<p style="float:right;width:200px;text-align:left;margin-top:15px"> The best time to visit Dominica is from October to December, when the temperatures are perfect, hotel rates are lower and the humidity is less stifling.</p>
<a href="http://www.holidaysrating.com/assets/images/blog/rosseaubig.JPG" target="_blank"><img src="<?php echo base_url() ?>assets/images/blog/rosseau.jpg" alt="Raymond" style="float:right;margin-top:5px;margin-bottom:7px" /></a>
<h4 style="text-align:left;margin-top:15px">Rain season</h4>
<p style="text-align:left">Dominica's rain season occurs between June and November, and the island is susceptible to hurricanes and tropical storms during this time of year. Ofcourse we had a lot of clouds and rain but this did not spoil our holiday.</p>
<p>If this is my favorite travel destination? I do not know but it is definitly worth every penny! I enjoyed my stay on Dominica.</p>

<p style="margin-top:6px"><a href="#" onClick="history.go(-1)">Previous Page</a> | see also: <?php echo anchor('caribbean_countries/dominica', 'Dominica') ?></p>
</div>
<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/raymond', 'Leave a comment') ?>
</div>

</div>


<div class="right-side">
<div class="top-blog"></div>
<div class="middle-blog">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/main_blog', 'Blog') ?>&gt; Raymond in Domenica</span></p>
<iframe width="180" height="100" src="http://www.youtube-nocookie.com/embed/mEAyvWphhaA?rel=0" frameborder="0" allowfullscreen></iframe>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2 style="margin-bottom:7px">Read also...</h2>
<p>Explore Queensland with Danielle</p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2 style="margin-bottom:7px">Submit your story</h2>
<p>What is your favorite destination? Want to become our travelguide? Click on the button below to submit your story.</p>
<div class="buttonlink"><center><?php echo anchor('home/contact_us', img('assets/assets/story.png')); ?></center></div>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border"/>
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
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-512f1c611545a1da"></script>
<!-- AddThis Button END -->
</div>

<div class="clear"></div>

</div>
<div class="bottom-blog"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0797455318364345";
/* BlogBottom */
google_ad_slot = "1453439146";
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
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/sand.jpg" width="125px" height="80px" alt="logo" /></center>
</div>
<div class="clear"></div>
<p> <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use') ?> | &copy; Copyright 2013 Holidays Rating All Rights Reserved</p>
</div>
</div>
</body>
</html>
