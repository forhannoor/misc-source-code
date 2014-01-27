<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    $config['protocol'] = 'smtp';
    $config['mailpath'] = '/usr/sbin/sendmail';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;
    $config['smtp_host']='ssl://smtp.googlemail.com';
    $config['smtp_user']='forhannoor@gmail.com';
    $config['smtp_pass']='tombox88';
    $config['mailtype'] = 'html';
    $config['smtp_port']='465';
    $config['smtp_timeout']='5';
    $config['crlf'] = "\r\n";
    $config['newline'] = "\r\n";

?>