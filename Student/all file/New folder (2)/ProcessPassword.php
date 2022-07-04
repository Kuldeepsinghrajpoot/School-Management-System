<?php 
  include 'finalUpdate.php';
      $password    = mysqli_real_escape_string($con,$_POST['password']);
     
      $sql = "update student set  password='$password' where Email ='$Email'";
    

      if( mysqli_query($con,$sql)){
        echo "<script>alert('successfull update');</script>";
      }
      else{
     
        echo "<script>alert('Went wrong file ');</script>";
      }



 ?>