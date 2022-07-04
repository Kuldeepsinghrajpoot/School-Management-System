<?php
session_start();
$Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
      if ($Database===false) {
        die("could not connect to the Database".mysqli_connection_error());
      }  
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$details=$_POST['details'];
$captcha=$_POST['captcha'];
if($_SESSION['CODE']==$captcha){
	mysqli_query($Database,"insert into students(file,type,size) values('$name','$mobile','$details')");
	echo "Thank you";
}else{
	echo "Please enter valid captcha code";
}
?>