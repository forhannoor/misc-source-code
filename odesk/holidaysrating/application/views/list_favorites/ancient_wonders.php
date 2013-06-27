<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Favorites.. Ancient wonders"/>
<meta name="keywords" content="wonders, ancient wonders, favorites, favoriteslist"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>

<title>Ancient wonders</title>
<link href="<?php echo base_url() ?>assets/css/list-favorites.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/wt-rotator.css"/>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.wt-rotator.min.js"></script>    
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/preview.js"></script>
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
<li><?php echo anchor('topmenu/vote_now', 'VOTE NOW') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/main_blog', 'BLOG') ?></li>
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

<div id="content">
	<h1>Favorites</h1>
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
<h2>Advertise here</h2>
<p>Holidaysrating is a new, fun and social website where you can search for information, vote for your favorite destination or share your holiday experience!</p>
</div>

<div class="bottom"></div>
</div>

<div class="center">
<div class="hot">
<h1>Introduction</h1>
<p>The 7 wonders from the ancient world. On this original list, 
the only one still in existence is the Great pyramid of Giza.</p>
<ul>
<li>Great pyramid of Giza, Egypt</li>
<li>Hanging Gardens of Babylon, Iraq - destroyed by earthquakes</li>
<li>Temple of Artemis, Turkey - destroyed by plundering</li>
<li>Statue of Zeus, Greece - dissasembled and later destroyed by fire</li>
<li>Mausoleum at Halicarnassus, Turkey - destroyed by earthquakes</li>
<li>Collossus of Rhodes, Turkey - destroyed by earthquake</li>
<li>Lighthouse of Alexandria, Egypt - destroyed by earthquake</li>
</ul>
<p>In 2000 after global-voting a new list came out. Below you will find the new list of  7 world wonders.</p>
<ul>
<li>Taj mahal, India</li>
<li>Chichen Itza, Mexico</li>
<li>Christ the Redeemer, Brazil</li>
<li>Colosseum, Italy</li>
<li>Great wall of China, China</li>
<li>Machu Picchu, Peru</li>
<li>Petra, Jordan</li>
</ul>
<p>These are all man-made wonders. Below is the list of 7 natural wonders..</p>
<ul>
<li>Grand canyon, USA</li>
<li>Great Barrier Reef, Australia</li>
<li>Harbor of Rio de Janeiro, Brazil</li>
<li>Mount Everest, Nepal</li>
<li>Aurora, Artic and Antartica</li>
<li>Paricutin, vulcano, Mexico</li>
<li>Victoria Falls, Zambia and Zimbabwe</li>
</ul>


</div>
<div class="clear"></div>
<div class="latest-news">
<p>The 7 wonders from the ancient world. On this original list, 
the only one still in existence is the Great pyramid of Giza.</p>
<ul>
<li>Great pyramid of Giza, Egypt</li>
<li>Hanging Gardens of Babylon, Iraq - destroyed by earthquakes</li>
<li>Temple of Artemis, Turkey - destroyed by plundering</li>
<li>Statue of Zeus, Greece - dissasembled and later destroyed by fire</li>
<li>Mausoleum at Halicarnassus, Turkey - destroyed by earthquakes</li>
<li>Collossus of Rhodes, Turkey - destroyed by earthquake</li>
<li>Lighthouse of Alexandria, Egypt - destroyed by earthquake</li>
</ul>
<p>In 2000 after global-voting a new list came out. Below you will find the new list of  7 world wonders.</p>
<ul>
<li>Taj mahal, India</li>
<li>Chichen Itza, Mexico</li>
<li>Christ the Redeemer, Brazil</li>
<li>Colosseum, Italy</li>
<li>Great wall of China, China</li>
<li>Machu Picchu, Peru</li>
<li>Petra, Jordan</li>
</ul>
<p>These are all man-made wonders. Below is the list of 7 natural wonders..</p>
<ul>
<li>Grand canyon, USA</li>
<li>Great Barrier Reef, Australia</li>
<li>Harbor of Rio de Janeiro, Brazil</li>
<li>Mount Everest, Nepal</li>
<li>Aurora, Artic and Antartica</li>
<li>Paricutin, vulcano, Mexico</li>
<li>Victoria Falls, Zambia and Zimbabwe</li>
</ul>
</div>


</div>


<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/favorites', 'Favorites') ?>&gt;Ancient wonders</span></p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2>Video..</h2>
<p>Holidaysrating is a brand new website where you can search for information, vote for your favorite destination or share your holiday experience!</p>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2>Links</h2>

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


</div>
<div id="footer">

<div class="google"></div>
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
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/globe-slogin.jpg" alt="logo" /></center>
</div>
<div class="clear"></div>
<p> <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use') ?> | &copy; Copyright 2013 Holidays Rating All Rights Reserved</p>
</div>

</body>
</html>
