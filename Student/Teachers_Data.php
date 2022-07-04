<?php 
    session_start();
    session_id();

    require 'connection.php';
     if ($_SESSION['username']==true) {
     	//echo "<script>alert("$_SESSION['username']")</script>";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Students Records</title>
	     <link rel="shortcut icon" type="image/jpg" href="shishu.png">
	     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">
	<?php require 'link.php';?>
	<link rel="stylesheet" type="text/css" href="newFrame2.css">
	<style type="text/css">
		
body{
	font-family: 'Lora', serif;

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
			background-color:navy;
			position: absolute;
			text-align: center;
			box-sizing: border-box;
			box-shadow: 10px 0px 20px rgba(0,0,0,0.1);

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
.image{
width: 55px;
	height: 55px;
	border: 10px;
	position: relative;
	left: 00px;}
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
                  $query_class = "select *from student where Class='$class'";
                  $query_class_result = mysqli_query($Database ,$query_class);
                  $total_Student  = mysqli_num_rows($query_class_result);
                //  $class = $query_retrive['Class'];        
		?>
	<!-- <div style="top: -5px;color:black; position:  absolute; margin: 36px 36%;"><input type="" name="" placeholder="Search"></div>
	<a href="#" style="top: -5px;color:black; position:  absolute; margin: 36px 43%; text-decoration: none;" id="notification">Notificatoin</ -->
	
   	 <div style="top: -5px;position:absolute; margin: 8px 4%;"><img src="shishu.png" class="image"></div>

	<div style="top: -5px;position:  absolute; margin: 23px 10%;">WELCOME : <?php echo strtoupper($query_retrive['Name']); ?></div>
	<div style="top: -5px;color:black; position:  absolute; margin: 23px 30%;">STUDENT'S : <?php echo  $total_Student;?></div>
	<div style="top: -5px;color:black; position:  absolute; margin: 23px 25%;">CLASS: <?php echo  $class;?></div>
    <div style="top: -5px;color:black; position:  absolute; margin: 10px 40%;"><a href="logout" class="logout" style="top: -5px;color:black; position:  absolute; margin: 23px 180px;"> logout</a></div>
     </div>
	<div class="Contain" align="center" style="color: white;"> 
		<li style="color: white;">
			<ol>
			  	     <a href="record/Information?url=<?php echo $username;?>" > Information</a>
			   </ol>
			    <ol>
				      <a href="record/Roll_Number?url=<?php echo $username;?>" > Roll Number</a>
			    </ol>	
				<ol >
					 <a href="record/TestResult?url=<?php echo $username;?>"> TestResult</a>
				</ol>
				<ol>
           <a href="record/ExamResult?url=<?php echo $username;?>">ExamResult</a>
				</ol>
			
		    	<ol>
					 <a href="record/top?url=<?php echo $username;?>">TOP 10</a>
				</ol>
				<ol >
					  <a href="record/TestResultCreate?url=<?php echo $username;?>">TestResultCreate</a>
				</ol>
				<ol>
					  <a href="record/EXAMINATION_RESULT_CREATE_PANEL?url=<?php echo $username;?>">ExamResultCreate</a>
				</ol>
		    
				<ol>
					<a href="record/TestResultDeclare?url=<?php echo $username;?>">TestResultDeclare</a>
				</ol>
				<ol>
					<a href="record/Fee?url=<?php echo $username;?>">Profile</a>
				</ol>
				
		</li>
	</div>
</div>
</div>

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