<?php      
    $Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
      if ($Database===false) {
        die("could not connect to the Database".mysqli_connection_error());
      }  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
        <style>
                  @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&display=swap');
       </style>
          
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script  src="function.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="style2.css">
        <style type="text/css">
      button{

     transform:translate(-10.1%,365%);
     font-weight: bold;
     font-size:1.5rem;
   
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
   <script type="text/javascript">
   	function Process(argument) {
      
       var email = document.getElementById("Email");
			var emailCheck = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/g; 
			var Email = emailCheck.test(email.value);
			if (Email) {

			}
			else{
				email.focus();

				email.value=""
				
				
				email.focus();
				return false;
			}

    var password = document.getElementById("password");
  
   if (password.value){}
   	else{
   		password.focus();
   		password.value = "nbvvnv";
   		password.focus();
   		//document.getElementById("password").style.color="red";
   		//document.getElementById("password").value="wrong";
   		
   		return false;
   	}
    if (password.value.length<8&&password.value.length>15){
         alert("wrong");
         password.focus();
         return false;
    }
}
   </script>
</head>
<body>
	<form  method="post" autocomplete="on" onsubmit="return Process()" >
    <div class="table">
        <div class="div">

            <div class="face"><i class="fa fa-user-circle" style="font-size:78px;color:red"></i></div>
            <center><h3><u>Login User</u></h3></center>
            <div class="row">
    <div class="container">
         <div class="col-3 input-effect">
            <input type="text"  class="effect-16"  name="E"   id="Email" placeholder="">
            <label>Email id</label>
            <span class="focus-border"></span>
        </div>
         <div class="col-3 input-effect">
            <input type="password"  class="effect-16"  name="pas"   id="password" placeholder="">
            <label>Password</label>
            <span class="focus-border"></span>
        </div>
        
        </div>
        <?php
          if(isset($_REQUEST['E'])and$_REQUEST['pas'] ){

         $Email    = mysqli_real_escape_string($Database,$_POST['E']);
         $pass = mysqli_real_escape_string($Database,$_POST['pas']); 
      
        $sql    = "select *from student where Email = '$Email' and password = '$pass'";  
        $result = mysqli_query($Database, $sql); 
        $row    = mysqli_fetch_array($result, MYSQLI_ASSOC); 
       
          
        if(mysqli_num_rows($result)== 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<script>alert('Login failed. Invalid username or password')</script></h1>";  
        }   
}
          
?>  
        <button> submit</button>
         
    </div>

</div>
 

</div>

</form>
<center><h4 style="transform: translate(0%,2500%);"><a href="third"> Create Account</a> &nbsp<a href="updateData">Forgotten password </a></h4></center>
</body>
</html>

