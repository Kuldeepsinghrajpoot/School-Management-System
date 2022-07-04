<?php
      $Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
      if ($Database===false) {
      	die("could not connect to the Database".mysqli_connection_error());
      }

      $Email    = mysqli_real_escape_string($Database,$_REQUEST['E']);
      $Password = mysqli_real_escape_string($Database,$_REQUEST['password']);
      $queryS   = "select *from student where Email  ='$Email'";
      $Fatchs   = mysqli_query($Database,$queryS);
      
  if (mysqli_num_rows($Fatchs)>0){
          $DataQuery="update student set Password='$Password'where Email='$Email'";
          if (mysqli_query($Database,$DataQuery)) {
           echo '<script type="text/javascript">'; 

echo 'window.location.href = "successfull.php.php?"';
echo '</script>';
          }else{
          	echo "wrong someting";
          }
      }
    
         else{
           
          echo "<script>alert('Your Email Id invalid')</script>";
          
         }

       
     mysqli_close($Database);

     

?><!-- 
<script language="javascript">
    alert("Record inserted successfully");
    top.location.href = "third.php"; //the page to redirect
    /* setTimeout(function(){
       location.reload();
   },10000);*/
</script> -->

<!-- <script type="text/javascript">
  
</script> -->
