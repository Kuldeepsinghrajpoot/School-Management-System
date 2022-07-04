<!DOCTYPE html>
<html>
    <head>
        <title>SSM School Nowgong</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&display=swap');
        </style>
        <link rel="shortcut icon" type="image/jpg" href="shishu.png">
        <style type="text/css">
            body{
            font-family: 'Lora', serif;
            background-color: #ECF0F1;
            overflow-y: ;
            }
            .front{
            width: 85rem;
            height: auto;
            background-color: white;
            border:1px solid rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            left: -10px;
            margin: -10px -20px;
            right: 0;
            box-shadow: 0 0px 30px 0px rgba(0,0,0,0.1);
            }
            .front .links{
            width: 100%;
            height: 140px;
            background-color: whitesmoke;
            }
            .front .links h1{
            margin: 20px 65px;
            }
            table{
            border-collapse: collapse;
            margin: -50px 65rem;
            width: 20%;
            }
            table tr,td{
            width: 50px;
            }
            a{
            outline: none;
            color: black;
            text-decoration: none;
            font-size: large;
            font-weight: bold;
            }
            a:hover{
            width: auto;
            height: auto;
            background-color: blue;
            color: white;
            }
            .img{
            height: 110px;
            left: 60px;
            margin: 10PX 160px;
            width: 107px;
            text-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
            filter: drop-shadow(0px 2px 4px gray);
            }
            .img2{
            height: 110px;
            position: absolute;
            left: 60px;
            margin: 10PX 65rem;
            width: 107px;
            text-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
            filter: drop-shadow(0px 2px 4px gray);
            }
            h1{
            top: -10px;
            left: 17rem;
            color: 0BA5FC;
            text-align: center;
            position: absolute;
            }
            .Information{
            width: 30rem;
            height: 50px;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            background-color: #5EC5FD;
            margin: 50px 8rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
            position: absolute;
            }
            .Information .Information_Data{
            margin: 0px 0;
            height: 0rem;
            top: 10px;
            }
            .Information .Information_Data .Information_details {
            height: 20rem;
            font-size: large;
            margin: 0px 5rem;
            overflow: hidden;
            position: absolute;
            width: 30rem;
            margin: 1px -1px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-top: none;
            background-color: white;
            }
            p{
            animation: p_tag  13s infinite;
            position: relative;
            animation-timing-function: linear;
            width: 100%;
            animation-direction: reverse;
            animation-play-state: running;
            background-repeat: repeat-Y;
            }
            @keyframes p_tag{
            0%,100%{
            transform: translateY(-41rem);
            }
            100%{
            transform: translateY(20rem);
            }
            }
            @keyframes p_tag_{
            200%{
            top: 0px;
            }
            to{
            top: 50px; 
            }
            }
            .image_rotate{
            width: 40rem;
            height: 22.44rem;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            margin: 50px 38rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
            position: absolute;
            background-color: white;

            }
          
            
            .image_rotate  .Information_details {
           
          
           
            }
            .image_rotate  .Information_details {
                 width: 40rem;
            height: 22.44rem;
                  animation: image 20s infinite;
                   animation-direction: alternate-reverse;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-play-state: running;
            animation-timing-function: ease-in-out;
             background-repeat: no-repeat;
      
            margin: 0px 0px;
           back
            z-index: 1;
            }
            @keyframes image{
            0%{
            background-image: url("school/shishu-back.png");
            }
            20%{
            background-image: url("school/pooja.png");
            }
            40%{
            background-image: url("school/anounce.png");
            }
            60%{
            background-image: url("school/teacher.png");
            }
            80%{
            background-image: url("school/baner.png");
            }
            100%{
            background-image: url("school/shishu-back.png");
            }
            }
            .Student-Section{
            width: 22rem;
            height: 40px;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            background-color: #5EC5FD;
            margin: 27rem 8rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
            position: absolute;
            }
            .Student-Section.Information_Data{
            margin: 0px 0;
            height: 0rem;
            top: 10px;
            }
            .Student-Section .Information_Data .Information_details {
            height: 12rem;
            font-size: large;
            margin: 0px 20rem;
            overflow: hidden;
            position: absolute;
            width: 22rem;
            margin: 1px -1px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-top: none;
            background-color: white;
            }
            .School-Section{
            width: 22rem;
            height: 40px;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            background-color: #5EC5FD;
            margin: 27rem 40rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
            position: absolute;
            }
            .School-Section.Information_Data{
            margin: 0px 0;
            height: 0rem;
            top: 10px;
            }
            .School-Section .Information_Data .Information_details {
            height: 12rem;
            font-size: large;
            margin: 0px -10rem;
            overflow: hidden;
            position: absolute;
            width: 22rem;
            margin: 1px -1px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-top: none;
            background-color: white;
            }
            .Support-Section{
            width: 22rem;
            height: 40px;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            background-color: #5EC5FD;
            margin: 27rem 56rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
            position: absolute;
            }
            .Support-Section.Information_Data{
            margin: 0px 0;
            height: 0rem;
            top: 10px;
            }
            .Support-Section .Information_Data .Information_details {
            height: 12rem;
            font-size: large;
            margin: 0px 30rem;
            overflow: hidden;
            position: absolute;
            width: 22rem;
            margin: 1px -1px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-top: none;
            background-color: white;
            }
            .School-Section{
            width: 24rem;
            height: 50px;
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            background-color: #5EC5FD;
            margin: 27rem 31rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
            position: absolute;
            }
            .School-Section.Information_Data{
            margin: 0px 0;
            height: 0rem;
            top: 10px;
            }
            .School-Section .Information_Data .Information_details {
            height: 12rem;
            font-size: large;
            margin: 0px 5rem;
            overflow: hidden;
            position: absolute;
            width: 24rem;
            margin: 1px -1px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-top: none;
            background-color: white;
            }
            li {
            text-decoration: none;
            list-style: none;
            outline: none;
            text-align: left;
            }
            .copy_right{
            position: absolute; 
            margin: 43rem -10px;
            background-color: #ff3300;
            width: 84.45rem;
            font-size: 30px;
            text-align: center;
            color: whitesmoke;
            height: 80px;
            font-weight: bold;
            }
            .copy_right .copy_right_information{
            margin: 20px 0;
            font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h1>
            <div style="font-size: 55px;">SARASWATI SHISHU MANDIR</div>
            NOWGONG CHHATARPUR (MP)
        </h1>
        <div class="front">
            <div class="links">
                <img src="shishu.png" class="img">
                <img src="shishu.png" class="img2">
            </div>
        </div>
        <div class="Information">
            <div class="Information_Data">
                Important Notice
                <div class="Information_details">
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">1 Registation has opened <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">2 Admit card has been relse <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">3 Registation has opened <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">4 Result are anuncement <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">5 Registation has opened <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">6 Result are anuncement <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">7 Registation has opened <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">8 Result are anuncement <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">9 Registation has opened <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">10 Result are anuncement <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">11 Result are anuncement <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">12 Result are anuncement <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">13 Result are anuncement <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">14 Result are anuncement <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">15 Registation has opened <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                    <p><img src="new_icon_blink.gif" style="width: 30px; height: 12px; position: absolute; margin: 6px 290px;">16 Result are anuncement <img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -260px;"></p>
                </div>
            </div>
        </div>
        <div class="image_rotate">
         
                <div class="Information_details">
                          </div>
        </div>
        <div class="Student-Section">
            <div class="Information_Data">
                Student Section
                <div class="Information_details">
                    <!-- <img src="student.png" style="width:100px;height: 100;"> -->
                    <div style="background-image: url('student.png');width:40rem;height:15rem; position:absolute; background-repeat: no-repeat; margin:-20px 150px;">
                        <li style="margin:50px -150px;">
                            <ol><img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -20px;"><a href="login">Login</a></ol>
                            <ol><img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -20px;">
                                <input type="hidden" style="position: absolute;" name="data_Registration" id="data_Registration" value="1">    <a href="javascript:void(0)" onclick="Registration()">Registration</a>
                            </ol>
                            <ol><img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -20px;"><a href="Forgottenpassword">Forgot password?</a></ol>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="School-Section">
            <div class="Information_Data">
                School Section
                <div class="Information_details">
                    <div style="background-image: url('school.png');width:22rem;height:12rem; position:absolute; background-repeat: no-repeat; margin:0 150px;">
                        <li style="margin: 0 -150px;">
                            <ol><a href="Teacher"><img src="news_bullet.png" style="width:10px;  height: 10px;position: absolute; margin: 6px -20px;">Login</a></ol>
                            <ol><img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -20px; box-shadow: none;">Staff Database</ol>
                            <ol><img src="news_bullet.png" style="width:10px;height: 10px;position: absolute; margin: 6px -20px;">Forgot password?</ol>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="Support-Section">
            <div class="Information_Data">
                Suggestation
                <div class="Information_details" >
                    <div style="background-image: url('suggestation.png');width:22rem;height:12rem; position:absolute; background-repeat: no-repeat; margin:0 120px">
                        <li style="margin: 0 -120px;">
                            <ol><a href="#"><img src="news_bullet.png" style="width:10px;  height: 10px;position: absolute; margin: 6px -20px;">have you got suggestions ?</a></ol>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div  class="copy_right">
            <div class="copy_right_information"></div>
            Devloped and Desigen by Student's GOVT Polytechnic College Nowgong 2021 
        </div>
        <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
        <script type="text/javascript">
            function Registration(argument) {
                 jQuery.ajax({
                    url:'Registration_line.php',
                    method:'post',
                    data:jQuery('#data_Registration').serialize(),
                    success:function(data){
                        if (data==1) {
                            window.location.href='Registration_from';
                        }else{
                            alert('Registration Form line has closed');
                        }
            
                    }
                 });
            }
        </script>
    </body>
</html>