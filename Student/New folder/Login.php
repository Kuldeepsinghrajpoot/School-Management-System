<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
        <style>
                  @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&display=swap');
       </style>
    <meta name="viewport" content="width=360, initial-scale=1.0, maximum-scale=1.0, user-scalable=no left-width=0px" />
    <script type="text/javascript" src="script.js"></script>  
</head>
<body>
	<form  method="post" action="Return2" autocomplete="on" onsubmit="return LoginProcess()" >
    <div class="tableData">
        <div class="divData">
            <center><div class="face">login here</div></center>
           <label>Email id</label>
            <input type="text"  class="effect-16"  name="E"   id="Email" placeholder="">
           <div id="error3"></div>
           
        <label>Password</label>
            <input type="password"  class="effect-16"  name="pas"   id="password" placeholder="">
              <div id="error4"></div>
        <button> submit</button><br>
       <a href="ForgottenPassword">Reset Password ?</a><br>
    </div>  
</div>
</div>
</form>
</body>
</html>

