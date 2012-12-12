<?php

    class Email_model extends CI_Model
    {
        public function __construct() {
            parent::__construct();
        }
        
        public function get_recipients()
        {
            $temp=  $this->input->post('to');
            $arr1= explode(',', $temp);         /* Get multiple recipients seperated by commas */
            $arr2=array();
            
            foreach($arr1 as $a1)
                $arr2[]=trim($a1);              /* Get rid of unnecessary white spaces */
            
            return $arr2;
        }
    }

?>