<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="en-us" />
<meta name="description" content="Explore the world"/>
<meta name="keywords" content="world, worldmap, explore, map"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/thumbs/world.jpg" property="og:image" />

<title>Worldmap | Holidaysrating</title>
</head>

<body>
<div id="top-head">
<div class="main">
<div class="logo"><img src="<?php echo base_url() ?>assets/images/logo.png" width="350" height="78" alt="logo" /></div>
<div class="menu">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li class="active"><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('blog/blog_index', 'BLOG') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVELNEWS') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
</div>
</div>


<div id="slider" >
<center><img src="<?php echo base_url() ?>assets/images/world.jpg" height="412" width="940" alt="Worldmap" title="Worldmap" usemap="#worldmap"/></center>
<map name="worldmap">
<area shape="poly" coords="522, 125, 557, 176, 574, 172, 543, 213, 571, 235, 562, 262, 528, 263, 505, 287, 492, 287, 473, 243, 474, 222, 465, 200, 465, 189, 454, 184, 420, 191, 397, 164, 398, 146, 429, 115, 466, 110, 469, 120, 493, 127, 494, 120" href="<?php echo base_url() ?>index.php/regions/africa" alt="Africa" title="Africa" /> 
<area shape="poly" coords="577, 29, 626, 18, 701, 27, 818, 42, 800, 71, 769, 58, 749, 57, 746, 67, 762, 70, 797, 105, 770, 125, 746, 104, 739, 116, 769, 173, 782, 210, 768, 225, 720, 217, 693, 187, 695, 158, 686, 159, 676, 146, 649, 161, 653, 183, 644, 177, 630, 147, 594, 138, 594, 147, 556, 168, 528, 125, 530, 111, 513, 110, 510, 103, 524, 99, 536, 103, 542, 97, 560, 103, 574, 109, 565, 77, 582, 76, 572, 44, 582, 40"  href="<?php echo base_url() ?>index.php/regions/asia" alt="Asia" title="Asia"/>
<area shape="poly" coords="574, 36, 567, 42, 575, 72, 555, 74, 563, 83, 560, 99, 534, 90, 535, 81, 524, 89, 516, 84, 511, 98, 499, 101, 500, 113, 477, 109, 467, 92, 452, 97, 440, 109, 422, 107, 422, 94, 438, 95, 437, 81, 425, 71, 406, 44, 471, 15, 565, 21" href="<?php echo base_url() ?>index.php/regions/europe" alt="Europe" title="Europe" />
<area shape="poly" coords="745, 405, 763, 368, 514, 368, 416, 387, 351, 389, 334, 362, 312, 379, 175, 390, 218, 406"  href="<?php echo base_url() ?>index.php/regions/antarctica" alt="Antarctica" title="Antarctica"/>
<area shape="poly" coords="151, 122, 189, 134, 231, 143, 284, 159, 288, 185, 264, 191, 252, 201, 237, 193, 237, 187, 195, 161, 188, 162, 163, 154" href="<?php echo base_url() ?>index.php/regions/central_america" alt="Central America" title="Central America" />
<area shape="poly" coords="104, 60, 129, 38, 203, 32, 233, 24, 298, 13, 346, 8, 425, 12, 403, 32, 364, 41, 355, 51, 321, 43, 309, 49, 317, 70, 320, 84, 289, 90, 254, 106, 237, 132, 224, 125, 196, 132, 149, 117, 143, 102, 159, 78, 157, 59, 137, 52" href="<?php echo base_url() ?>index.php/regions/north_america" alt="North America" title="North America"/>
<area shape="poly" coords="235, 197, 258, 209, 260, 195, 294, 190, 358, 220, 299, 302, 302, 336, 274, 327, 248, 239, 225, 214"  href="<?php echo base_url() ?>index.php/regions/south_america" alt="South America" title="South America"/>
<area shape="poly" coords="789, 205, 789, 234, 735, 258, 731, 284, 773, 281, 792, 308, 839, 315, 879, 296, 932, 235, 840, 208"  href="<?php echo base_url() ?>index.php/regions/oceania" alt="Oceania" title="Oceania"/>
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
<div style="margin: 15px 0px 0px; text-align: center; display: inline-block;">
<div style="margin: 0px 0px 5px; padding: 2px 4px; border: none; text-align: center; display: inline-block; background-color: transparent;">
<a style="color:#5F6A6F; font-size: 13px; text-decoration: none; font-weight:bold; font-family:Verdana, Geneva, Tahoma, sans-serif" href="http://localtimes.info/difference">World Clock</a>
</div><script src="http://localtimes.info/world_clock2.php?&cp1_Hex=000000&cp2_Hex=FFFFFF&cp3_Hex=000000&fwdt=88&ham=0&hbg=1&hfg=0&sid=0&mon=0&wek=0&wkf=0&sep=0&widget_number=11000&lcid=USNY0996,CUXX0003,JAXX0085,NLXX0002,RSXX0063,CHXX0008,BRXX0201,ASXX0112" type="text/javascript">null</script>
<a style="margin: 3px 0px; text-align: right; color: rgb(125, 125, 125); font-size: 9px; font-style: italic; text-decoration: none; display: block;" href="http://localtimes.info">localtimes.info</a></div>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:12px" />

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

<div class="region">
<center>
<ul class="line">
<li class="asia"><?php echo anchor('regions/asia', 'Asia') ?></li>
<li class="europe"><?php echo anchor('regions/Europe', 'Europe') ?></li>
</ul>
<ul>
<li class="africa"><?php echo anchor('regions/africa', 'Africa') ?></li>
<li class="north-america"><?php echo anchor('regions/north_america', 'North America') ?></li>
</ul>
<ul>
<li class="south-america"><?php echo anchor('regions/south_america', 'South America') ?></li>
<li class="oceania"><?php echo anchor('regions/oceania', 'Oceania') ?></li>
</ul>
<ul>
<li class="central-america"><?php echo anchor('regions/central_america', 'Central America') ?></li>
</ul>
<ul>
<li class="antartica"><?php echo anchor('regions/antarctica', 'Antarctica') ?></li>
</ul>
</center>
</div>

<div class="clear"><br /><br /></div>

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

<div class="other-region">
<center>
<ul>
<li class="indonesia"><?php echo anchor('regions/indonesia', 'Indonesia') ?></li>
</ul>
<ul>
<li class="middle_east"><?php echo anchor('regions/middle_east', 'Middle East') ?></li>
</ul>
<ul>
<li class="usa"><?php echo anchor('regions/usa', 'United States of America') ?></li>
</ul>
<ul>
<li class="russia"><?php echo anchor('regions/russia', 'Russia') ?></li>
<li class="china"><?php echo anchor('asia_countries/china', 'China') ?></li>
</ul>
<ul>
<li class="caribbean"><?php echo anchor('regions/caribbean', 'Caribbean') ?></li>
</ul>
</center>
</div>

</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt;<?php echo anchor('home/index', 'Home') ?>&gt;Worldmap</span></p>

<h2 style="margin-bottom:6px">World Facts</h2>
<p><strong>World population: <a href="http://www.worldometers.info/world-population" style="text-decoration:none;color:#AA99AE" target="_blank">7,199,570,377</a></strong><br />
<span style="font-size:x-small">(last updated:15/12/2013)</span></p>
<p>There are 196 independent countries around the world, all with their own capital city. <br /><br />
<?php echo anchor('africa_countries/south_sudan', 'South Sudan') ?> is the world's newest country. On July 9, 2011 South Sudan peacefully seceded from <?php echo anchor('africa_countries/sudan', 'Sudan') ?> following a January 2011 referendum.</p>
<p>The world's largest desert is the North African desert; the Saharan. The Arabian Desert in the <?php echo anchor('regions/middle_east', 'Middle East') ?> is the second largest desert.</p>
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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:8px" />

<!--Currency Converter widget - HTML code - fx-rate.net --> 
<div style="width: 160px; border:1px solid #000;background-color:#fff;align:center;text-align;left;margin:12px 0px 10px 10px;padding:0px 0px;"> 
<div style="text-align:center;font-size:11px; line-height:16px;font-family: arial;color:#173a00; font-weight:bold;background:#FFFFFF;padding:3px 3px;"> 
<a href="http://fx-rate.net/USD/" title="American Dollar Exchange Rate" style="text-decoration:none;color:#173a00;font-size:11px; line-height:16px;font-family: arial;" target="_blank"> <img border="" width="16" height="11" style="margin:0;padding:0;border:0;" src = "http://fx-rate.net/images/countries/us.png"></img> &#160; Dollar Exchange Rate</a> 
</div>		
<script type="text/javascript" src="http://fx-rate.net/fx-rates.php?currency=USD&length=short&label_type=currency_code"></script>
</div>
<!--end of code-->

</div>
<div class="bottom"></div>
</div>
<div class="clear"></div>

</div>

<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Worldmap -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="4731746747"></ins>
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
<li class="active"><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
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
<li><?php echo anchor('news/news_index', 'TRAVEL NEWS') ?></li>
<li><?php echo anchor('blog/blog_index', 'BLOG') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/sand.jpg" width="125px" style="margin-bottom:4px" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<p> <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use') ?> | <?php echo anchor('home/contact_us', 'Contact Us') ?> | &copy; Copyright <?php echo date('Y') ?> Holidaysrating All Rights Reserved</p>
</div>
<link href="<?php echo base_url() ?>assets/css/holiday.css" rel="stylesheet" type="text/css" />
</body>
</html>