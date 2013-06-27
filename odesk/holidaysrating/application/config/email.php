<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    $config['protocol'] = 'smtp';
    $config['mailpath'] = '/usr/sbin/sendmail';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;
    $config['smtp_host']='mail.holidaysrating.com';
    $config['smtp_user']='donotreply@holidaysrating.com';
    $config['smtp_pass']='holidaysrating1';
    $config['smtp_port']='26';
    $config['smtp_timeout']='5';
    $config['crlf'] = "\r\n";
    $config['newline'] = "\r\n";  
 
?>