<?php 

// conster and abstrac class    
class main{
   
     function main()
    {
      echo "welconme";
        }
}

abstract class AbstractClass  extends main{
    
    
            function AbstractClassa()
    {
        echo "this is ab";
    }
    abstract function m();
   
    }

  class sub extends AbstractClass 
  {
              function subm(){
          echo " subclasss";
          
      }
      public function m()
      {
      echo ":)";
      }
  }
  
  function call(main $c)
  {
     
      $c->m();
      
     
  }
  
  //$a = new main();
  //$b = new AbstractClass();
  $c = new sub();
  
  //call($a);
  //call($b);
  call($c);