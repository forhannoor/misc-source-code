<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/auth.css"/>
<div class='mainInfo'>
    <div class="pageTitle">Login</div>
    <div class="pageTitleBorder"></div>
    <div id="infoMessage"><?php echo $message;?></div>
    <div id="form">
        <?php echo form_open("auth/login");?>

                <div id="label_">
                    <label for="email">Email:</label>
                    <br/><br/>
                    <label for="password">Password:</label>
                    <br/><br/>
                    <label for="remember">Remember Me:</label>
                </div>
            
                <div id="input_">
                    <?php echo form_input($email);?>
                    <br/><br/>
                    <?php echo form_input($password);?>
                    <br/><br/>
                    <?php echo form_checkbox('remember', '1', FALSE);?>
                    <br/><br/>
                    <?php echo form_submit('submit', 'Login');?>
                </div>
                
        <?php echo form_close();?>
    </div>
</div>