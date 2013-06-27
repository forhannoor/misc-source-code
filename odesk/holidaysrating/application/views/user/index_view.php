<div class="profile_view">
<p class="avatar">
<?php foreach($profile_info->result() as $x): ?>
<?php $avatar_properties=array('src' => './uploads/'.$x->avatar, 'alt' => 'No Avatar') ?>
<?php endforeach ?>
<?php if(isset($x->avatar)): ?>
<?php echo img($avatar_properties) ?>
<?php endif ?>
</p>
<br />
<?php if($this->ion_auth->is_admin()): ?>
<?php echo anchor('admin/index', 'Admin Section') ?>
<?php endif ?>
<br/><br/>
<p class="profile-paragraph">First Name: <?php echo $this->ion_auth->user()->row()->first_name ?></p>
<p class="profile-paragraph">Last Name: <?php echo $this->ion_auth->user()->row()->last_name ?></p>
<p class="profile-paragraph">Email: <?php echo mailto($this->ion_auth->user()->row()->email, $this->ion_auth->user()->row()->email) ?></p>
<?php foreach($profile_info->result() as $row): ?>
<p class="profile-paragraph"><?php echo 'Country I live in: '.$row->country ?></p>
<p class="profile-paragraph"><?php echo 'My Favorite Destination: '.$row->favorite_destination ?></p>
<p class="profile-paragraph"><?php echo 'About me: '.$row->about ?></p>
<?php if($row->privacy==0): ?>
<?php echo 'Profile Privacy: Private' ?>
<?php else: ?>
<p class="profile-paragraph"><?php echo 'Profile Privacy: Public' ?></p>
<?php endif ?>
<br />
<?php endforeach ?>
<br/>
<?php if(count($profile_info->result())==0): ?>
<?php echo anchor('user/add_profile_info', 'Add Profile') ?>
<?php else: ?>
<?php echo anchor('user/edit_profile_info', 'Edit Profile') ?>
<?php endif ?>
&nbsp;
<?php foreach($banner->result() as $value): ?>
<?php if(strcmp($value->name, 'default.png')==0): ?>
<?php echo anchor('user/add_banner', 'Add Banner') ?>
<?php else: ?>
<?php echo anchor('user/edit_banner', 'Edit Banner') ?>
<?php endif ?>
<?php endforeach ?>
<br/><br/>
<br/><br/>
<h1>Uploaded Pictures</h1>
<div class="middle">
    <?php foreach($pictures->result() as $value): ?>
    <?php if(strcmp('image', $value->category)==0): ?>
    <?php $img_properties=array('src' => './uploads/media/'.$value->name) ?>
    <?php echo anchor('user/show_picture/'.$value->name , img($img_properties)) ?>
    <?php endif ?>
    <?php endforeach ?>
</div>
<br/>
<p id="middle_link"><?php echo anchor('user/show_picture/all', 'Show All') ?></p>
<br/>
<br/><br/>
<h1>Uploaded Videos</h1>
<div class="middle">
    <?php foreach($videos as $video): ?>
    <?php $thumbnail = array('src' => 'assets/images/thumbnail.jpg', 'title' => $video->orig_name) ?>
    <?php echo anchor('topmenu/video/'.$video->name, img($thumbnail)) ?>
    <?php endforeach ?>
</div>
<br/>
<p id="middle_link"><?php echo anchor('user/show_video/all', 'Show All') ?></p>
</div>
<br/>