<?php 
    require 'connection.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Students Records</title>
	<?php require 'link.php';?>

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
	  echo'<div style="margin: -9px 0; padding: 8px 5rem; color: black;">'.strtoupper($MONTH).' EXAMINATION RESULT OF STUDENT'.$a.'s</div>';
	  
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
	<div>next</div>
	