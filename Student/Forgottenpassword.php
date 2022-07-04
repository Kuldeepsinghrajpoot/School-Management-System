<!--?php
      $Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
      if ($Database===false) {
      	die("could not connect to the Database".mysqli_connection_error());
      }
?-->

<html>
<head>
    <title>forgotten password</title>
        <style>
                  @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&display=swap');
       </style>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        input[type='text']{
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>


<form  method="post" action="UD" autocomplete="on" onsubmit="return ResetProcess()" >
    <div class="tableData">
        <div class="divData">
           <center><div class="face">Reset Password</div></center>   
             
             <label>Email</label>
            <input type="text"    name="E"   id="Email" placeholder="Email">
            <div id="error3"></div>
            <label>Contact</label>
            <input type="text"    name="Contact"   id="contact" placeholder="Contact">
             <div id="error2"></div>
 <!-- <center><a href="Singnin.php"><h3>Login </h3></a></center> -->


<button class="button" name="button">submit</button>
</div>
</div>
</form>
</body>
</html>
