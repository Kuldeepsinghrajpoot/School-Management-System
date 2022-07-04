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

	
	<?php require 'link.php';?>
	<link rel="stylesheet" type="text/css" href="newFrame2.css">
	<style type="text/css">
		
body{
	font-family: 'Lora', serif;
        background-color: #ECF0F1;
	color: black;
	
   }
		.menu_left .h1{
			font-family: 'Lora', serif;
			width: 100%;
			height: 60px;
			margin: -12px -9px;
			    margin: -5.2rem -7px;

			color: black;
			background-color:white;
			box-sizing: border-box;
			box-shadow: 0 0px 30px 0 rgba(0,0,0,0.1);
			position: fixed;
		}
		.menu_left .Contain{
			margin: -1.44rem -9px;
			height: 54rem;
			width: 13rem;
			color: red;
			background-color:navy;
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
a:hover{
color: black;
height: 35px;
width: 208px;
margin: 0 0;
background-color:red;
cursor:pointer; 
font-family: 'Lora', serif;
z-index:-1;
		}
		
 #Information_Student{
    background-color:#ECF0F1 ;
    width: 100%;  
    left: 50rem;
    margin: 5rem 13rem;
}
#Information_Student table{
	border-collapse: collapse;
	border:1px solid #BEBEBE;
	background-color:white; 
	z-index: 1;
}
#Information_Student table tr,td,th{
	border:1px solid #BEBEBE;
	text-align: center;
	font-size: 15px;
	width: 100%;
}
 
th{
		background-color: #BEBEBE;

}
#img{
	width: 55px;
	height: 55px;
	border: 10px;
	position: relative;
	left: 50px;
}

.logout{ top: -5px;
	color:black; 
	position:  fixed; 
	outline: none;
	font-size: 1.2rem;
	text-decoration: none;
}
.logout:hover{
	height: 20px;
	font-size: 1.2rem;
	width: 70px;
	text-align: center;
	position: absolute;
	background-color: white;
	color: darkred;
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
                  $query_class = "select *from student where Class='$class'";
                  $query_class_result = mysqli_query($Database ,$query_class);
                  $total_Student  = mysqli_num_rows($query_class_result);
                //  $class = $query_retrive['Class'];        
		?>
	<div style="top: -5px;color:black; position:  absolute; margin: 36px 76%;"><input type="" name="" placeholder="Search"></div>
    <div style="top: -5px;position:  absolute; margin: 8px 4%;"><img src="shishu.png" id="img"></div>
	<div style="top: -5px;position:  absolute; margin: 23px 20%;">WELCOME : <?php echo strtoupper($query_retrive['Name']); ?></div>
	<div style="top: -5px;color:black; position: relative; width: 150px; margin: 23px 63%;">STUDENT'S : <?php echo  $total_Student;?></div>
	<div style="top: -5px;color:black; position:  absolute; width: 100px; margin: 23px 53%;">CLASS: <?php echo  $class;?></div>
    <div style="top: -5px;color:black; position:  absolute; margin: 10px 80%;"><a href="logout" class="logout" style="top: -5px;color:black; position:  absolute; margin: 23px 180px;"> logout</a></div>
     </div>
	<div class="Contain" align="center" style="color: white;"> 
		<li style="color: white;">
			<ol>
			  	     <a href="Information?url=<?php echo $username;?>"> Information</a>
			   </ol>
			    <ol>
				      <a href="Roll_Number?url=<?php echo $username;?>" > Roll Number</a>
			    </ol>	
				<ol >
					 <a href="TestResult?url=<?php echo $username;?>"> TestResult</a>
				</ol>
				<ol>
           <a href="ExamResult?url=<?php echo $username;?>">ExamResult</a>
				</ol>
			
		    	<ol>
					 <a href="top?url=<?php echo $username;?>">TOP 10</a>
				</ol>
				<ol >
					  <a href="TestResultCreate?url=<?php echo $username;?>">TestResultCreate</a>
				</ol>
				<ol>
					  <a href="EXAMINATION_RESULT_CREATE_PANEL?url=<?php echo $username;?>">ExamResultCreate</a>
				</ol>
		    
				<ol>
					<a href="TestResultDeclare?url=<?php echo $username;?>">TestResultDeclare</a>
				</ol>
				<ol>
					<a href="Fee?url=<?php echo $username;?>">Profile</a>
				</ol>
				
		</li>
	</div>
</div>
</div>
	<div id="Information_Student">
	<table>
		<tr>
			<th>SN</th>
			<th>STUDENT'S NAME</th>
			<th>REGISTATION NUMBER</th>
			<th>ROLL NUMBER</th>
			<th>FATHER'S NAME</th>
			<th>MOTHER'S NAME</th>
			<th>DOB</th>
			<th>CATEGORY</th>
			<th>GENDER</th>
			<th>CONTACT</th>
			<th>ADDHAR NUMBER</th>
			<th>SAMAGRA ID</th>
			<th>POST</th>
			<th>DIST</th>
			<th>PIN</th>
			<th>CITY/VILLAGE</th>
			<th>ADDRESS</th>
			<th>ADDMISION DATE</th>  
            <th>ADDMISION FEES</th>  
            <th>PASS OUT YEAR</th>  
            <th>PASS OUT CLASS</th>  
            <th>PASS OUT SCHOOL</th>  
            <th>PASS OUT SCHOOL ADDRESS</th>  
            <th>PASS OUT CITY</th>  
            <th>PASS OUT POST</th>  
            <th>PASS OUT TEHSIL</th>  
            <th>PASS OUT DIST</th> 
            <th>PHOTO </th> 
            <th>SIGNATURE</th>  
		</tr>
		<?php
                       $sql = "select *from student where Class='$class'";
     $result = mysqli_query($Database,$sql);
		 $a=1; while ($row=mysqli_fetch_array($result)) {
      echo '<tr>
			<TD>'.$a++.'</TD>
			<TD>'.$row['FirstName'].' '.$row['LastName'].'</TD>
			<TD>'.$row['Registation'].'</TD>
			<TD>'.$row['RollNumber'].'</TD>
			<TD>'.$row['FatherName'].'</TD>
			<TD>'.$row['MotherName'].'</TD>
			<td>'.$row['DOB'].'</td>
			<TD>'.$row['Catagory'].'</TD>
			<td>'.$row['Gender'].'</td>
			<td>'.$row['Contact'].'</td>
			<TD>'.$row['Addhar'].'</TD>
			<TD>'.$row['samgra_id'].'</TD>
			<TD>'.$row['POST'].'</TD>
			<td>'.$row['Dist'].'</td>
            <td>'.$row['PIN'].'</td>
            <td>'.$cv=$row['CityVillage'].'</td>
			<TD>'.$row['Temprary_Address'].'</TD>
			<td>'.$row['Admission_Date']. '</td>  
            <td>'.$row['Admission_fees']. '</td>  
            <td>'.$row['Passing_Year'].'   </td>  
            <td>'.$row['Passing_Class'].'   </td>  
            <td>'.$row['Pass_out_School'].'</td>  
            <td>'.$row['pass_out_school_address'].'</td>  
            <td>'.$row['pass_out_City'].'  </td>  
            <td>'.$row['pass_out_post'].'  </td>  
            <td>'.$row['pass_out_tehsel'].'</td>             
            <td>'.$row['pass_out_dist'].'  </td> 
            <td><img style="margin:0 0px; border:1px solid blue; height:100px;width:100px;" src="../photo/'.$row['Photo'].'"alt="Image";/>  </td>
            <td><img  style="border:1px solid blue; height:100px;width:100px;"src="../image/'.$row['Signature'].'"alt="Image"
              />  </td>
		</tr>';}?>
	</table>
</div>
<!-- <a href="javascript:void(0)" style="position: absolute; color: black; top:95%; left: 40%; ">444444444444444444444hello</a> -->
</div>

<?php
 }

    else{
      ?>
         <script language="javascript">
             window.location.href = "../";
        </script>
<?php
     }
?>