<html>
<body>
    <p>You have requested to reset the password for: <?php echo $identity ?></p>
	<p>If you didn't make that request, do not reply to this email.</p>
	<p>Otherwise, please click this link to <?php echo anchor('auth/reset_password/'. $forgotten_password_code, 'Reset Your Password')?>.</p>
</body>
</html>