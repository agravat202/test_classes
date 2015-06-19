<?php 
class main
{
    
    
    protected function  xo($a)
    {
        echo "this is your name : ".$a;
    }
 }
 
 class name extends main
 {
     
     function name($nm)
     {
         return parent::xo($nm);
     }
     
 }
 
 class q extends name
 {
     function q($nm)
     {
         return parent::xo($nm);
     }
 }
 $a = new q("pratik");
 
 
 
 