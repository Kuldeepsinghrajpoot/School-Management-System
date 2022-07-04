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
            .copy_right .copy_right_information{
margin: -10rem 0;
font-weight: bold;
position: absolute;
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
.table{
width: 100%;
height:0px;
background:rgba(0,0,0,0.1);
border-radius:1%;           
position:relative;
transform:translate(-40%,-40%);
top:50%;
left:50%;
padding:30px 30px;
box-sizing:border-box;
/*-webkit-box-reflect:below 1px linear-gradient(transparent 70%, white);*/
background-color: white;
border:1px solid #BEBEBE;
border-radius: 5px;
}
        </style>
        <meta name="viewport" content="width=360, initial-scale=1.0, maximum-scale=1.0, user-scalable=no left-width=0px" />
        <script type="text/javascript" src="script.js"></script>  
        <link rel="shortcut icon" type="image/jpg" href="shishu.png">
        <?php  require 'link.php';?>
    </head>
    <body>
        <h1>
            <div style="font-size: 55px;">SARASWATI SHISHU MANDIR</div>
            NOWGONG CHHATARPUR (MP)
        </h1>
        <div class="front">
            <div class="links">
                <img src="shishu.png" class="img3">
                <img src="shishu.png" class="img2">
            </div>
        </div>
        <form  method="post" id="verify" autocomplete="on" >
            <div class="tableData">
                <div class="divData">
                    <center>
                        <div class="face">Login</div>
                    </center>
                    <label>Email id</label>
                    <input type="text"    name="E"   id="Email" placeholder="">
                    <div id="error3"></div>
                    <label>Password</label>
                    <input type="password"   name="pas"   id="password" placeholder="">
                    <div id="error4"></div>
                    <button type="button" onclick="onsubmitdata()"> Submit</button><br>
                    <a href="ForgottenPassword">Reset Password ?</a><br>
                </div>
            </div>
            </div>
        </form>
        <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
        <script type="text/javascript">
            function onsubmitdata() {
                var email = document.getElementById('Email');
                 var password = document.getElementById('password'); 
                var emailCheck =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                var Email = emailCheck.test(email.value);
            
            
               /* if (email.value==''){
                    alert('empty');
                }*/
               
                if((email.value=='')||(Email==email)){
                    document.getElementById('error3').innerHTML="Check your Email Now";
                        email.focus();
                        return false;
                }
                 if(password.value.length<8){
                 document.getElementById('error4').innerHTML="Check your Password";
                 password.focus();
                 return false;
            }
                else{
                jQuery.ajax({
                   url:'Return2.php',
                   type:'post',
                   data:jQuery("#verify").serialize(),
                   success:function(data){
                      if (data=='success') {
                           window.location.href="frame";                
                      }
                      else{
                        alert('Check Your Email Id and Password');
                        $("#verify")[0].reset();
                      }
                   }
                });
            }
            }
            

        </script>
        <div  class="copy_right" style="margin: -7.5rem;">
            <div class="copy_right_information"></div>
            Devloped and Desigen by Student's GOVT Polytechnic College Nowgong 2021 
        </div>
    </body>
</html>