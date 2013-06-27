<div>
<?php echo validation_errors() ?>
<?php if(isset($errors)): ?>
<?php var_dump($errors) ?>
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
                    'ocenia' => 'Ocenia',
                    'south_america' => 'South America'              
                ); 
?>
<?php echo form_label('Select Region', 'region') ?>
<br />
<?php echo form_dropdown('region', $regions) ?>
<br />
<?php echo form_hidden('uploader', $this->ion_auth->user()->row()->id) ?>
<?php echo form_submit(array('value' => 'Upload', 'class' => 'btn-red')) ?>
<?php echo form_close() ?>
</div>