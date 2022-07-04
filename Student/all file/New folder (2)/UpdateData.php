<?php
      $Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
      if ($Database===false) {
      	die("could not connect to the Database".mysqli_connection_error());
      }
?>

<html lang="en" >
<head>
    <title>forgotten password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
        <style>
                  @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&display=swap');
       </style>
          
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script  src="function.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style2.css">
    <script type="text/javascript">
    	function Process(){

    		var email = document.getElementById("Email");
			var emailCheck =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
			//var emailCheck = /^([a-zA-Z0-9.!#$%&*+/=?^-_~`][@][gmail][.][com])$/g;
			var Email = emailCheck.test(email.value);
		
			if (Email) {

			}
			else{
				alert("plese enter Email id ");
				email.focus();
				return false;
			}

    	var password = document.getElementById("password");
   // alert(password.value);
   if (password.value){}
   	else{
   		alert("ensert password here");
   		password.focus();
   		return false;
   	}
    if (password.value.length<8&&password.value.length>15){
         alert("wrong");
         password.focus();
         return false;
    }
     var confirmpassword = document.getElementById("confirmpassword");
   
    if (password.value!=confirmpassword.value){
       alert("password not matched");
       confirmpassword.focus();
       return false;
    }
  }
    </script>
    <style type="text/css">
    	button{

     transform:translate(-10.1%,390%);
     font-weight: bold;
     font-size:1.5rem;
   box-shadow: 0px 5px 10px 0 rgba(0,0,0,0.4),1px 0px 5px 0px rgba(0,0,0,0.19);
     border: none;
     color:black;
     background-color: #11676E;
     cursor: pointer;
     display:block;
    
    transition-duration: 0.4s;
     width:300px;
     height:35px;
    
    box-shadow: rgba(0,0,0,0.1) 1px 1px  1px 1px, rgba(0,0,0,0.190)0px 0px 1px 1px;
              
     border-bottom-right-radius:5px;
     border-bottom-left-radius:5px;
    	}
    	button:hover{
    background-color:orange;
}
button:focus{
    background-color: #11676E;
    outline:none;
}
::placeholder{
     color:black
}
    </style>
  <!--  <script type="text/javascript">
       alert('h')
   </script> -->
</head>
<body>


<form  method="post" action="#" autocomplete="off" onsubmit="return Process()" >
    <div class="table">
        <div class="div">
            <div class="face"><i class="fa fa-user-circle" style="font-size:78px;color:red"></i></div>
            <center style="font-weight: bold;"><U>FORGOTTEN PASSWORD</U></center>
<div class="row">
    <div class="container">
        
    </div>
    <div class="container">
        <div class="col-3 input-effect">
            <input type="text"  class="effect-16"  name="E"   id="Email" placeholder="" required="Enere you name">
            <label>Email</label>
            <span class="focus-border"></span>
        </div>
        
    </div>
    <div class="container">
        <div class="col-3 input-effect">
            <input type="password"  class="effect-16"  name="password"   id="password" placeholder="" required=" please">
            <label>Password</label>
            <span class="focus-border"></span>
        </div>
        
    </div>
    <div class="container">
        <div class="col-3 input-effect">
            <input type="password"  class="effect-16"  name="confirmpassword"   id="confirmpassword" placeholder="" required="">
            <label>Retype Password
            </label>
            <span class="focus-border"></span>
        </div>
        
    </div>
   
</div>
 
 <!-- <center><a href="Singnin.php"><h3>Login </h3></a></center> -->

<?php 
       if(isset($_REQUEST['E'])and$_REQUEST['password'] ){
             $Em    = mysqli_real_escape_string($Database,$_REQUEST['E']);
             $Password = mysqli_real_escape_string($Database,$_REQUEST['password']);
         

         $Email= $Em;
      $queryS   = "select *from student where Email  ='$Email'";
      $Fatchs   = mysqli_query($Database,$queryS);

  if (mysqli_num_rows($Fatchs)>0){
          $DataQuery="update student set Password='$Password'where Email='$Email'";
          if (mysqli_query($Database,$DataQuery)) {
           echo '<script type="text/javascript">'; 

echo 'window.location.href = "successfull"';
echo '</script>';
          }else{
          	echo "wrong someting";
          }
      }
    
         else{
           
          echo "<script>alert('Your Email Id invalid')</script>";
          
         }

       }
     mysqli_close($Database);
     ?>
     

<button class="button">submit</button>
</div>
</div>

</form>

</body>
</html>
