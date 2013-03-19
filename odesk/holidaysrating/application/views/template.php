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

<div id="slider">
<div class="slideshow"><div class="panel">
 	<div class="container">
        <div class="wt-rotator">
            <div class="screen">
                <noscript><img src="<?php echo base_url() ?>assets/images/triworks_abstract17.jpg"/></noscript>
            </div>
            <div class="c-panel">
                <div class="buttons">
                    <div class="prev-btn"></div>
                     
                    <div class="next-btn"></div>               
                </div>
                <div class="thumbnails">
                    <ul>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/1.jpg" title="Daintree National Park"><img src="<?php echo base_url() ?>assets/images/thumbs/triworks_abstract17.jpg"/></a>
                            <a href="#" target="_blank"></a>                        
                            <div style="left:5px; top:94px; width:336px; height:0;"> 
                            	<h1>Daintree National Park</h1>
                            	The world's oldest tropical rainforest located close to Cairns, Queensland in Australia. Where reef meets rainforest! 
                            	Tell us your travel story...</div>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/2.jpg" title="Egypt"><img src="<?php echo base_url() ?>assets/images/thumbs/sf.jpg"/></a>
                            <a href="#" target="_blank"></a>
                            <div style="left:5px; top:36px; width:336px; height:0; color:#000; background-color:#FFF"> 
                                <h1 style="color:#0CF">Pyramids of Egypt</h1>
                                Visit the ancient wonders of the world. All over the world are these hidden jewels. Every single one with his own story! Just like you...</div>                                                  	
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/3.jpg" title="Tankuban Perahu"><img src="<?php echo base_url() ?>assets/images/thumbs/triworks_abstract26.jpg"/></a>   
                            <a href="#" target="_blank"></a>
                            <div style="left:5px; top:36px; width:336px; height:0; color:#000; background-color:#FFF">
                            	<h1 style="color:#0CF">Tankuban Perahu</h1>
                                Visit this dormant vulcano, 25 km north of the city Bandung in West-Java, Indonesia.
                                Find more information about the world's most beautiful destinations...</div>                                                          	                   
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/4.jpg" title="Saint Martin"><img src="<?php echo base_url() ?>assets/images/thumbs/tokyo.jpg"/></a>                  
                            <a href="#" target="_blank"></a>
                            <div style="left:5px; top:36px; width:350px; height:0;"> 
                                <h1>Saint Martin</h1>
                                Explore the stunning beaches of the Caribbean. What is your favorite travel experience? Be our guide and upload your travel pictures and videos...</div>                                          	                          
                        </li>     
                    </ul>
                </div>     
            </div>
        </div>	
  	</div>    
</div>
<!--<img src="images/slider.png" alt="slideshow" title="slideshow" />--></div>
</div>

<div id="content"><h1>{heading}</h1>
<div class="clear"></div>
<div class="left-side">
<div class="top"></div>
<div class="middle">
<?php if($this->ion_auth->logged_in()): ?>
<h2>Status</h2>
<br/>
<?php echo img(base_url().'assets/images/avatars/afro_48.png') ?>
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
<?php //echo anchor('auth/login', 'Login') ?>
<?php include 'auth/my_login.php' ?>
<br>
<?php echo anchor('auth/forgot_password', 'Forgot Password') ?>
&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo anchor('auth/register', 'Register') ?>
<!--
<h2>Member Login</h2>
<form class="form">
<input type="text" value="Username" />
<input type="password"/>
<div class="button">Login</div>
<p>Not a member yet?  <a href="my-profile/register-here.html">Register here</a></p>
</form> -->
<?php endif ?>
<!--img src="<?php echo base_url() ?>assets/images/border.png" alt="border" / -->
<br>
<br>
<h2>Members online</h2>
<p>Holidaysrating is a new, fun and social website where you can search for information, vote for your favorite destination or share your holiday experience!</p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<form name="Search">
<h2>Search</h2>
<select name="Region"><option value="">-- Choose region --</option>

<option value="Africa">Africa</option>
<option value="Asia">Asia</option>
<option value="Europe">Europe</option>
<option value="North America">North America</option>
<option value="Oceania">Oceania</option>
<option value="South America">South America</option>
<option value="Central America and the Caribbean">Central America/ Caribbean</option>
<option value="Favorites">Favorites</option>
</select>
<br />

<select name="Country" ><option value="">-- Choose country --</option>
<option value="html/countries/africa/algeria.html">Algeria</option>
 
</select>
<br />
<div class="button">Go</div>
</form>
</div>
<div class="bottom"></div>
</div>

<div class="center"><?php include $main ?></div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<h2>Welcome to...</h2>
<p>Holidaysrating is a new, fun and social website where you can search for 
information, vote for your favorite destination or share your holiday 
experience!</p>
	<p>Become a free member and be our travelguide!</p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2>Like it..</h2>
<div class="social">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-512f1c611545a1da"></script>
<!-- AddThis Button END -->
</div>
<div class="clear"></div>
<div class="fb-activity" data-site="http://www.holidaysrating.com" data-width="185" data-height="245" data-header="true" data-recommendations="true"></div></div>

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