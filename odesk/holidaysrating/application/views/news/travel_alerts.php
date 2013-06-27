<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="description" content="Travel Alerts"/>
<meta name="keywords" content="Travel Alerts"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>

<title>Travel Alerts</title>
<link href="<?php echo base_url() ?>assets/css/holidayOthers.css" rel="stylesheet" type="text/css" />
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
<li><?php echo anchor('topmenu/vote-now', 'VOTE NOW') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/main-blog', 'BLOG') ?></li>
</ul>
</div>
</div>
</div>
<div id="banner">
<div class="google">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0797455318364345";
/* NewsTop */
google_ad_slot = "9224371548";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

</div>

<div id="content"><h1>Latest News</h1>
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
<h2>Members online</h2>
<p>Holidaysrating is a new, fun and social website where you can search for information, vote for your favorite destination or share your holiday experience!</p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2>Advertisement Here</h2>
<p>Holidaysrating is a new, fun and social website where you can search for information, vote for your favorite destination or share your holiday experience!</p>
</div>
<div class="bottom"></div>
</div>


<div class="center">
<div class="hot" style="border:thin gray solid">
<img src="<?php echo base_url() ?>assets/images/travel-alert.jpg" style="float:right"/>
<p style="color:red"><strong>Travel Alerts</strong></p>
<p>Travel Alerts are issued when long-term, protracted conditions that make a country dangerous or unstable lead the 
U.S. State Department to recommend that Americans avoid or consider the risk of travel to that country. A Travel 
Alert is also issued when the U.S. Government's ability to assist American citizens is constrained due to the closure of an embassy or consulate or because of a drawdown of its staff. The countries listed below meet those criteria.</p>
<div class="clear"></div>
<ul style="text-decoration:none;color:#808080;list-style:none;margin-left:10px">
<li><strong>Philippines</strong>    01/30/2013</li>
<li><strong>Afghanistan</strong>    01/29/2013</li>
<li><strong>El Salvador</strong>    01/23/2013</li>
<li><strong>Algeria</strong>    01/19/2013</li>
<li><strong>Mali</strong>    01/18/2013</li>
<li><strong>Niger</strong>    01/16/2013</li>
<li><strong>Kenya</strong>    01/14/2013</li>
<li><strong>Libya</strong>    01/02/2013</li>
<li><strong>Haiti</strong>    12/28/2012</li>
<li><strong>Central African Republic</strong>    12/28/2012</li>
<li><strong>Somalia</strong>    12/26/2012</li>
<li><strong>Nigeria</strong>    12/21/2012</li>
<li><strong>Israel (the West Bank and Gaza)</strong>    12/20/2012</li>
<li><strong>Iran</strong>    12/07/2012</li>
<li><strong>Mauritania</strong>    11/30/2012</li>
<li><strong>Eritrea</strong>    11/29/2012</li>
<li><strong>Democratic Republic of Congo</strong>    11/21/2012</li>
<li><strong>Chad</strong>    11/21/2012</li>
<li><strong>Honduras</strong>    11/21/2012</li>
<li><strong>Mexico</strong>    11/20/2012</li>
<li><strong>Yemen</strong>   11/19/2012</li>
<li><strong>Saudi Arabia</strong>   11/19/2012</li>
<li><strong>Cote d'Ivoire</strong>   11/16/2012</li>
<li><strong>Burundi</strong>    11/08/2012</li>
<li><strong>Tunisia</strong>    10/19/2012</li>
<li><strong>Colombia</strong>    10/03/2012</li>
<li><strong>Pakistan</strong>    09/19/2012</li>
<li><strong>Lebanon</strong>    09/17/2012</li>
<li><strong>Sudan</strong>    09/15/2012</li>
<li><strong>Democratic People's Republic of Korea</strong>     09/11/2012</li>
<li><strong>Republic of South Sudan</strong>   09/10/2012</li>
<li><strong>Guinea</strong>    09/07/2012</li>
<li><strong>Syria</strong>    08/28/2012</li>
<li><strong>Iraq</strong>    08/09/2012</li>
</ul>
<p style="font-size:x-small;margin:15px 0px 10px 10px">Last updated: 03 March 2013</p>
</div>
<div class="clear"></div>
<div class="latest-news">
</div>

</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt;<?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('news/main-news', 'News') ?>&gt; 
Travel Alerts</span></p>
<h2>Read also...</h2>
<p>Holidaysrating is a brand new website where you can search for information, vote for your favorite destination or share your holiday experience!</p>
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
/* NewsBottom */
google_ad_slot = "1701104741";
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
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/logo-graffiti.jpg" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<p> <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use') ?> | &copy; Copyright 2013 Holidays Rating All Rights Reserved</p>
</div>
</div>
</body>
</html>
