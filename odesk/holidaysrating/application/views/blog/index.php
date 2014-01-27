<div class="hot">
<p>Don't know where to go this year? Looking for information or just curious? Read the story of our travelguides. Below you can find the various stories.</p>
<br />
<div class="stamp">
<p style="margin:15px 0 8px 0;color:#ed1f28">Follow Raymond in Dominica, Caribbean <br /><?php echo anchor('blog/raymond', 'Click here') ?></p>
<p style="margin-bottom:8px;color:#ed1f28">Josh knows his way in beautiful Israel <br /><?php echo anchor('blog/josh', 'Click here') ?></p>
<p style="margin-bottom:8px;color:#ed1f28">Explore Australia with Angie - <font color="black">NEW</font> <br /><?php echo anchor('blog/angie', 'Click here') ?></p>
<p style="margin-bottom:8px;color:#ed1f28">Java, Bali, Lombok and the Gili's - <font color="black">NEW</font> <br /><?php echo anchor('blog/java_bali_lombok', 'Click here') ?></p>

<?php foreach($blogs as $blog): ?>
<?php echo anchor('blog/read/' . $blog->id, $blog->title) ?>
<br />
<?php endforeach ?>
<br />
<?php echo anchor('blog/all', 'Show All') ?>
</div>

<center><img src="<?php echo base_url() ?>assets/images/footer-bg.jpg" alt="Holidaysrating" style="margin-top:3px;margin-bottom:15px" /></center>
<iframe width="472" height="210"  src="http://www.youtube-nocookie.com/embed/4G25o60_WY4" frameborder="0" allowfullscreen></iframe>
</div>