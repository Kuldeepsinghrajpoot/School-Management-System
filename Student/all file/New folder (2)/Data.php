<?php
      $Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
      if ($Database===false) {
      	die("could not connect to the Database".mysqli_connection_error());
      }
      $FirstName = mysqli_real_escape_string($Database,$_REQUEST['name']);
      $LastName  = mysqli_real_escape_string($Database,$_REQUEST['lastname']);
      $Contact   = mysqli_real_escape_string($Database,$_REQUEST['contact']);
      $Email     = mysqli_real_escape_string($Database,$_REQUEST['Email']);
      $password  = mysqli_real_escape_string($Database,$_REQUEST['password']);
      
       
        $query = "select *from student where Email  ='$Email'";
        $query1= "select *from student where Contact='$Contact'";
       $Fatch =mysqli_query($Database,$query);
       $Fatch1=mysqli_query($Database,$query1);
      
  if (mysqli_num_rows($Fatch)>0){
	  echo'window.location.href = "third.php"';
     echo "<script>alert('Email  alredy insert here')</script>";
      }
    if (mysqli_num_rows($Fatch1)>0){
		echo 'window.location.href = "third.php"';
		
          echo "<script>alert('contact alredy insert here')</script>";
          header("wrong");
         
       }
         else{
           $querys = "insert into student(FirstName,LastName,Contact,Email,Password) values ('$FirstName',' 
           $LastName', $Contact,'$Email','$password ')";
           $Fatchs=mysqli_query($Database,$querys);
          echo "successfully";
          
         }

       
     mysqli_close($Database);

     

?>
<script language="javascript">
    
    top.location.href = "third.php"; //the page to redirect
    /* setTimeout(function(){
       location.reload();
   },10000);*/
</script>

<!-- <script type="text/javascript">
  
</script> -->
