<!-- this is used for insert data link in the login.php page-->
<?php
    session_start();
 $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con,'school');
  if($_POST['E']){
 
  
  if($_POST['E']==true){
    
         $Email = mysqli_real_escape_string($con,$_POST['E']);
         $pass  = mysqli_real_escape_string($con,$_POST['pas']); 
      
        $sql    = "select *from student where Email = '$Email' and password = '$pass'";  
        $result = mysqli_query($con, $sql); 
        $row    = mysqli_fetch_array($result, MYSQLI_ASSOC); 
       
          
        if(mysqli_num_rows($result)==1){ 
              $_SESSION['username']= $_POST['E'];
             header('location:Return');

        }  
        else{  
          ?>
             <script language="javascript">
              alert("Login failed. Invalid username or password");
             top.location.href = "location:login"; //the page to redirect
                    /* setTimeout(function(){
                      location.reload();
                          },10000);*/
                  </script>
                  <?php
        }   
  }
  }
  else{
   header('location:Login');
    
  }
?>