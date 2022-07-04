<?php      
    $Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
      if ($Database===false) {
        die("could not connect to the Database".mysqli_connection_error());
      }  

        $Email    = mysqli_real_escape_string($Database,$_POST['E']);
        $password = mysqli_real_escape_string($Database,$_POST['pas']); 
      
        $sql    = "select *from student where Email = '$Email' and password = '$password'";  
        $result = mysqli_query($Database, $sql); 
        $row    = mysqli_fetch_array($result, MYSQLI_ASSOC); 
       
          
        if(mysqli_num_rows($result)== 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }   

          
?>  