<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
        <style>
                @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&display=swap');
       </style>
       <style type="text/css">
       body{
              font-family: 'Lora', serif;
              background-color: #ECF0F1;
              overflow-y: ;
        }
        .front{
            width: 101.1%;
            height: 100%;
            background-color: white;
            border:1px solid rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            left: -10px;
            margin: -10px -20px;
            right: 0;
            box-shadow: 0 0px 30px 0px rgba(0,0,0,0.1);
            font-size: 25px;
    }
    .front .links{
                width: 100%;
          height: 110px;
          background-color: whitesmoke;
    }
    .front .links h1{
      margin: 20px 65px;
    }
   
    .shishu_img{
      height: 80px;

      left: 60px;
      margin: 10PX 160px;
      width: 77px;
      text-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
      filter: drop-shadow(0px 2px 4px gray);
    }
     h1{
      font-size: 20px;
      top: -10px;
      left: 17rem;
      color: 0BA5FC;
      text-align: center;
      position: absolute;
        }
        .copy_right{
         position: absolute; 
         margin: 38.0rem -10px;
         background-color: #FF5733;
         width: 85.4rem;
         font-size: 20px;
          text-align: center;
         color: whitesmoke;
         height: 40px;
         font-weight: bold;


      }
     .copy_right .copy_right_information{
        margin: 10px 0;
        font-weight: bold;
     }
     .img3{
            height: 90px;

            left: 60px;
            margin: 10PX 160px;
            width: 90px;
            text-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
            filter: drop-shadow(0px 2px 4px gray);
        }
        .img2{
            height: 90px;
             position: absolute;
            left: 60px;
            margin: 10PX 65rem;
            width: 90px;
            text-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
            filter: drop-shadow(0px 2px 4px gray);
        }
       </style>
    <meta name="viewport" content="width=360, initial-scale=1.0, maximum-scale=1.0, user-scalable=no left-width=0px" />
    <script type="text/javascript" src="script.js"></script>  
         <link rel="shortcut icon" type="image/jpg" href="shishu.png">
         <?php  require 'link.php';?>

</head>
<body>
    <h1><div style="font-size: 55px;">SARASWATI SHISHU MANDIR</div>NOWGONG CHHATARPUR (MP)</h1>
    <div class="front"> 

    <div class="links">
        <img src="shishu.png" class="img3">
        <img src="shishu.png" class="img2">

        
    </div>
   
</div>
    <form  method="post" action="TeacherProfile.php" autocomplete="on" onsubmit="return LoginProcess()" >
    <div class="tableData">
        <div class="divData">
            <center><div class="face">Login</div></center>
           <label>User id</label>
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
<div  class="copy_right" style="margin: -7.5rem;">
        <div class="copy_right_information"></div>Devloped and Desigen by Student's GOVT Polytechnic College Nowgong 2021 </div>
</body>
</html>

