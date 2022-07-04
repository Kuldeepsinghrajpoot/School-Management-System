<?php

session_start();
session_id();
 $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con,'school');
  
         $Email  = mysqli_real_escape_string($con,$_POST['E']);
         $pass   = mysqli_real_escape_string($con,$_POST['pas']);
           $_SESSION['username']=$Email; 
           $_SESSION['user']=$Email;
         $sql    = "select *from student where Email = '$Email' and password = '$pass'";  
         $result = mysqli_query($con, $sql); 
         $row    = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        if(mysqli_num_rows($result)==1){ 
           echo "success";
           
        }  
        else{  
         echo "filed";
          }   
    
?>