<?php
//class login_check
//    {
//        function login_check()
//        {
//            $this->user = $_POST['us'];
//            $this->pass = $_POST['ps'];
//            
//            $this->msg = $this->login_valid($this->user,$this->pass);
//            //$this->msg = $this->login_true($this->user,$this->pass);
//        }
//        
//        function login_valid($u,$p)
//        {
//            include './db_connect.php';
//            $this->check="select * from register where User_Name='$u' ";
//            $this->res = mysqli_query($conn,$this->check);
//            $this->row=mysqli_fetch_row($this->res);
//            if($this->row[1]==$u && $this->row[2]==$p)
//            {
//               return "thank u";
//                
//            }
//            else{
//                return 1;
//            }
//        }
//    }
    
    ///// 
    
    
     class session
    {
         public function  main(){
            
           echo "main class";
          $this->sum = $this->sum();
        }
         function sum()
        {
            echo 5+5;
        }
    }
    
    class o extends session
    {
        function o1()
        {
            echo "hello";
            
        }
    }
    
function processClass(session $c) {
   echo $x=$c->main();
    echo chunk_split($x,10,'.');
   
}
 
    
    ///////
    
    
    
    
// demo    
//class BaseClass {
//   public function myMethod() {
//      echo "BaseClass method called";
//   }
//}
// 
//class DerivedClass extends BaseClass {
//   public function myMethod() {
//      echo "DerivedClass method called";
//   }
//}
// 
//function processClass(BaseClass $c) {
//   $c->myMethod();
//}
// 