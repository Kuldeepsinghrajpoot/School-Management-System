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
	    echo ' <div style="margin: -9px 0; padding: 8px 6rem; color: black; font-size:25px;"><u>'. strtoupper($month).' EXAMINATION RESULT OF STUDENT'.$a.'s</u></div>';
	  
               $cvsql    = "select * from student s inner join examination e on s.RollNumber= e.RollNumber where Class='$Class'"; 

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
	<div>next</div>
</div-->