<?php 
      $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con,'school');
  if($_POST['E']){
 
  
  if($_POST['E']==true){
    
         $Email    = mysqli_real_escape_string($con,$_POST['E']);
         $Contact  = mysqli_real_escape_string($con,$_POST['Contact']);
        // $Password = mysqli_real_escape_string($Database,$_REQUEST['password']); 
      
        $sql    = "select *from student where Email = '$Email'"; 
        $result = mysqli_query($con, $sql); 
        $row    = mysqli_fetch_array($result, MYSQLI_ASSOC); 
       
          
        if(mysqli_num_rows($result)==1){ 
           echo  $_SESSION['username'] = $_POST['E'];
           echo  $_SESSION['Contact']  = $_POST['Contact'];
           header('location:UD');

        }  
        else{  
            echo "Login failed. Invalid username or password";  
        }   
  }
  }
  else{
   echo "wrong";
    header('location:Forgottenpassword');
  }
?>