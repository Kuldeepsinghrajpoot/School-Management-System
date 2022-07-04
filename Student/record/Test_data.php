<?php 
    require 'connection.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Students Records</title>
	<?php require 'link.php';?>
	<style type="text/css">
		

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
		th{
			height: 5px;
		}
		.Admit_card_info_exam{
	width: 100%;
	height: 30px;
	top: 5px;
	margin: 10px 0;
	text-align: center;
	text-decoration: none;
	border-bottom: none; 
	background-color: blue;
	color: white;
	  background-image: linear-gradient(0deg,gray,darkgray);

}
	</style>

<table>
		<tr>
			<th rowspan="2">SN</th>			
			<th rowspan="2">STUDENT'S NAME</th>
			<th rowspan="2">ROLL NUMBER</th>		
			<th colspan="6">SUBJECT</th>
			<th rowspan="2">TOTAL MARKS</th>
			<th rowspan="2">RESULT</th>
			
		</tr>
		<tr>
			<th>HIDNI</th>
			<th>SANSAKRIT</th>
			<th>ENGLISH</th>
			<th>MATH</th>
			<th>SOCIAL SCIENCE</th>
			<th>SCIENCE</th>
			
		</tr>
		<tr>
	<?php 
	  $count =1;
	  $a="'";

     $MONTH  = mysqli_real_escape_string($Database,$_POST['month']);
     $Class  = mysqli_real_escape_string($Database,$_POST['Class']);
     $sql    = "select * from student s inner join examination e on s.RollNumber= e.RollNumber where Class='$Class'";
     $result = mysqli_query($Database,$sql);
	  echo'<div class="Admit_card_info_exam">'.strtoupper($MONTH).' EXAMINATION RESULT OF STUDENT</div>';
	  
            while($cvrow = mysqli_fetch_array($result)){
            	if (strtoupper($cvrow['MONTH'])==strtoupper($MONTH)) {
            		# code...
            	
             	echo'
			<TD>'.$count++.'</TD>
			<TD>'.$cvrow['FirstName']." ".$cvrow['LastName'].'</TD>
			<TD>'.$cvrow['RollNumber'].'</TD>			
			<TD>'.$cvrow['Hindi'].'</TD>
			<TD>'.$cvrow['Sansakrit'].'</TD>
			<TD>'.$cvrow['English'].'</TD>
			<TD>'.$cvrow['Math'].'</TD>
			<TD>'.$cvrow['Social'].'</TD>
			<TD>'.$cvrow['Science'].'</TD>
			<TD>'.$cvrow['Total'].'</TD>
			<TD>'.$cvrow['Result'].'</TD>
			
		</tr>';
	}
	}
	?>
	</table>
	