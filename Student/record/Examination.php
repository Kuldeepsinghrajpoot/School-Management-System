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
	  background-image: linear-gradient(0deg,darkred,red);
}

	</style>

<table>
		<tr>
			<th rowspan="2">SN</th>			
			<th rowspan="2">STUDENT'S NAME</th>
			<th rowspan="2">ROLL NUMBER</th>		
			<th colspan="12">SUBJECT</th>
			<th rowspan="2">TOTAL MARKS</th>
			<th rowspan="2">RESULT</th>
			<th rowspan="2">PERCENTAGE</th>
		</tr>
		<tr>
			<th>HIDNI</th>
			<th>SANSAKRIT</th>
			<th>ENGLISH</th>
			<th>MATH</th>
			<th>SOCIAL SCIENCE</th>
			<th>SCIENCE</th>
			<th>HINDI PROJECT</th>
			<th>SANSAKRIT PROJECT</th>
			<th>ENGLISH PROJECT</th>
			<th>MATH PROJECT</th>
			<th>SOCIAL SCIENCE PROJECT</th>
			<th>SCIENCE PROJECT</th>
		</tr>
		<tr>
	<?php 
	  $count =1;
	  $a="'";
	  $arrayName = array();
	    $month= mysqli_real_escape_string($Database,$_POST['month']);

	   $Class= mysqli_real_escape_string($Database,$_POST['Class']);
	    echo ' <div class="Admit_card_info_exam">'. strtoupper($month).' EXAMINATION RESULT OF STUDENT</div>';
	  
               $cvsql = "select * from student s inner join examination e on s.RollNumber= e.RollNumber  where Class='$Class' ORDER BY s.RollNumber ASC"; 
               $cvresult = mysqli_query($Database,$cvsql);
            while($cvrow = mysqli_fetch_array($cvresult)){
             if ($cvrow['MONTH']==$month) {
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
			<TD>'.$cvrow['HindiPratical'].'</TD>
			<TD>'.$cvrow['SanskritPratical'].'</TD>
			<TD>'.$cvrow['EnglishPratical'].'</TD>
			<TD>'.$cvrow['MathPratical'].'</TD>
			<TD>'.$cvrow['SocialPratical'].'</TD>
			<TD>'.$cvrow['SciencePratical'].'</TD>
			<TD>'.$cvrow['Total'].'</TD>
			<TD>'.$cvrow['Result'].'</TD>
			<TD>'.$cvrow['Percentage'].'</TD>
		</tr>';
	}
	  }
	?>
	</table>
