<?php header("Expires: Mon, 26 Jul 1997 05:00:00 GMT") ?>
<?php header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT") ?>
<?php header("Cache-Control: no-store, no-cache, must-revalidate") ?> 
<?php header("Cache-Control: post-check=0, pre-check=0", false) ?>
<?php header("Pragma: no-cache") ?>
<html>
<head>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.0.3.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.tablesorter.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.fancybox.pack.js') ?>"></script>
</head>    
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="container-fluid">
<div class="nav-collapse collapse">
<ul class="nav">
<li><?php echo anchor('admin/index', 'Admin Panel') ?></li>
<li><?php echo anchor('admin/note', 'Notes') ?></li>
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
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.fancybox.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin.css') ?>" /> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/tablesorter.css') ?>" />
</body>
</html>