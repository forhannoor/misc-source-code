<?php

function btn_edit($uri)
{
    return anchor($uri, '<i class = "icon-edit"></i>');
}

function btn_delete($uri)
{
    return anchor($uri, '<i class = "icon-remove"></i>', array('onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?')"));
}

function btn_submit($text)
{
    return form_submit('submit', $text, 'class = "btn btn-primary"');
}

function css($url)
{
    $CI =& get_instance();
    $str = "<link rel = \"stylesheet\" type = \"text/css\" href = \"";
    $str .= $CI->config->base_url($url);
    $str .= "\" />";
    return $str; 
}

function js($url)
{
    $CI =& get_instance();
    $str = "<script type = \"text/javascript\" src = \"";
    $str .= $CI->config->base_url($url);
    $str .= "\"></script>";
    return $str;
}

function hspace($amount = 1)
{
    $str = '';
    
    for($i = 0; $i < $amount; $i++)
    {
        $str .= '&nbsp;';
    }
    
    return $str;
}

function vspace($amount = 1)
{
    $str = '';
    
    for($i = 0; $i < $amount; $i++)
    {
        $str .= '<br/>';
    }
    
    return $str;   
}

function urlsafe_b64encode($string) 
{
    $data = base64_encode($string);
    $data = str_replace(array('+','/','='),array('-','_',''),$data);
    return $data;
}

function urlsafe_b64decode($string)
{
    $data = str_replace(array('-','_'),array('+','/'),$string);
    $mod4 = strlen($data) % 4;
    if ($mod4) {
        $data .= substr('====', $mod4);
    }
    return base64_decode($data);
}

function dump($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}