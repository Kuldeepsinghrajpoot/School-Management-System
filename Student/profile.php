<?php 
   session_start();
   session_id();
   
   
    if ($_SESSION['username']==true) {
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Students Records</title>
      <link rel="shortcut icon" type="image/jpg" href="shishu.png">
      	     <link rel="stylesheet" type="text/css" href="link.css">

      <link rel="stylesheet" type="text/css" href="styleone.css">
       	 <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
       	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


      <style type="text/css">
      body{
	font-family: 'Lora', serif;
	        background-color: #ECF0F1;

	color: black;
	
}
#img1{
	position: relative;
	top: 2px;
	width: 50px;
	height: 50px;
}
		.menu_left .h1{
			font-family: 'Lora', serif;
			width: 200%;
			height: 60px;
			margin: -12px -9px;
			color: black;
			background-color:white;
			box-sizing: border-box;
			box-shadow: 0 5px 20px rgba(0,0,0,0.1);
			position: fixed;
		}
		.menu_left .Contain{
			margin: 48px -9px;
			height: 54rem;
			width: 13rem;
			color: red;
			background-color: orangered;
			position: absolute;
			text-align: center;
			box-sizing: border-box;
			box-shadow: 10px 0px 25px -10px rgba(0,0,0,0.1);

		}
		.menu_left .Contain li,ol{
			color: red;
			width: 215px;
			outline: none;
			text-align: center;
			list-style: none;
			padding: 5px 0px;
			text-decoration: none;
            position: relative;
			font-weight: bold;
			font-size: 22px;
			height: 20px;
		}
		a{
			color: white;
		}






.logout{ top: -5px;
	color:black; 
	position:  absolute; 
	margin: 23px 180px;
	position: absolute;
	outline: none;
	font-size: 1.2rem;
	text-decoration: none;
}
.logout:hover{
	height: 20px;
	font-size: 1.2rem;
	width: 70px;
	text-align: center;
	margin: 24px 175px;
	position: absolute;
	background-color: white;
	color: darkred;
}

	.div_contains{

		background-color: white;
		width: 50%;
		height: all;
		top: 5rem;
		left: 25rem;
		position: relative;
		background-color: white;
		box-shadow: 0 0px 30px 0px rgba(0,0,0,0.1);
		padding: 5px 5px;
		
	}
	.div_contains .fees_Details{ margin: 1rem 1rem;
		background-color: white;
		width: 95%;
		height: all;
				


	}
	.div_contains .fees_Details {
		border-collapse: collapse;
		border: 1px solid rgba(0, 0, 0, 0.1);

	}
	.div_contains .fees_Details th{
		border-collapse: collapse;
		border: 1px solid rgba(0, 0, 0, 0.1);
		background-color: whitesmoke;

	}
	.div_contains .fees_Details .Profile{
		text-align: center;
		position: relative;
		      background-image: linear-gradient(0deg,gray,darkgray);
	}
	/**/
	.password_contains{

		background-color: white;
		width: 50%;
		height: all;
		top: 7rem;
		left: 25rem;
		position: relative;
		background-color: white;
		box-shadow: 0 0px 30px 0px rgba(0,0,0,0.1);
		padding: 5px 5px;
		text-align: left;
		
	}
	.password_contains .fees_Details{ margin: 1rem 1rem;
		background-color: white;
		width: 95%;
		height: all;
				


	}
	.password_contains .fees_Details {
		border-collapse: collapse;
		border: 1px solid rgba(0, 0, 0, 0.1);

	}
	.password_contains .fees_Details th{
		border-collapse: collapse;
		border: 1px solid rgba(0, 0, 0, 0.1);
		background-color: whitesmoke;

	}
	.password_contains .fees_Details .Profile{
		text-align: center;
		position: relative;
		      background-image: linear-gradient(0deg,gray,darkgray);
	}
	/**/
	.fees_Details  tr td {
		border-collapse: collapse;
		text-align: center;
		border: 1px solid rgba(0, 0, 0, 0.1);

	}
input{
	width: 99%;
	height: 30px;
	border: none;
	font-family: 'Lora', serif;
	font-size: 1rem;
}
input[type='password']:focus{
	border: none;
	outline: none;
}
input[type='text']:focus{
	border: none;
	outline: none;
}
	button{
		position: relative;
		border: none;
		width: 6rem;
		height: 2rem;
		padding: 2px 5px;
		cursor: pointer;
		font-size: 1.2rem;
		font-family: 'Lora', serif;
	}
	

	
	button:hover{
		background-color: blue;
		color: whitesmoke;
		transition: 0.3s;
		font-size: 1.2rem;
	}
         /*tr:nth-child(odd),#roll:nth-child(even) {background-color: #f2f2f2;}
         #roll:nth-child(even){background-color: #f2f2f2;}*/
      </style>
   </head>
   <body>
      <div class="search_bar" style="position: fixed;">
         <div class="menu_left" style="position: fixed;">
            <div class="h1">
               <?php
                  $connection = mysqli_connect("localhost","root","");
                  mysqli_select_db($connection,"teacher");
                        $username = mysqli_real_escape_string($connection,$_GET['url']);
                        $result_query = "select *from teacher_information where md5(Email)='$username'";
                        $exe = mysqli_query($connection,$result_query);
                  
                        $query_retrive = mysqli_fetch_assoc($exe);
                                          
                        
                      //  $class = $query_retrive['Class'];        
                  ?>
               <div style="top: -5px;position:  absolute; margin: 8px 4%;"><img src="shishu.png" id="img1"></div>
               <div style="top: -5px;position:  absolute; margin: 23px 10%;">WELCOME : <?php echo strtoupper($query_retrive['Name']); ?></div>
               <div style="top: -5px;color:black; position:  absolute; margin: 10px 40%;"><a href="logout" class="logout"> logout</a></div>
            </div>
            <div class="Contain" align="center" style="color: white;">
               <li style="color: white;">
                
                  <ol>
                     <a href="DeclareResult?url=<?php echo $username;?>">Declare Result</a>
                  </ol>
                  <ol>
                     <a href="AdmitCard?url=<?php echo $username;?>">Admit Card</a>
                  </ol>
                  <ol>
                     <a href="Registration?url=<?php echo $username;?>">Registration</a>
                  </ol>
                  <ol>
					   <a href="profile.php?url=<?php echo $username;?>">Profile</a>
				</ol>
               </li>
            </div>
         </div>
      </div>

      <!-- Registrarion -->
     <?php 
          $result =mysqli_query($connection,"select *from teacher_information where md5(Email)='$username'");

?>
<div class="div_contains">
<table class="fees_Details">

	<tr><form method="post" id="UPD">       
                <DIV class="Profile" style="background-image: linear-gradient(0deg,	#FF1493,	#FF69B4); text-align: center; width: 101.6%; text-align: center; font-size: 1.2rem; color:white; top: -5px; margin: 0 0; left: -6px; position: relative;font-size: 1.2rem; color:white;">Update Information</DIV>
        <div class="top1">
             
               <?php
               $a ="'";
                 while($row = mysqli_fetch_array($result)) {
            echo 
                ' <input type="hidden" name="Email1" value="'.$row['Email'].'">
                <tr>
                  <td>User Id</td>
                  <td><input type="text" name="Name" value="'.$row['user_id'].'" disabled></td>
                  </tr>
                   <tr>
                  <td>Name</td>
                  <td><input type="text" name="Name" value="'.$row['Name'].'"></td>
                  </tr>
                    
                  <tr>
                  <td>Email </td>
                  <td><input type="text" name="Email" value="'.$row['Email'].'">
                   </tr><tr>
                   <td>Contact  </td>
                  <td><input type="text" name="Contact" value="'.$row['Contact'].'">
                  </td>
                  </tr>
                  <input type="hidden" name="class" value="'.$row['Class'].'">
                   ';}?> 
                  <tr>              
                  <td class="class" style="border-right: none; left: 10rem; position: relative; "><button type="button" class="btn" onclick="update_change()">Update</button></td>
                  </tr>
                
        
  </form>
</table>
</div>
<?php 
          $result =mysqli_query($connection,"select *from teacher_information where md5(Email)='$username'");

?>
                 <div class="password_contains" >
<table class="fees_Details" >

	<tr><form method="post" id="form">       
                <DIV class="Profile" style="background-image: linear-gradient(0deg,#7B68EE,#6A5ACD); width: 101.6%; text-align: center; font-size: 1.2rem; color:white; top: -5px; margin: 0 0; left: -6px; position: relative;">Update Password</DIV>

        <div class="top1">
               <?php
              
                 $row = mysqli_fetch_array($result);
            echo '<input type="hidden" name="Email" value="'.$row['Email'].'">'?>
                    <input type="hidden" name="Information" value="Information">

                   <tr>
                  <td align="right">Old Password</td>
                  <td><input type="password"  id="password" name="Password"></td>
                   <td class="slash"><i id='i' class="fa fa-eye-slash" class="slash" style="font-size:36px"></i></td>
                  </tr>
                    
                  <tr>
                  <td align="left">New Password</td>
                  <td><input type="password" id="new_password" name="New_Password">
                   <td class="slash1"><i id='ii'  class="fa fa-eye-slash" style="font-size:36px"></i></td>
                   </tr><tr>
                   <td align="left">Re-type new password</td>
                  <td><input type="password" id="re_password" name="Re-type_new_password">
                   <td class="slash2"><i id='iii' class="fa fa-eye-slash" style="font-size:36px"></i></td>
                  </td>
                  </tr>
                  <tr>              
                  <td class="class" style="border-right: none; left: 10rem; position: relative; "><button type="button" class="btn" onclick="submit_button()" >Update</button></td>
                  </tr>
                
        
  </form>
</table>
</div> 
      <!--  -->
      <!-- here student marks in month and other examination name -->
      <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
      <script type="text/javascript"> 
a=document.querySelector('.slash');
password=document.querySelector('#password');

a1=document.querySelector('.slash1');
new_password=document.querySelector('#new_password');

a2=document.querySelector('.slash2');
re_password=document.querySelector('#re_password');

var condition='True';
var condition1='True';
var condition2='True';

a.addEventListener('click',function(e) {
	if (condition=='True') {
		$('#i').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		condition='False';
		password.setAttribute('type','text');
	}
		else{
	$('#i').addClass('fa fa-eye-slash');
	password.setAttribute('type','password');
	condition='True';
}
});

/*2*/
a1.addEventListener('click',function(e) {
	if (condition1=='True') {
		$('#ii').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		condition1='False';
		new_password.setAttribute('type','text');
	}
		else{
	$('#ii').addClass('fa fa-eye-slash');
	new_password.setAttribute('type','password');
	condition1='True';
}
});
/**/
/*3*/
a2.addEventListener('click',function(e) {
	if (condition2=='True') {
		$('#iii').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		condition2='False';
		re_password.setAttribute('type','text');
	}
		else{
	$('#iii').addClass('fa fa-eye-slash');
	re_password.setAttribute('type','password');
	condition2='True';
}
});
/**/
	function submit_button(argument) {
	
            	jQuery.ajax({
            		url:'Teacher_data_update/update.php',
            		type:'post',
            		data:jQuery('#form').serialize(),
            		success:function(n) {
            			alert(n);
            			window.location.href='';
            		}
            	});
            }

            function update_change(){
            	jQuery.ajax({
            		url:'Teacher_data_update/info_update.php',
            		type:'post',
            		data:jQuery('#UPD').serialize(),
            		success:function(n) {
            			alert(n);
            			window.location.href='';
            		}
            	});
            
            }
</script>
   </body>
</html>
<?php
   }
      else{
        ?>
<script language="javascript">
   window.location.href = "./";
</script>
<?php
   }
   ?>