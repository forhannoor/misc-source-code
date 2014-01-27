<div class="profile_view">
<p class="avatar">
<?php if(isset($profile_info->avatar)): ?>
<?php echo img('./uploads/' . $profile_info->avatar) ?>
<?php else: ?>
<?php echo img('assets/assets/avatar.jpg') ?>
<?php endif ?>
<br/>
<?php if(isset($profile_info->display_name)): ?>
<?php echo $profile_info->display_name ?>
<?php endif ?>
</p>
<br/>
<div class="button-links">
<?php if($this->ion_auth->is_admin()): ?>
<?php echo anchor('admin/index', img('assets/assets/admin.png')); ?>
<?php endif ?>
</div>
<p class="profile-paragraph">Name: <?php echo $this->User_model->get_name($this->session->userdata('user_id')) ?></p>
<p class="profile-paragraph"><?php echo 'Country: '.$profile_info->country ?></p>
<p class="profile-paragraph"><?php echo 'My Favorite Destination: '.$profile_info->favorite_destination ?></p>
<p class="profile-paragraph"><?php echo 'About me: '.$profile_info->about ?></p>
<p class="profile-paragraph"><?php echo ($profile_info->privacy == 0) ? 'Privacy: Public' : 'Privacy: Private' ?></p>
<br />
<div class="button-links">
<?php if(count($profile_info)==0): ?>
<?php echo anchor('user/add_profile', img('assets/assets/add-profile.png')); ?>
<?php else: ?>
<?php echo anchor('user/edit_profile', img('assets/assets/edit-profile.png')); ?>
<?php endif ?>
&nbsp;
<?php echo anchor('user/add_banner', img('assets/assets/add-banner.png')); ?>
</div>
<br/>
<?php echo img('assets/images/user/bucket-list.jpg') ?>
<?php if(count($bucket_list) == 0): ?>
<center><p>Your list is empty!</p></center>
<?php else: ?>
<ul>
<?php foreach($bucket_list as $item): ?>
<li><?php echo anchor($item->url, $item->url) ?></li>
<?php endforeach ?>
</ul>
<?php endif ?>
<br/><br/>
<br/><br/>
<?php echo img('assets/images/user/pics.jpg') ?>
<div class="middle">
    <?php foreach($pictures as $picture): ?>
    <?php $img_properties=array('src' => './uploads/media/'.$picture->name) ?>
    <?php echo anchor('user/show_picture/'.$picture->name , img($img_properties)) ?>
    <?php endforeach ?>
</div>
<br/>
<p id="middle_link"><?php echo anchor('user/show_picture/all', 'Show All') ?></p>
<br/>
<br/><br/>
<?php echo img('assets/images/user/videos.jpg') ?>
<div class="middle">
    <?php foreach($videos as $video): ?>
    <?php $thumbnail = array('src' => 'assets/images/thumbnail.jpg', 'title' => $video->orig_name) ?>
    <?php echo anchor('topmenu/video/'.$video->name, img($thumbnail)) ?>
    <?php endforeach ?>
</div>
<br/>
<p id="middle_link"><?php echo anchor('topmenu/videodump', 'Show All') ?></p>
</div>
<br/>