<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="description" content="Travel Alerts"/>
<meta name="keywords" content="Travel Alerts"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta content="<?php echo base_url() ?>assets/images/blacklogo.jpg" property="og:image" />

<title>Travel Alerts | Travel News Holidaysrating</title>
</head>

<body>
<div id="top-head-news">
<div class="main">
<div class="logo">
	<img src="<?php echo base_url() ?>assets/images/logo.png" width="350" height="78" alt="logo" /></div>
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
<div id="banner-news">
<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- NewsTop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="9224371548"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

</div>

<div id="content">
<center><img src="<?php echo base_url() ?>assets/images/news/travel-news.png" alt="Travel News" /></center>
<div class="clear"></div>
<div class="left-side">
<div class="top-news"></div>
<div class="middle-news">
<div class="my_login">
<?php if($this->ion_auth->logged_in()): ?>
<h2>Welcome</h2>
<br/>
<?php if(isset($profile_info)): ?>
<?php foreach($profile_info->result() as $value): ?>
<p class="avatar"><?php echo anchor('user/index', img('./uploads/'.$value->avatar)) ?></p>
<?php endforeach ?>
<?php else: ?>
<p class="avatar"><?php echo anchor('user/index', img('assets/assets/avatar.jpg')) ?></p>
<?php endif ?>
<br />
<?php echo $this->session->userdata('username') ?>
<br/>
<?php echo 'Member since&nbsp;: ' . date("d-m-Y" , $this->session->userdata('created_on')) ?>
<br/>
<?php echo 'Last logged in: ' . date("d-m-Y" , $this->session->userdata('old_last_login')) ?>
<?php $new_message_counter = $this->User_model->count_new($this->session->userdata('user_id')) ?>
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
<div class="bottom-news"></div>
</div>


<div class="center">
<div class="hot" style="border:thin gray solid;background-color:#EBEBEB;padding:7px">
<img src="<?php echo base_url() ?>assets/images/travel-alert.png" style="float:right"/>
<p style="text-align:left"><strong>Travel Alerts</strong></p>
<p>Make sure you know everything about your next trip. Is it safe to go? These travel alerts are issued when long-term, protracted conditions make a country dangerous or unstable. 
Holidaysrating recommend that travellers avoid or consider the risk of travel to that country. The countries listed below meet those criteria.</p>
<div class="clear"></div>
<ul style="text-decoration:none;color:#808080;list-style:none;margin-left:10px;font-weight:bold;margin-top:15px">
<li style="font-size:24px;font-family:Georgia, 'Times New Roman', Times, serif">A</li>
<li><strong>Afghanistan</strong> <?php echo anchor('asia_countries/afghanistan', '(Click here)') ?></li>
<li><strong>Algeria</strong> <?php echo anchor('africa_countries/algeria', '(Click here)') ?></li>
<li><strong>Angola</strong> <?php echo anchor('africa_countries/angola', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">B</li>
<li><strong>Burkino Faso</strong> <?php echo anchor('africa_countries/burkino_faso', '(Click here)') ?></li>
<li><strong>Burundi</strong> <?php echo anchor('africa_countries/burundi', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">C</li>
<li><strong>Central African Republic</strong> <?php echo anchor('africa_countries/central_african_republic', '(Click here)') ?></li>
<li><strong>Chad</strong> <?php echo anchor('africa_countries/chad', '(Click here)') ?></li>
<li><strong>Colombia</strong> <?php echo anchor('central_america_countries/colombia', '(Click here)') ?></li>
<li><strong>Cote d'Ivoire</strong> <?php echo anchor('africa_countries/cote_d_ivore', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">D</li>
<li><strong>Democratic Republic of Congo</strong> <?php echo anchor('africa_countries/democratic_republic_of_congo', '(Click here)') ?></li>
<li><strong>Djibouti</strong> <?php echo anchor('africa_countries/djibouti', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">E</li>
<li><strong>Egypt</strong> <?php echo anchor('africa_countries/egypt', '(Click here)') ?></li>
<li><strong>El Salvador</strong> <?php echo anchor('central_america_countries/el_salvador', '(Click here)') ?></li>
<li><strong>Eritrea</strong> <?php echo anchor('africa_countries/eritrea', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">G</li>
<li><strong>Guinea</strong> <?php echo anchor('africa_countries/guinea', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">H</li>
<li><strong>Haiti</strong> <?php echo anchor('caribbean_countries/haiti', '(Click here)') ?></li>
<li><strong>Honduras</strong> <?php echo anchor('central_america_countries/honduras', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">I</li>
<li><strong>Iran</strong> <?php echo anchor('asia_countries/iran', '(Click here)') ?></li>
<li><strong>Israel (the West Bank and Gaza)</strong> <?php echo anchor('asia_countries/israel', '(Click here)') ?></li>
<li><strong>Iraq</strong> <?php echo anchor('asia_countries/iraq', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">K</li>
<li><strong>Kenya</strong> <?php echo anchor('africa_countries/kenya', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">L</li>
<li><strong>Lebanon</strong> <?php echo anchor('asia_countries/lebanon', '(Click here)') ?></li>
<li><strong>Libya</strong> <?php echo anchor('africa_countries/ibya', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">M</li>
<li><strong>Mali</strong> <?php echo anchor('africa_countries/mali', '(Click here)') ?></li>
<li><strong>Mauritania</strong> <?php echo anchor('africa_countries/mauritania', '(Click here)') ?></li>
<li><strong>Mexico</strong> <?php echo anchor('central_america_countries/mexico', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">N</li>
<li><strong>Niger</strong> <?php echo anchor('africa_countries/niger', '(Click here)') ?></li>
<li><strong>Nigeria</strong> <?php echo anchor('africa_countries/nigeria', '(Click here)') ?></li>
<li><strong>North Korea</strong> <?php echo anchor('asia_countries/north_korea', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">P</li>
<li><strong>Pakistan</strong> <?php echo anchor('asia_countries/pakistan', '(Click here)') ?></li>
<li><strong>Philippines</strong> <?php echo anchor('asia_countries/philippines', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">S</li>
<li><strong>Saudi Arabia</strong> <?php echo anchor('asia_countries/saudi_arabia', '(Click here)') ?></li>
<li><strong>Somalia</strong> <?php echo anchor('africa_countries/somalia', '(Click here)') ?></li>
<li><strong>South Sudan</strong> <?php echo anchor('africa_countries/south_sudan', '(Click here)') ?></li>
<li><strong>Sudan</strong> <?php echo anchor('africa_countries/sudan', '(Click here)') ?></li>
<li><strong>Syria</strong> <?php echo anchor('asia_countries/syria', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">T</li>
<li><strong>Tunisia</strong> <?php echo anchor('africa_countries/tunisia', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">Y</li>
<li><strong>Yemen</strong> <?php echo anchor('asia_countries/yemen', '(Click here)') ?></li>

<li style="font-size:20px;font-family:Georgia, 'Times New Roman', Times, serif;font-weight:bold;margin-top:18px">V</li>
<li><strong>Venezuela</strong> <?php echo anchor('central_america_countries/venezuela', '(Click here)') ?></li>
</ul>


<p style="margin-top:25px"><a href="#" onClick="history.go(-1)">Previous Page</a></p>
</div>

<div class="clear"></div>
</div>


<div class="right-side">
<div class="top-news"></div>
<div class="middle-news">
<p><span>You are here&gt;<?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('news/news_index', 'Travel News') ?>&gt; Travel Alerts</span></p>

<?php $this->load->view($right_bar_news) ?>

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
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>

<div class="google-right">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- NewsRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="5546397940"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<h2 style="margin-top:5px">Follow us</h2>
<p>Subscribe to our <?php echo anchor('http://www.holidaysrating.com/rss.xml', 'RSS') ?> Feed!</p>

</div>
<div class="bottom-news"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- NewsBottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="1701104741"></ins>
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
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVEL NEWS') ?></li>
<li><?php echo anchor('blog/blog_index', 'BLOG') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/logo-graffiti.jpg" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<p> <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use') ?> | <?php echo anchor('home/contact_us', 'Contact Us') ?> | &copy; Copyright <?php echo date('Y') ?> Holidaysrating All Rights Reserved</p>
</div>
</div>
<link href="<?php echo base_url() ?>assets/css/holiday.css" rel="stylesheet" type="text/css" />
</body>
</html>
