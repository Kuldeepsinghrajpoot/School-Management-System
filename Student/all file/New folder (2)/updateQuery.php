<?php
     //$password = sqlite_escape_string($con,$_POST['password']);
     // $sql = "UPDATE student SET  `password`='$Email' WHERE Email ='$Email'";
  
      $con = mysqli_connect('localhost','root','');
       mysqli_select_db($con,'school');
      if ($con===false) {
        die("could not connect to the Database".mysqli_connection_error());
      }  
    
      $Email       = mysqli_real_escape_string($con,$_POST['E']);
      $password    = mysqli_real_escape_string($con,$_POST['password']);

      $checkInput = "select *form student";
     
      $sql = "update student set  password='$password' where Email ='$Email'";
      

      if( mysqli_query($con,$sql)){
     
        echo '<script type="text/javascript">'; 

//echo 'window.location.href = "successfull.php.php?"';
echo '</script>';
      }
      else{
     
        echo "<script>alert('Went wrong');
        echo 'window.location.href = 'UpdateData.php';

        </script>";
      }




     

 ?>


