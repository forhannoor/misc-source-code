<h1>Profile</h1>
<?php 
    $profile_pic=array(
                    'src' => 'assets/images/no_propic.jpg',
                    'width' => '160',
                    'height' =>'160'
                        );
?>
<table id="profile" cellpadding="15" cellspacing="15">
    <tr>
        <td><b>Profile Picture</b></td>
        <td>
            <p style="font-size: small; text-align: center;">
                <?php 
                    if(count($image_info)>0)
                        foreach($image_info->result() as $i)
                            $profile_pic['src']=base_url().'uploads/images/'.$i->propic;
                ?>
                <?php echo img($profile_pic); ?>
                <br/><br/>
                <?php echo anchor('upload/index', 'Upload Profile Picture') ?>
                <br/>
                <?php echo anchor('upload/delete_propic', 'Remove') ?>
            </p>
        </td>
    </tr>
    <tr>
        <td><b>Username</b></td>
        <td><?php echo $this->ion_auth->get_user()->username; ?></td>
    </tr>
    <tr>
        <td><b>Email Address</b></td>
        <td><?php echo $this->ion_auth->get_user()->email; ?></td>
    </tr>
    <tr>
        <td><b>IP Address</b></td>
        <td><?php echo $this->ion_auth->get_user()->ip_address; ?></td>
    </tr>
</table>
<?php echo '<br/>'; ?>
<?php echo anchor('admin/index', 'Back');?>