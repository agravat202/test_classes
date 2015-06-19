<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
    </body>
</html>
