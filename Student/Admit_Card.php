<!DOCTYPE html>
<html>
	<?php 
		session_start();
		    session_id();

		require 'connection.php';
		$name=$_SESSION['user'];
		$query_Registation=mysqli_query($Database,"select *from student where Email ='$name'");
		
		 $Registation_array=mysqli_fetch_array($query_Registation);
		 $_SESSION['Registation_number']=$Registation_array['Registation'];
		  if (isset($name)==true) {
		  // code...
		
		?>
	<head>
		<title>Student</title>
		<link rel="shortcut icon" type="image/jpg" href="shishu.png">
		<link rel="stylesheet" type="text/css" href="newFrame.css">
		      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

		<?php
			require 'link.php';
			
			?>
		<style>
			body{
		
			}
			.school_Details{
			width: 40rem;
			border-bottom: 1px solid gray;
			text-underline-position: center;
			text-align: center;
			font-size: 20px;
			margin: 0 40px;
			left: 10rem;
			opacity: 1;
			}
			/*table{
			width: 24rem; padding: 0 10PX; margin: 20px 10px;
			border-collapse: collapse;
			}
			table tr,td{
			margin: 0 0;
			padding: 0 -50px;
			}*/
			.img_s{
			width: 100px;
			height:100px;
			position: absolute;
			margin: 20px 35rem;
			border:1px solid blue;
			}
			.border{
				position: relative;
			border:1px solid rgba(0, 0, 0, 0.2);
			width: 46.5rem;
			background-color: white;
			height: 31.5rem;
			left: 4rem;
			top: 13px;
			box-shadow: 0 0px 30px 0px rgba(0,0,0,0.1);

			}
			#img1{
			opacity: 1;
			height: 50px;
			width: 50px;
			position: absolute;
			margin: 0px -70px;
			}
			.center{
					border:1px solid rgba(0, 0, 0, 0.1);

			}
			#img{
			text-shadow: 3px 3px 3px #BEBEBE;
			opacity: 0.20;
			height: 300px;
			width: 290px;
			position: absolute;
			margin: 80px 190px;
			text-align: center;
			}
			#td_{
			border-right:1px solid rgba(0, 0, 0, 0.1);
 
			padding: 0 0;
			}
			th{
			color: black;
			border-bottom: :1px solid rgba(0, 0, 0, 0.1);

			}
			         .input-group-text{
         width:50px;
         height:50px;
         left: 51rem;
         margin: 0 0;
         position: absolute;
         border-radius: 0;
         border: 1px solid rgba(0, 0, 0, 0.1);
         background-image: url('school/print.gif');
         background-size: cover;
         background-repeat: round;
         min-width: 50px;
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
				<img src="shishu.png" class="shishu_img">
			</div>
		</div>
		<div class="Center">
			<!--  <div id="disable-link" style="position: absolute; left: 180px; top: 90px;"></div> -->
			<div class="top">
				<div id="FirstName">                          
					<?php                                
						$con = mysqli_connect("localhost","root",'');
						mysqli_select_db($con,"school");
						$query="select *from Student where Email='$name'";
						$result= mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result)){                             
						echo $row["FirstName"]." ".$row['LastName'];
						?>
				</div>
				<div id="student_image">
					<?php
						echo'<img  src="photo/'.$row['Photo'].'" width="50px" height="50px"';
						 }       
						?>
				</div>
				<div id="Logout">
					<a style="outline: none border-style: none;display: block;color: red; outline:none; text-decoration: none;" href="Logout" > Logout</a> 
				</div>
			</div>
			<div class="div1">
				  <table>
          <tr>
            <td>
              <a href="Return">Profile</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="IdCard">Id Card</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="Admit_Card">Admit Card</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="ResultStore">Result</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="Payment">Pay Fee</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="Transaction">Transaction</a>
            </td>
          </tr>
        </table>
			</div>
		</div>
		<?php
			require 'connection.php';
			$username=$_SESSION['username'];
			$query1 = mysqli_query($Database,"select *from student where Email='$username'");
			$result1 = mysqli_fetch_array($query1);
			$Registation=$result1['Registation'];
			$query = mysqli_query($Database,"select *from student");
			// $result = mysqli_fetch_array($query);
			$Examination='';
			$date_Examination_Declare='';
			 $fetch_query = mysqli_query($Database,"select *from declare_admitcard");
			while($results = mysqli_fetch_array($fetch_query)){
				if ($results['Month']=='QUARTERLY  EXAMINATION') {
					  $Examination='QUARTERLY  EXAMINATION';
					  $date_Examination_Declare=$results['Date_Declare'];
				}
				else if($results['Month']=='HALFYEARLY EXAMINATION'){
					  $Examination='HALFYEARLY EXAMINATION';
					  $date_Examination_Declare=$results['Date_Declare'];
				}
				else if($results['Month']=='YEARLY EXAMINATION'){
					  $Examination='YEARLY EXAMINATION';
					  $date_Examination_Declare=$results['Date_Declare'];
				}
			}

			 if ($Examination) {
			 	?>
		<div style="">
		
			<a href="Admit?url=<?php echo md5($username)?>" target="_blank">  <span class="input-group-text"></span></a>
		</div>
		<div class="border">
			<DIV class="school_Details"><img src="shishu.png" id="img1"><u>SARASWATI HEIGHER SECONDERY  SCHOOL NOWGONG, CHHATARPUR MADHYA PRADESH<br>Admit Card</u></DIV>
			<table style="margin: 0 10px;">
				<?php
					$data='';
					while($result = mysqli_fetch_array($query)){
					
					if(($result['Registation']==$Registation)) {
					$data='
					<tr>
					<td>NAME</td>
					<TD>'.strtoupper($result['FirstName']).' '.strtoupper($result['LastName']).'</TD>
					    
					</tr>
					<img src="photo/'.$result['Photo'].'" class="img_s">
					<tr>
					<td>FATHERS NAME</td>
					<TD>'.strtoupper($result['FatherName']).'</TD>
					
					</tr>
					<tr>
					<td>CLASS</td>
					<TD>'.strtoupper($result['Class']).'</TD>
					
					</tr>
					<tr>
					<td>ROLL NUMBER</td>
					<TD>'.strtoupper($result['RollNumber']).'</TD>
					
					</tr>
					<tr>
					<td>EXAMINATION</td>
					<TD>'.strtoupper($Examination).'</TD>
					</tr>
					<tr>
					<td>RELEASE DATE</td>
					<TD>'.$date_Examination_Declare.'</TD>
					
					</tr>
					<img src="shishu.png" id="img">';
				}
			}
					echo $data;
					
					?>
			</table>
			<table align="center" class="center" style="border-collapse: collapse; border:1px solid rgba(0, 0, 0, 0.1);width: 42rem;">
				<tr style="">
					<Th id="td_"  rowspan="2" style=" text-align: center; border-bottom: 1px solid rgba(0, 0, 0, 0.1);">SN</Th>
					<th id="td_"  colspan="2" style="			border:1px solid rgba(0, 0, 0, 0.1); text-align: center;">SUBJECT NAME</th>
				</tr>
				<tr>
					<th id="td_"  style=" text-align: center; border-bottom: 1px solid rgba(0, 0, 0, 0.1);">THEORY</th>
					<Th id="td_"  style=" text-align: center; border-bottom: 1px solid rgba(0, 0, 0, 0.1);">PRACTICAL</Th>
				</tr>
				<tr>
					<td id="td_"  style=" text-align: center;">01</td>
					<TD id="td_"  style=" text-align: center;">HINDI</TD>
					<TD id="td_"  style=" text-align: center;">-</TD>
				</tr>
				<tr>
					<td id="td_"  style=" text-align: center;">02</td>
					<TD id="td_"  style=" text-align: center;">ENGLISH</TD>
					<TD id="td_"  style=" text-align: center;">-</TD>
				</tr>
				<tr>
					<td id="td_"  style=" text-align: center;">03</td>
					<TD id="td_"  style=" text-align: center;">SANSKRIT</TD>
					<TD id="td_"  style=" text-align: center;">-</TD>
				</tr>
				<tr>
					<td id="td_"  style=" text-align: center;">04</td>
					<TD id="td_"  style=" text-align: center;">SOCIAL SCIENCE</TD>
					<TD id="td_"  style=" text-align: center;">-</TD>
				</tr>
				<tr>
					<td id="td_"  style=" text-align: center;">05</td>
					<TD id="td_"  style=" text-align: center;">SCIENCE</TD>
					<TD id="td_"  style=" text-align: center;">-</TD>
				</tr>
				<tr>
					<td id="td_"  style=" text-align: center;">06</td>
					<TD id="td_"  style=" text-align: center;">MATH</TD>
					<TD id="td_"  style=" text-align: center; ">-</TD>
				</tr>
			</table>
			<table style="padding: 20px 50px; width:100%;">
				<tr>
					<td style="margin: 0 20px;">
						<div>PRINCIPAL SIGNATURE</div>
					</td>
					<td>
						<div>CLASS TEACHER SIGNATURE</div>
					</td>
				</tr>
			</table>
			<div style="margin: 20px 30px; position: absolute; width: 20rem"> </div>
			<div style="position: absolute; width: 20rem; margin: 10px 27rem;  "> </div>
			<?php
				}
				else{
					echo "<DIV style='border:1px solid rgba(0,0,0,0.1); width: 80%; 	background:white;		box-shadow: 0 0px 30px 0px rgba(0,0,0,0.1);
 text-align: center;;color: black; font-size:20px; height:30px; padding:10px 0; margin: 150px 150px;'>Admit Card not found</DIV>";
				}
				?>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script>
			var header = document.getElementById("myDIV");
			var btns = header.getElementsByClassName("btn");
			for (var i = 0; i < btns.length; i++) {
			
			btns[i].addEventListener("click", function() {
			var current = document.getElementsByClassName("active");
			current[0].className = current[0].className.replace(" active", "");
			this.className += " active";
			});
			}  
		</script>
		</div>
		<div  class="copy_right">
			<div class="copy_right_information"></div>
			Devloped and Desigen by Student's GOVT Polytechnic College Nowgong 2021 
		</div>
		<?php }
			else{
			  header('location:index.php');
			}?>
	</body>
</html>
</body>
</html>
<!--  -->
</body>
</html>