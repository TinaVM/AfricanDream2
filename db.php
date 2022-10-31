<?php
//Establishing database connection
   $servername = "localhost"; 
   $username = "root";
   $password = "";
   $dbname = "african";
   $db = mysqli_connect($servername, $username, $password, $dbname);

   if(!$db){
      die("Connection failed: " . mysqli_connect_error());
   }
?>