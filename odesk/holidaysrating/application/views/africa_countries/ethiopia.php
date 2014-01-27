<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Ethiopia"/>
<meta name="keywords" content="Ethiopia, Ethiopia Travel"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<meta name="language" content="English" />
<meta content="<?php echo base_url() ?>assets/images/flags/africa/ethiopia.gif" property="og:image" />

<title>Ethiopia | Africa</title>
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
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('blog/blog_index', 'BLOG') ?></li>
<li><?php echo anchor('news/news_index', 'TRAVELNEWS') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
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
                            <a href="<?php echo base_url() ?>assets/images/countries/africa/ethiopia/blue-nile.jpg" title="Blue Nile"><img src="<?php echo base_url() ?>assets/images/thumbs/triworks_abstract17.jpg"/></a>
                            <a href="#" target="_blank"></a>                        
                            <div style="left:5px; top:94px; width:336px; height:0;"> 
                            	<h1>Blue Nile, Ethiopia</h1>
                            	Blue Nile, Ethiopia. Have you been here? Share your holiday experience with us. Upload your favorite picture or video!</div>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/countries/africa/ethiopia/tribal-family.jpg" title="Tribal Family"><img src="<?php echo base_url() ?>assets/images/thumbs/sf.jpg"/></a>
                            <a href="#" target="_blank"></a>
                            <div style="left:5px; top:36px; width:336px; height:0; color:#000; background-color:#FFF"> 
                                <h1 style="color:#0CF">Ethiopia's tribal family</h1>
                                Aren't they cute? Meet the locals in Ethiopia!</div>                                                  	
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/countries/africa/ethiopia/zebra.jpg" title="Zebra"><img src="<?php echo base_url() ?>assets/images/thumbs/triworks_abstract26.jpg"/></a>   
                            <a href="#" target="_blank"></a>
                            <div style="left:5px; top:36px; width:336px; height:0; color:#000; background-color:#FFF">
                            	<h1 style="color:#0CF">Wildlife in Ethiopia</h1>
                                Wildelife; spot zebra's during a safari.</div>                                                          	                   
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/countries/africa/ethiopia/royal-palace.jpg" title="Royal Palace"><img src="<?php echo base_url() ?>assets/images/thumbs/tokyo.jpg"/></a>                  
                            <a href="#" target="_blank"></a>
                            <div style="left:5px; top:36px; width:350px; height:0;"> 
                                <h1>Royal Palace in Ethiopia, Africa</h1>
                                Royal palace in beautiful Ethiopia.</div>                                          	                          
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

<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />

<?php $this->load->view($left_sidebar) ?>

</div>

<div class="bottom"></div>
</div>

<div class="center">
<div class="hot">
<h1>Introduction</h1>
<div class="flag" style="float:left"><img src="<?php echo base_url() ?>assets/images/flags/africa/ethiopia.jpg" alt="Ethiopia" />
<p style="float:right;width:75%"><strong>Ethiopia</strong> is a country in the Horn of <?php echo anchor('regions/africa', 'Africa') ?> and has a size of 1,127,127 square kilometres. <?php echo anchor('africa_cities/addis_ababa', 'Addis Ababa') ?> is the capital and largest city. English and Amharic are the official languages spoken in Ethiopia but Omotic and 90 other indiginous languages are also commonly spoken.</p>
<br />
<h5><?php echo $this->session->flashdata('msg') ?></h5>
</div>
<div class="travel-alerts">
<p 	style="color:#FFA928;margin-bottom:6px">Holidaysrating advise you to exercise a high degree of caution in Ethiopia due to the the threat of terrorist attack against Western interests and ongoing tensions. Therefore we advise you to reconsider your need to travel. <a style="color:#808080" href="http://www.holidaysrating.com/index.php/news/travel_alerts">See also Travel Alerts</a></p>
</div>
<p>Trekking rugged range, the Simien mountains, visiting simple mountain villages, or spot wildlife like the unbothered gelada baboon or the extravagantly horned wyala ibexes, Ethiopia is considered the cradle of mankind, and is home to many of the oldest sites of human existence known to us. It is also home to many of the most significant sites and artefacts of the world’s major religions.</p>

<div class="country-menu">
<ul>
<li><?php echo anchor('africa_before_you_go/ethiopia_before', img('assets/images/countries/menu/before-you-go.png')); ?></li>
<li><?php echo anchor('africa_entry/ethiopia_entry', img('assets/images/countries/menu/entry.png')); ?></li>
<li><?php echo anchor('africa_adventures/ethiopia_index', img('assets/images/countries/menu/adventures.png')); ?></li>
<li><?php echo anchor('africa_must_see/ethiopia_see', img('assets/images/countries/menu/must-see.png')); ?></li>
</ul>
<ul>
<li><?php echo anchor('africa_getting_around/ethiopia_around', img('assets/images/countries/menu/getting-around.png')); ?></li>
<li><?php echo anchor('africa_health/ethiopia_health', img('assets/images/countries/menu/health.png')); ?></li>
<li><?php echo anchor('africa_local_food/ethiopia_food', img('assets/images/countries/menu/food.png')); ?></li>
<li><?php echo anchor('africa_public_holidays/ethiopia_holidays', img('assets/images/countries/menu/holidays.png')); ?></li>
</ul>
</div>

<h1>Climate</h1>
<p>Ethiopia has three different climate zones according to elevation.<br />
The tropical zone (Kolla) is below 1830 metres in elevation and an average annual temperature of about 27°C with annual rainfall about 510mm. The Danakil Desert is about 125 metres below sea level and the hottest region in Ethiopia where the temperature climbs up to 50°C.
The subtropical zone (Woina dega) includes the highlands areas of 1830 - 2440 meters in elevation, it has an average annual temperature of about 22°C with annual rainfall between 510 and 1530mm.
Then the cool zone (Dega) is above 2440 metres in elevation with an average annual temperature of about 16°C with annual rainfall between 1270 and 1280mm.<br /><br />

Summer is from June, July and August. Heavy rain falls occurs in these three months.
Spring goes from September to November also known as the harvest season. The wintermonths would be December, January and February, which is the dry season with frost in morning.
And at last, Autumn from March to May with occasional showers. May is the hottest month in Ethiopia.</p>

<h1>Flora and Fauna</h1>
<p>The lower areas have sparse vegetation consisting of desert shrubs, thorn bushes, and coarse savanna grasses. In the valleys and ravines, almost every form of African vegetation grows in abundance. And the rest of the country is mainly covered with grassland.
Wildlife includes the giraffe, leopard, hippopotamus, lion, elephant, antelope, and rhinoceros. The caracal, jackal, hyena, and various species of monkeys are also common. 
Ethiopia is also home to 813 bird species. Birds of prey include the eagle, hawk, and vulture. Heron, parrot, and such game birds as the snipe, partridge, teal, pigeon, and bustard are found in abundance. <?php echo anchor('africa_national_parks/ethiopia_parks', '(visit National Parks)') ?></p>

<!-- Currency Converter script - fx-rate.net --> 
<div style="width:474px; background-color:white;border:2px solid #888;text-align:center;margin-top:10px;padding:0px"> 
<div style="background-color:#AEAF61 ;border-bottom:1px solid #888;width:100%;margin:0px;padding:0px;align:center;text-align:center;">
<a title="Ethiopian Birr Converter" class="HS1label" style="font-size:12px!important; line-height:16px!important;font-family: arial;text-decoration:none;color:#132105;margin-bottom:6px;" target="_blank" href="http://fx-rate.net/ETB/"><b>Ethiopian Birr Converter</b></a>
</div> <script type="text/javascript" src="http://fx-rate.net/converter.php?size=short&layout=horizontal&currency=ETB"></script></div> 
<!-- End of Currency Converter script --> 


</div>

<div class="clear"></div>
<div class="comment">
<img src="<?php echo base_url() ?>assets/images/comments.png" alt="comment" style="margin-left:300px" /><?php echo anchor('user/make_comment/ethiopia', 'Leave a comment') ?>
</div>

</div>


<div class="right-side">
<div class="top"></div>

<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt;Ethiopia</span></p>

<iframe width="175" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Ethiopia&amp;aq=&amp;sll=15.179384,39.782334&amp;sspn=6.909329,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=Ethiopia&amp;t=m&amp;ll=8.711359,39.375&amp;spn=5.210848,7.646484&amp;z=5&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Ethiopia&amp;aq=&amp;sll=15.179384,39.782334&amp;sspn=6.909329,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=Ethiopia&amp;t=m&amp;ll=8.711359,39.375&amp;spn=5.210848,7.646484&amp;z=5" target="_blank" style="color:#5F6A6F;text-align:left">View Larger Map</a></small>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
	
<div class="key-facts">	
<h2>Key Facts</h2>
<ul>
<li><strong>Capital city:</strong></li>
<li><?php echo anchor('africa_cities/addis_ababa', 'Addis Ababa') ?></li>

<li><strong>Size:</strong></li>
<li>1,104,300 km²</li>
<li>426,371 sq mi</li>

<li><strong>Water:</strong></li>
<li>0.7%</li>

<li><strong>Highest point:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/mountain.png" style="margin-right:5px" alt="mountain"/>Ras Dashen</li>
<li>4,550 metres (14,928 ft)</li>

<li><strong>Time zone:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/clock.png" style="margin-right:5px" alt="clock"/><?php echo anchor('time/utc', 'UTC') ?> +3 <?php echo anchor('time/eat', '(EAT)') ?></li>

<li><strong>Calling code:</strong></li>
<li><img src="<?php echo base_url() ?>assets/assets/phone.png" style="margin-right:5px" alt="phone"/>+251</li>
</ul>
</div>

<h2>Cities</h2>
<ul>
<li><?php echo anchor('africa_cities/adama', 'Adama') ?></li>
<li><?php echo anchor('africa_cities/dire_dawa', 'Dire Dawa') ?></li>
<li><?php echo anchor('africa_cities/mek_ele', 'Mek ele') ?></li>
</ul>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
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
<!-- AfricaCountriesRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:180px;height:150px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="9874022741"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<h2>Explore Ethiopia</h2>
<ul>
<li>Coming soon</li>
</ul>

</div>
<div class="bottom"></div>
</div>

<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- AfricaCountries -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="6225375940"></ins>
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
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/photos.jpg" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<p> <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use') ?> | <?php echo anchor('home/contact_us', 'Contact Us') ?> | &copy; Copyright <?php echo date('Y') ?> Holidaysrating All Rights Reserved</p>
</div>
</div>
<link href="<?php echo base_url() ?>assets/css/country.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/wt-rotator.css"/>
</body>
</html>
