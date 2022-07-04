<!-- this is used for insert data link in the login.php page-->
<?php
    session_start();
 $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con,'school');
  if($_POST['E']){
 
  
  if($_POST['E']==true){
    
         $Email = mysqli_real_escape_string($con,$_POST['E']);
         $Contact  = mysqli_real_escape_string($con,$_POST['Contact']); 
      
        $sql    = "select *from student where Email = '$Email'"; 
        $sql1    = "select *from student where Contact = '$Contact'"; 
        $result1 = mysqli_query($con, $sql); 
        $result2 = mysqli_query($con, $sql1); 
        
       
          
        if(mysqli_num_rows($result1)==1){ 
           echo  $_SESSION['username'] = $_POST['E'];
           echo  $_SESSION['Contact']  = $_POST['Contact'];
        }  
        else{  
             
             echo "<script>alert('Invalid Email')</script>";  
            /* header("location:Forgottenpassword");*/
            //echo "<a href ='Forgottenpassword'>";
           //  echo "<div id='error4'></div>";
        } 
        if(mysqli_num_rows($result2)==1){ 
        }  
        else{  
          echo "<script>alert('Invalid Contact')</script>";  
             //header("location:Forgottenpassword"); 
        }   
     }
  }
  else{
   echo "wrong";
    header('location:Forgottenpassword');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>#</title>
</head>
<body>

<html>
<head>
    <title>forgotten password</title>
        <style>
                  @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&display=swap');
       </style>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
  <form  method="post" action="UPS" autocomplete="off" onsubmit="return UDProcess()" >
    <div class="tableData">
        <div class="divData">
           <center><div class="face"><h6 style="margin: 10px">Update Password</h6></div></center>
           <label>Password</label>
            <input type="password"  class="effect-16"  name="p"   id="password" placeholder="password" >
            <div id="error4"></div>
            <label>Retype Password</label>
            <input type="password"  class="effect-16"  name="confirmpassword"id="confirmpassword" placeholder="confirm password">
            <div id ="error5"></div>
            <button class="button" name="submit">submit</button>
</div>
</div>
</form>
</body>
</html>
