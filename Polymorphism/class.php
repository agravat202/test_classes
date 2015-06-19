

<?php

class animal {
   
    function p()
    {
        
       echo  $this->cat=" cat and kutru ";
    }
    
}


class cat extends animal
{
    
    function p()
    {
        
       echo  $this->cat=" meaw ";
    }
}


class dog extends cat
{
    function p()
    {
       
       echo  $this->dog=" wow ";
    }
}

function calling(animal $c)
{
    
   echo $x=$c->p();
   
}

 