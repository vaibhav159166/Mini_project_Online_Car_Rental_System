<?php
   
   $con=mysqli_connect("localhost","root","","testing");
   #$date=date_create("Y-m-d");
   if(mysqli_connect_error()){
	   echo"<script>alert('cannot connect to the databasse');</script>";
	   exit();
   }
 
?>