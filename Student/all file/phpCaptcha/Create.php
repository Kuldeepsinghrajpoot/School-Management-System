<html>
<head>
 
    <title>Create account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
 <style>
                  @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&display=swap');
       </style>
<meta name="viewport" content="width=360, initial-scale=1.0, maximum-scale=1.0, user-scalable=no left-width=0px" />
<script type="text/javascript" src="script.js"></script>

</head>
<body>

<form  method="post" action="Data" autocomplete="on" onsubmit="return  Process()" id="#frmCaptcha">
    
    <div class="table">
        <div class="div">
           <center><div class="face">Create Account</div></center>

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
 <button class="button" onclick="success_data()">submit</button>
 <!-- <center><a href="Login"><h3>Login </h3></a></center> -->
</div>
</div>
</form>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script>
      function submit_data(){
        jQuery.ajax({
            url:'insert.php',
            type:'post',
            data:jQuery('#frmCaptcha').serialize(),
            success:function(data){
                alert(data);
            }
        });
      }
      </script>
   </body>
</html>