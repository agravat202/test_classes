<?php 
global $a;

interface log
{
    
    function  check();
   
}

class main implements log {
    
    function main()
    {
        echo $a = 5;
        echo "<br> this is globle variable of sub class <br>";// globle 
        echo "<br>this is constoctor of main <br> ";
        echo $this->check();
        echo $this->p();
    }
    public function check()
    {
        echo "<br>this is check function of main impliment by log <br> ";
    }
    function p()
    {
        echo "<br>this is p class from main by polymophisam<br>";
    }
}
abstract class who extends main implements log{
    abstract function ch();
    public function check()
    {
        echo "<br>this is check function of abstrac class impliment by log <br> ";
    }
}
class sub extends who
{
    function sub()
    {
        echo $a = 10;
        
        echo "<br> this is globle variable of sub class <br>";
        echo $this->ch()."<br>";
         echo $this->p()."<br>";
    }
            function ch()
    {
        echo "<br>this is ch from sub class<br>";
    }
    
    funciton p()
    {
        echo "<br>this is p class from sub by polymophisam  <br>";
    }
}
$a = new sub();
$b = new main();