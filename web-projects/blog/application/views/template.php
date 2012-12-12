<div id="container">
    <div id="header"><?php include 'header.php'; ?></div>
    <div id="main_content"><?php include $main_content; ?>
    <br/>
    <?php
        if($this->ion_auth->logged_in())
            echo anchor('auth/logout', 'Logout');
        
        else
            echo anchor('auth/login', 'Login');
    ?>
    </div>
    <div id="footer"><?php include 'footer.php'; ?></div>
</div>