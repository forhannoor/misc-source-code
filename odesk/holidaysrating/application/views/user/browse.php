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

<br/><br/>
<?php $user_information = $this->Ion_auth_model->get_user_information($this->uri->segment(3)) ?>

<?php foreach($user_information->result() as $info): ?>
<p class="profile-paragraph">First Name: <?php echo $info->first_name ?></p>
<p class="profile-paragraph">Last Name: <?php echo $info->last_name ?></p>
<p class="profile-paragraph">Email: <?php echo mailto($this->ion_auth->user()->row()->email, $info->email) ?></p>
<?php endforeach ?>

<?php foreach($profile_info->result() as $row): ?>
<p class="profile-paragraph"><?php echo 'Country: '.$row->country ?></p>
<p class="profile-paragraph"><?php echo 'My Favorite Destination: '.$row->favorite_destination ?></p>
<p class="profile-paragraph"><?php echo 'About me: '.$row->about ?></p>
<?php if($row->privacy==0): ?>
<p class="profile-paragraph"><?php echo 'Profile Privacy: Private' ?></p>
<?php else: ?>
<p class="profile-paragraph"><?php echo 'Profile Privacy: Public' ?></p>
<?php endif ?>
<br />
<?php endforeach ?>
<br/>

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
<p id="middle_link"><?php echo anchor('user/browse_picture/' . $this->uri->segment(3), 'Show All') ?></p>
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
<p id="middle_link"><?php echo anchor('topmenu/videodump', 'Show All') ?></p>
</div>
<br/>