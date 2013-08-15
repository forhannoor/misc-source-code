<script type="text/javascript">
$(document).ready(function()
{
    $("#loader").hide();
    
    $("input[type=submit]").click(function(e)
    {
        $("#loader").show();
    });
});
</script>
<div>
<?php echo validation_errors() ?>

<?php if(isset($errors)): ?>
<?php echo $errors ?>
<?php endif ?>

<?php echo form_open_multipart('topmenu/dump_video') ?>
<?php echo form_upload('userfile') ?>
<br /><br />
<?php $regions = array(
                    'asia' => 'Asia',
                    'africa' => 'Africa',
                    'antarctica' => 'Antarctica',
                    'caribbean' => 'Caribbean',
                    'central_america' => 'Central America',
                    'europe' => 'Europe',
                    'north_america' => 'North America',
                    'oceania' => 'Oceania',
                    'south_america' => 'South America'              
                ); 
?>
<?php echo form_label('Select Region', 'region') ?>
<br />
<?php echo form_dropdown('region', $regions) ?>
<br />
<br />
<?php echo form_label('Title', 'title') ?>
<br />
<?php echo form_input('title') ?>
<br />
<?php echo form_hidden('uploader', $this->ion_auth->user()->row()->id) ?>
<br />
<?php echo form_submit(array('value' => 'Upload', 'class' => 'btn-submit-green')) ?>
<?php echo form_close() ?>
</div>
<br /><br />
<div id="loader"><?php echo img('assets/assets/loader.gif') ?></div>