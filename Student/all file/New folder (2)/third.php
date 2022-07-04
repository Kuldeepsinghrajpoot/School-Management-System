<?php
      $Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
      if ($Database===false) {
        die("could not connect to the Database".mysqli_connection_error());
      }
?>
<html lang="en" >
<head>
    <title>Create account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
        <style>
                  @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&display=swap');
       </style>
          
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script  src="function.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style2.css">
  <!--  <script type="text/javascript">
       alert('h')
   </script> -->
</head>
<body>


<form  method="post" autocomplete="on" onsubmit="return Process()" >
    <div class="table">
        <div class="div">
            <div class="face"><i class="fa fa-user-circle" style="font-size:78px;color:red"></i></div>
<div class="row">
    <div class="container">
         <div class="col-3 input-effect">
            <input type="text"  class="effect-16"  name="name"   id="name" placeholder="">
            <label>First Name</label>
            <span class="focus-border"></span>
        </div>
        <div class="col-3 input-effect">
            <input type="text"  class="effect-16"  name="lastname"   id="lastname" placeholder="">
            <label>Last Name</label>
            <span class="focus-border"></span>
        </div>
        
    </div>
    <div class="container">
        <div class="col-3 input-effect">
            <input type="number"  class="effect-16"  name="contact"   id="contact" placeholder="">
            <label>contact number</label>
            <span class="focus-border"></span>
        </div>
        
    </div>
    <div class="container">
        <div class="col-3 input-effect">
            <input type="text"  class="effect-16"  name="Email"   id="Email" placeholder="">
            <label>Email</label>
            <span class="focus-border"></span>
        </div>
        
    </div>
    <div class="container">
        <div class="col-3 input-effect">
            <input type="password"  class="effect-16"  name="password"   id="password" placeholder="">
            <label>Password</label>
            <span class="focus-border"></span>
        </div>
        
    </div>
    <div class="container">
        <div class="col-3 input-effect">
            <input type="password"  class="effect-16"  name="confirmpassword"   id="confirmpassword" placeholder="">
            <label>Retype Password
            </label>
            <span class="focus-border"></span>
        </div>
        
    </div>
   
</div>
 <button class="button">submit</button>
 <center><a href="Singnin"><h3>Login </h3></a></center>

</div>
</div>

</form>
<?php
if (isset($_REQUEST['name'])&&($_REQUEST['lastname'])&&($_REQUEST['contact'])&&$_REQUEST['Email']&&$_REQUEST['password']) {
    
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

     }

?>
</body>
</html>
