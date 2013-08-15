<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Australia"/>
<meta name="keywords" content="Australia"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>

<title>Australia | Holidaysrating.com</title>
<link href="<?php echo base_url() ?>assets/css/region.css" rel="stylesheet" type="text/css" />
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

<div id="slider" >
<center>
<img src="<?php echo base_url() ?>assets/images/regions/australia/australiaMap.jpg" height="412" width="940" alt="Australia" title="Australia" usemap="#australia" /></center>
<map name="australia">
<area shape="poly" coords="169,207,172,152,212,131,271,118,291,103,291,89,303,76,342,51,353,41,386,54,394,253,355,260,344,270,334,283,287,286,274,297,243,307,226,301,213,301,210,291,215,279,214,264," href="<?php echo base_url() ?>index.php/australia_states/western_australia" alt="Western Australia" title="Western Australia"   />
<area shape="poly" coords="395,185,390,54,412,25,433,12,511,22,489,53,528,72,523,185," href="<?php echo base_url() ?>index.php/australia_states/northern_territory" alt="Northern Territory" title="Northern Territory"   />
<area shape="poly" coords="529,186,534,76,556,90,584,79,589,55,601,9,622,55,630,49,644,60,644,75,653,84,659,106,683,118,702,152,712,151,718,171,739,192,744,231,729,227,714,234,704,232,694,225,681,225,674,230,565,223,565,184," href="<?php echo base_url() ?>index.php/australia_states/queensland" alt="Queensland" title="Queensland"   />
<area shape="poly" coords="564,225,675,230,688,228,700,233,715,238,729,231,744,232,732,256,702,286,690,296,671,329,652,321,651,314,620,311,607,311,587,295,586,291,574,291,568,282,558,280," href="<?php echo base_url() ?>index.php/australia_states/new_south_wales" alt="New South Wales" title="New South Wales"   />
<area shape="poly" coords="555,330,559,283,570,292,583,294,601,310,645,313,647,320,670,330,657,332,648,336,639,333,621,348,604,339,604,330,580,341," href="<?php echo base_url() ?>index.php/australia_states/victoria" alt="Victoria" title="Victoria"   />
<area shape="poly" coords="395,249,394,186,563,190,552,329,540,321,539,310,533,305,533,296,515,298,521,289,519,283,509,294,500,291,508,282,515,269,512,263,494,281,487,290,482,291,477,276,466,266,449,259,433,257,417,249," href="<?php echo base_url() ?>index.php/australia_states/south_australia" alt="South Australia" title="South Australia"   />
<area shape="poly" coords="614,401,600,385,594,370,597,363,620,369,633,367,644,370,639,387,633,397,627,394," href="<?php echo base_url() ?>index.php/australia_states/tasmania" alt="Tasmania" title="Tasmania"   />
</map>
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
<h1>INTRODUCTION</h1>
<div class="flag" style="float:left"><img src="<?php echo base_url() ?>assets/images/flags/australia.jpg" alt="Australia" width="100px" height="70px" /></div>
<div class="intro">
<p><strong>Australia</strong> text.</p>
</div>

<div class="options">
<ul>
<li><?php echo anchor('australia_cities/cities_australia', img('assets/images/buttonblue-cities-bg.png')); ?></li>
<li><?php echo anchor('australia_national_parks/australia_nat_parks', img('assets/images/buttonblue-parks-bg.png')); ?></li>
<li><?php echo anchor('help/external_links', img('assets/images/buttonblue-links-bg.png')); ?></li>
</ul>
<br />
</div>

<h1>STATES</h1>
<p style="margin-bottom:20px;text-align:center">Click on the map or choose a state below:</p>
	<table style="width: 100%">
		<tr>
			<td><?php echo anchor('australia_states/new_south_wales', 'New South Wales') ?></td>
			<td><?php echo anchor('australia_states/south_australia', 'South Australia') ?></td>
			<td><?php echo anchor('australia_states/western_australia', 'Western Australia') ?></td>
		</tr>
		<tr>
			<td><?php echo anchor('australia_states/northern_territory', 'Northern Territory') ?></td>
			<td><?php echo anchor('australia_states/tasmania', 'Tasmania') ?></td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td><?php echo anchor('australia_states/queensland', 'Queensland') ?></td>
			<td><?php echo anchor('australia_states/victoria', 'Victoria') ?></td>
			<td>&nbsp;</td>
		</tr>
	</table>


</div>
<div class="clear"></div>

</div>

<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt;<?php echo anchor('regions/oceania', 'Oceania') ?>&gt;Australia</span></p>

<iframe width="180" height="100" src="http://www.youtube-nocookie.com/embed/6leHGHCKeSg?rel=0" frameborder="0" allowfullscreen></iframe>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2>Facts</h2>
<ol>
<li><?php echo anchor('australia_states/tasmania', 'Tasmania') ?> has the cleanest air in the world.</li>
<li>The Great Barrier Reef is the largest reef in the World and visible form outer space. It also has a mailbox. You can take the ferry and send a postcard, stamped with the only Great Barrier Reef stamp.</li>
<li>Australia has the world's largest cattle station (ranch). At 30,029 km2 it is almost the same size as <?php echo anchor('europe_countries/belgium', 'Belgium') ?></li>
</ol>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
<h2>Like it..</h2>
<div class="social">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<table>
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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
<h2>Cities</h2>
<ul>
<li>Mackay</li>
<li>Cairns</li>
<li>Sydney</li>
<li>Adelaide</li>
<li>Melbourne</li>
</ul>
<div class="clear"></div>
</div>

<div class="bottom"></div>
</div>
<div class="clear"></div>


<div id="footer">

<div class="google">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0797455318364345";
/* Australia */
google_ad_slot = "6364976747";
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
<div class="logo"><center>
	<img src="<?php echo base_url() ?>assets/images/photos.jpg" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<p> <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use') ?> | &copy; Copyright 2013 Holidays Rating All Rights Reserved</p>
</div>
</div>
</body>
</html>
