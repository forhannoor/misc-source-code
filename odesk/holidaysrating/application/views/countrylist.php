<div class="my_login">
    <?php echo form_open('home/search') ?>
    <?php echo form_dropdown('country', $countries) ?>
    <br/><br />
    <?php echo form_submit('', 'Search', 'id = "search"') ?>
    <?php echo form_close() ?>
</div>