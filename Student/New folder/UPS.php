<?php 
session_start();
    $Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
      if ($Database===false) {
        die("could not connect to the Database".mysqli_connection_error());
      }
     if ($_POST['p']==true) {
      $Email=$_SESSION['username'];
       echo  $Email;
            $Email     =mysqli_real_escape_string($Database,$_SESSION['username']);
            $Password  =mysqli_real_escape_string($Database,$_POST['p']);
            echo  $Password;
            $DataQuery ="update student set Password='$Password'where Email='$Email'";
          if (mysqli_query($Database,$DataQuery)) {
                 header("location:successfull");
            
          }else{
          	echo "wrong someting";
          }
      }
      
      else{
       header("location:Forgottenpassword");
      session_destroy();
      session_unset();
      echo "wrong";
    }
     mysqli_close($Database);
   session_destroy();
      session_unset();
     ?>