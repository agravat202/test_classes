<?php
         
         $servername= "localhost";
         $username= "root";
         $password="";
         $database = "pratik";
         $conn = mysqli_connect($servername, $username, $password,$database);
       if($conn->connect_error)
        {
            die("can't connect with server".  $conn->connect_error);
        }  
      if(!isset($_SESSION)){          session_start();}
      else{
          echo 'session is started';
      }



        ?>
