<?php 

class Country extends CI_Controller
{
    public function test()
    {
        $region = $this->uri->segment(3);
        echo $region;
    }
}