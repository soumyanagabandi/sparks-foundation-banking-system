<?php 
   $servername = "localhost";
   $username="root";
   $password="";
   $dbname="banking";
   $conn = mysqli_connect($servername,$username,$password,$dbname);
   session_start();
   if(!$conn)
   {
       die("could not connect to the database due to the following error".mysqli_connect_error());
   }
   ?>
   