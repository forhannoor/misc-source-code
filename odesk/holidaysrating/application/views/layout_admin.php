<html>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><?php echo anchor('admin/index', 'Admin Panel') ?></li>
                            <li><?php echo anchor('auth/logout', 'Logout') ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="content"><?php include $main ?></div>
                <div class="footer"><h5>&copy; <?php echo date('Y') ?> by Holidaysrating.com</h5></div>
            </div>
        </div>
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/admin.css" />
    </body>
</html>