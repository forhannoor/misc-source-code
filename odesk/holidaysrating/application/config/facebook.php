<?php  

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(ENVIRONMENT == 'development')
{
    $config['appId'] = '323806694425986';
    $config['secret'] = 'cfc1fe02c6db5ecc54e08a55fa5906b8';
}
    
else if(ENVIRONMENT == 'production')
{
    $config['appId'] = '187439388064490';
    $config['secret'] = 'cf4ed14c6913db6d9bdfee6794f63697';
}