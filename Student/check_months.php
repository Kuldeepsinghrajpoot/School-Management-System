<?php 
     
     session_start();
     session_id();
     require 'connection.php';
      $Registation=mysqli_real_escape_string($Database,$_POST['username']);
      $Month      =mysqli_real_escape_string($Database,$_POST['month']);
      $fees       =mysqli_real_escape_string($Database,$_POST['fees']);
      $_SESSION['Registation']=$Registation;
      $_SESSION['Month']=$Month;
      $_SESSION['fees']=$fees;


        $_SESSION['ORD']="ORD".rand(10000,99999999);
      $query=mysqli_query($Database,"select *from transaction where Registation='$Registation' and MONTH='$Month'");
      if (mysqli_num_rows($query)>0) {
      	echo "already paid";
      }else{
      	echo "paid now";
      }



?>