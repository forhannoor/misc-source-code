<div class="profile_view">
<?php foreach($profile_info->result() as $x): ?>
<?php $avatar_properties=array('src' => './uploads/'.$x->avatar, 'alt' => 'No Avatar') ?>
<?php endforeach ?>
<?php echo img($avatar_properties) ?>
<br/><br/>
<p>First Name: <?php echo $this->ion_auth->user()->row()->first_name ?></p>
<p>Last Name: <?php echo $this->ion_auth->user()->row()->last_name ?></p>
<p>Email: <?php echo $this->ion_auth->user()->row()->email ?></p>
<?php foreach($profile_info->result() as $row): ?>
<?php echo 'Country: '.$row->country ?>
<br />
<?php echo 'Favorite Destination: '.$row->favorite_destination ?>
<br />
<?php echo 'About: '.$row->about ?>
<br />
<?php if($row->privacy==0): ?>
<?php echo 'Profile Privacy: Private' ?>
<?php else: ?>
<?php echo 'Profile Privacy: Public' ?>
<?php endif ?>
<br />
<?php endforeach ?>
<br/>
<?php if(count($profile_info->result())==0): ?>
<?php echo anchor('user/add_profile_info', 'Add Profile') ?>
<?php else: ?>
<?php echo anchor('user/edit_profile_info', 'Edit Profile') ?>
<?php endif ?>
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
    <?php foreach($videos->result() as $value): ?>
    <?php if(strcmp('video', $value->category)==0): ?>
    <?php echo anchor('user/show_video/'.$value->name , $value->name) ?>
    <?php endif ?>
    <?php endforeach ?>
</div>
<br/>
<p id="middle_link"><?php echo anchor('user/show_video/all', 'Show All') ?></p>
</div>
<br/>