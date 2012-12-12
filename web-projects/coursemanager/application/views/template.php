<div id="main_div">
    <div id="header"><?php include 'header.php'; ?></div>
    <div id="main">
        <div id="cssmenu">
            <?php include 'nav_menu.php'; ?>
        </div>
        <div id="sidemenu">
            <?php include 'side_menu.php'; ?>
        </div>
        
        <div id="main_body">
            <?php include $main_content; ?>
        </div>
        
        <div id="logout">
            <?php
                if($this->ion_auth->logged_in())
                    echo anchor('auth/logout', 'Logout');
            ?>
        </div>
    </div>
    <div id="footer"><?php include 'footer.php'; ?></div>
</div>