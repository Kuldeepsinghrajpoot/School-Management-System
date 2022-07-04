<?php 
    session_start();
    session_id();

    require 'connection.php';

     if ($_SESSION['username']==true) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Students Records</title>
	     <link rel="shortcut icon" type="image/jpg" href="shishu.png">
	      	 <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">

	     <link rel="stylesheet" type="text/css" href="link.css">


	
	<style type="text/css">
body{
	font-family: 'Lora', serif;
	        background-color: #ECF0F1;

	color: black;
	
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
img{
	top: 10px;
	width: 50px;
	height: 50px;
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
		          require 'connection.php';
                  $username = mysqli_real_escape_string($connection,$_GET['url']);
                  $result_query = "select *from teacher_information where md5(Email)='$username'";
                  $exe = mysqli_query($connection,$result_query);

                  $query_retrive = mysqli_fetch_assoc($exe);
                                    $class = $query_retrive['Class'];

                  
                //  $class = $query_retrive['Class'];        
		?>
    <div style="top: -5px;position:  absolute; margin: 8px 4%; width: 50px;height: 50px;"><img src="shishu.png" id="img"></div>
	<div style="top: -5px;position:  absolute; margin: 23px 10%;">WELCOME : <?php echo strtoupper($query_retrive['Name']); ?></div>
	
    <div style="top: -5px;color:black; position:  absolute; margin: 10px 40%;"><a href="logout" class="logout"> logout</a></div>
    <a href="principle" style="margin: 10rem 10rem;"> Home</a>
     </div>
	<div class="Contain" align="center" style="color: white;"> 
		<li style="color: white;">
				
		    	<ol>
					   <a href="DeclareResult.php?url=<?php echo $username;?>">Declare Result</a>
				</ol>
				<ol>
					   <a href="AdmitCard.php?url=<?php echo $username;?>">Admit Card</a>

				</ol>	
				<ol>
					   <a href="Registration.php?url=<?php echo $username;?>">Registration</a>
				</ol>
				<ol>
					   <a href="profile.php?url=<?php echo $username;?>">Profile</a>
				</ol>	
		</li>
	</div>
</div>
</div>
	

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