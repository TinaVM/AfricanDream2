<?php
//Establishing database connection


   $servername = "localhost"; 
   $username = "root";
   $password = "";
   $dbname = "african";
   $mysqli = mysqli_connect($servername, $username, $password, $dbname);

   if(!$mysqli){
      die("Connection failed: " . mysqli_connect_error());
   }
   return $mysqli;
?>