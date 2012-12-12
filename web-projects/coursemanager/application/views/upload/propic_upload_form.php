<h1>Upload Profile Picture</h1>
<p>Allowable Formats: jpeg, gif, png</p>
<p>Allowable Maximum Size: 1000KB</p>
<?php echo $error; ?>
<?php echo form_open_multipart('upload/do_upload'); ?>
<input type="file" name="userfile" size="20" />
<br/><br/>
<input type="submit" value="Upload" />
</form>
<?php echo anchor('admin/index', 'Back'); ?>