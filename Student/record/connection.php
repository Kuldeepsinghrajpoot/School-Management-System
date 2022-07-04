<?php 
     $Database = mysqli_connect("localhost","root","");
     mysqli_select_db($Database,"school");
     if ($Database===false) {
     	die("could not connect to the Database".mysqli_connection_error());
     }
     
 ?>