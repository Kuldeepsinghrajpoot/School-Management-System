<?php

require 'connection.php';

$check='';
$result=mysqli_query($Database,"select *from registration");

            while ($row=mysqli_fetch_array($result)) {
    // code...
                if($row['Registration_status']=='OPEN'){
                 $check='1';
    }
           else{
            echo "closed";
       }
    }
    

if ($check=='1') {
    // code...


?>



<html>
<head>
 
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
 <style>
                  @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&display=swap');
       </style>
<meta name="viewport" content="width=360, initial-scale=1.0, maximum-scale=1.0, user-scalable=no left-width=0px" />
     <link rel="shortcut icon" type="image/jpg" href="shishu.png">

<script type="text/javascript" src="script.js"></script>
<style type="text/css">
    input{
    border: 1px solid rgba(0, 0, 0, 0.1);

}
</style>
</head>
<body>

<form  method="post" action="Data" autocomplete="on" onsubmit="return  Process()" >
    
    <div class="table">
        <div class="div">
           <center><div class="face" style="font-size: 27px;">Registration Form</div></center>

                 <label>First Name</label>
                <input type="text"  class="effect-16"  name="name"   id="name" placeholder="Name" title=" First Name">
                 <div id="error"></div>
        
                 <label>Last Name</label>
            <input type="text"  class="effect-16"  name="lastname"   id="lastname" placeholder="LastName" >
            <div id="error1"></div>
      
            <label>contact number</label>
            <input type="number"  class="effect-16"  name="contact"   id="contact" placeholder="Contact" >
            <div id="error2"></div>
        
                     <label>Email</label>
            <input type="text"  class="effect-16"  name="Email"   id="Email" placeholder="Email">
    <div id="error3"></div>
        
        <label>Password</label>
        
            <input type="password"  class="effect-16"  name="password"   id="password" placeholder="Password">
       <div id="error4"></div>
       
            <label>Retype Password</label>
            <input type="password"  class="effect-16"  name="confirmpassword"   id="confirmpassword" placeholder="RetypePassword">
             <div id="error5"></div>
 <button class="button">submit</button>
 <!-- <center><a href="Login"><h3>Login </h3></a></center> -->
</div>
</div>
</form>

</body>
</html>
<?php 
}
else {
    header("location:./");
}
?>
