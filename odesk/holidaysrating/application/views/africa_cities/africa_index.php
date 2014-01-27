<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Cities of Africa"/>
<meta name="keywords" content="Cities, Africa, Largest cities Africa, Capital cities Africa"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>
<title>Cities of Africa</title>
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
<!-- CitiesTop -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="6046808745"></ins>
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
<?php $this->load->view('auth/my_login.php') ?>
<br />
<?php echo anchor('auth/forgot_password', 'Forgot Password') ?>
<?php echo hspace(4) ?>
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
<div class="hot">

<style type="text/css">
.list{
    width: 100%;
    height: 400px;
    overflow: auto;
}

.list h3{
	text-align: center;
}

.list p a{
	margin-left: 10px;
}
</style>

<div class="list">
<h3>Algeria</h3>
<p><?php echo anchor('africa_cities/algiers', 'Algiers') ?></p>
<p><?php echo anchor('africa_cities/constantine', 'Constantine') ?></p>
<p><?php echo anchor('africa_cities/tamanrasset', 'Tamanrasset') ?></p>

<h3>Angola</h3>
<p><?php echo anchor('africa_cities/luanda', 'Luanda') ?></p>
<p><?php echo anchor('africa_cities/lubango', 'Lubango') ?></p>
<p><?php echo anchor('africa_cities/namibe', 'Namibe') ?></p>

<h3>Benin</h3>
<p><?php echo anchor('africa_cities/cotonou', 'Cotonou') ?></p>
<p><?php echo anchor('africa_cities/porto_novo', 'Porto Novo') ?></p>

<h3>Botwana</h3>
<p><?php echo anchor('africa_cities/francistown', 'Francistown') ?></p>
<p><?php echo anchor('africa_cities/gaborone', 'Gabrone') ?></p>

<h3>Burkino Faso</h3>
<p><?php echo anchor('africa_cities/ouagadougou', 'Ouagadougou') ?></p>
<p><?php echo anchor('africa_cities/ouahigouya', 'Ouahigouya') ?></p>

<h3>Burundi</h3>
<p><?php echo anchor('africa_cities/bujumbura', 'Bujumbura') ?></p>
<p><?php echo anchor('africa_cities/gitega', 'Gitega') ?></p>

<h3>Cameroon</h3>
<p><?php echo anchor('africa_cities/bafoussam', 'Bafoussam') ?></p>
<p><?php echo anchor('africa_cities/maroua', 'Maroua') ?></p>
<p><?php echo anchor('africa_cities/douala', 'Douala') ?></p>
<p><?php echo anchor('africa_cities/yaounde', 'Yaoundé') ?></p>
<p><?php echo anchor('africa_cities/garoua', 'Garoua') ?></p>

<h3>Cape Verde</h3>
<p><?php echo anchor('africa_cities/pedra_badejo', 'Pedra Badejo') ?></p>
<p><?php echo anchor('africa_cities/santa_maria', 'Santa Maria') ?></p>
<p><?php echo anchor('africa_cities/praia', 'Praia') ?></p>

<h3>Central African Republic</h3>
<p><?php echo anchor('africa_cities/bangui', 'Bangui') ?></p>
<p><?php echo anchor('africa_cities/bimbo', 'Bimbo') ?></p>
<p><?php echo anchor('africa_cities/berberati', 'Berbérati') ?></p>

<h3>Chad</h3>
<p><?php echo anchor('africa_cities/n_djamena', 'N Djamena') ?></p>
<p><?php echo anchor('africa_cities/faya_largeau', 'Faya-Largeau') ?></p>

<h3>Comoros</h3>
<p><?php echo anchor('africa_cities/istandra', 'Istandra') ?></p>
<p><?php echo anchor('africa_cities/moroni', 'Moroni') ?></p>

<h3>Congo</h3>
<p><?php echo anchor('africa_cities/brazzaville', 'Brazzaville') ?></p>
<p><?php echo anchor('africa_cities/nkayi', 'Nkayi') ?></p>
<p><?php echo anchor('africa_cities/dolisie', 'Dolisie') ?></p>
<p><?php echo anchor('africa_cities/pointe_noire', 'Pointe-Noire ') ?></p>
<p><?php echo anchor('africa_cities/kindamba', 'Kindamba') ?></p>

<h3>Côte d'Ivore</h3>
<p><?php echo anchor('africa_cities/abidjan', 'Abidjan') ?></p>
<p><?php echo anchor('africa_cities/daloa', 'Daloa') ?></p>
<p><?php echo anchor('africa_cities/abobo', 'Abobo') ?></p>
<p><?php echo anchor('africa_cities/yamoussoukro', 'Yamoussoukro') ?></p>
<p><?php echo anchor('africa_cities/bouake', 'Bouaké') ?></p>

<h3>Democratic Republic of Congo</h3>
<p><?php echo anchor('africa_cities/goma', 'Goma') ?></p>
<p><?php echo anchor('africa_cities/lubumbashi', 'Lubumbashi') ?></p>
<p><?php echo anchor('africa_cities/kinshasa', 'Kinshasa') ?></p>
<p><?php echo anchor('africa_cities/mbuji_mayi', 'Mbuji-Mayi') ?></p>

<h3>Djibouti</h3>
<p><?php echo anchor('africa_cities/djibouti_city', 'Djibouti City') ?></p>
<p><?php echo anchor('africa_cities/ali_sabieh', 'Ali Sabieh') ?></p>

<h3>Egypt</h3>
<p><?php echo anchor('africa_cities/alexandria', 'Alexandria') ?></p>
<p><?php echo anchor('africa_cities/giza', 'Giza') ?></p>
<p><?php echo anchor('africa_cities/cairo', 'Cairo') ?></p>
<p><?php echo anchor('africa_cities/shubra_el_kheima', 'Shubra El-Kheima') ?></p>

<h3>Equatorial Guinea</h3>
<p><?php echo anchor('africa_cities/bata', 'Bata') ?></p>
<p><?php echo anchor('africa_cities/malabo', 'Malabo ') ?></p>

<h3>Eritrea</h3>
<p><?php echo anchor('africa_cities/asmara', 'Asmara') ?></p>
<p><?php echo anchor('africa_cities/keren', 'Keren') ?></p>

<h3>Ethiopia</h3>
<p><?php echo anchor('africa_cities/adama', 'Adama') ?></p>
<p><?php echo anchor('africa_cities/dire_dawa', 'Dire Dawa') ?></p>
<p><?php echo anchor('africa_cities/addis_ababa', 'Addis Ababa') ?></p>
<p><?php echo anchor('africa_cities/mek_ele', 'Mek ele') ?></p>

<h3>Gabon</h3>
<p><?php echo anchor('africa_cities/libreville', 'Libreville') ?></p>
<p><?php echo anchor('africa_cities/port_gentil', 'Port-Gentil') ?></p>

<h3>Gambia</h3>
<p><?php echo anchor('africa_cities/brikama', 'Brikama') ?></p>
<p><?php echo anchor('africa_cities/banjul', 'Banjul') ?></p>
<p><?php echo anchor('africa_cities/bakau', 'Bakau') ?></p>


<h3>Ghana</h3>
<p><?php echo anchor('africa_cities/accra', 'Accra') ?></p>
<p><?php echo anchor('africa_cities/sekondi_takoradi', 'Sekondi-Takoradi') ?></p>
<p><?php echo anchor('africa_cities/kumasi', 'Kumasi') ?></p>
<p><?php echo anchor('africa_cities/tamale', 'Tamale') ?></p>

<h3>Guinea</h3>
<p><?php echo anchor('africa_cities/conakry', 'Conakry') ?></p>
<p><?php echo anchor('africa_cities/nzerekore', 'Nzérékoré') ?></p>

<h3>Guinea-Bissau</h3>
<p><?php echo anchor('africa_cities/bafata', 'Bafatá') ?></p>
<p><?php echo anchor('africa_cities/bissau', 'Bissau') ?></p>

<h3>Kenya</h3>
<p><?php echo anchor('africa_cities/nairobi', 'Nairobi') ?></p>
<p><?php echo anchor('africa_cities/mombasa', 'Mombasa') ?></p>

<h3>Lesotho</h3>
<p><?php echo anchor('africa_cities/mafeteng', 'Mafeteng') ?></p>
<p><?php echo anchor('africa_cities/teyateyaneng', 'Teyateyaneng') ?></p>
<p><?php echo anchor('africa_cities/maseru', 'Maseru') ?></p>

<h3>Liberia</h3>
<p><?php echo anchor('africa_cities/gbarnga', 'Gbarnga') ?></p>
<p><?php echo anchor('africa_cities/monrovia', 'Monrovia') ?></p>
</div>

<br />
<br />	
<p><a href="#" onClick="history.go(-1)">Previous Page</a></p>
</div>
</div>

<div class="right-side">
<div class="top"></div>
<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt; <?php echo anchor('regions/africa', 'Africa') ?>&gt; Largest cities</span></p>
<h2>Cities of Africa</h2>
<p>Many of Africa's larger cities are not necessarily places of interest to the average tourist. But most of the international airports, tourist offices, embassies, major hospitals, large hotels and banks are based just outside the cities.</p>
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
<script async src="file:///pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- AfricaRight -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="7346031941"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:8px" />
<!--Currency Converter widget - HTML code - fx-rate.net --> 
<div style="width: 178px; border:1px solid #000;background-color:#fff;align:center;text-align;left;margin:10px 0px 10px 20px;padding:0px 0px;"> 
<div style="text-align:center;font-size:11px; line-height:16px;font-family: arial;color:#173a00; font-weight:bold;background:#FFFFFF;padding:3px 3px;"> 
<a href="http://fx-rate.net/USD/" title="American Dollar Exchange Rate" style="text-decoration:none;color:#173a00;font-size:11px; line-height:16px;font-family: arial;"> <img border="" width="16" height="11" style="margin:0;padding:0;border:0;" src = "http://fx-rate.net/images/countries/us.png"></img> &#160; Dollar Exchange Rate</a> 
</div>		
<script type="text/javascript" src="http://fx-rate.net/fx-rates.php?currency=USD&length=short&label_type=currency_code"></script></div>
<!--end of code-->

</div>
<div class="bottom"></div>
</div>
<div class="clear"></div>
<div id="footer">

<div class="google">
<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- CitiesBottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-0797455318364345"
     data-ad-slot="7523541940"></ins>
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
<link href="<?php echo base_url() ?>assets/css/holiday.css" rel="stylesheet" type="text/css" />
</body>
</html>