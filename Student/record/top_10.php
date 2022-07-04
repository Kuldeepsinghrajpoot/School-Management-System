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
			width: 5px;
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
	  background-image: linear-gradient(0deg,red,orange);

}.details{
	width: 70%; 
	height: all; 
	height: all;
	min-height: 150px;
	background-color: white;
	margin: 50px 140px;

	border-right: none;
	box-shadow: 0 0px 30px 0px rgba(0,0,0,0.1);

}
.studentss table{
	text-align: left;
	width: 40%; 
	position: relative;
	padding: 15px 15px;
	background-color: white;
	border-collapse: collapse;

}
.studentss table th{
	width:5px;
}
.th{
	background-color: red;
	color: white;
	border-left: red;

}
	</style>
</head>

	<body>
		<div class="details">
		<table>
	<tr>
		<th>SN</th>
		<th>ROLL NUMBER</th>
     <th>STUDENT'S NAME</th>
		<th>PERCENTAGE</th>
	</tr>
	<tr>
<?php 
  require 'connection.php';
  $sql= "select *from student";
  $result = mysqli_query($Database,$sql);
  $MONTH  = mysqli_real_escape_string($Database,$_POST['MONTH']);
  $Class  = mysqli_real_escape_string($Database,$_POST['Class']);
  $a="'";
  echo ' <div class="Admit_card_info_exam">'.strtoupper($MONTH).' EXAMINATION RESULT OF STUDENT</div>';
  $m=0;
  $marks =array();
  	  $query = "select * from student s inner join examination e on s.RollNumber= e.RollNumber  where Class='8.A' ORDER BY 	Percentage ASC ";
  	  $Registation_query= mysqli_query($Database,$query);
  	  while ($Registation_row=mysqli_fetch_array($Registation_query)) {
        if ($Registation_row['MONTH']==$MONTH) {
          if ($Registation_row['Result']=='PASS') {
            # code...
          
  	     $marks[] = $Registation_row['Percentage'].','.$Registation_row['Percentage'].' '.$Registation_row['RollNumber'].' '.$Registation_row['FirstName'].' '.$Registation_row['LastName'].'<br>';
  	   }
     }
  }
   $lenght = count($marks);
   for($i=0;$i<$lenght;$i++){
   	 for ($j=0; $j<$lenght;$j++){
   	  if ($marks[$i]>$marks[$j]){
   	    $swap = $marks[$i];
   	    $marks[$i] = $marks[$j];
   	    $marks[$j]=$swap;   
   	 }
  }
}
?>
<div class="studentss">
		<?php
     for($i=0;$i<$lenght;$i++) {
      if ($i<=2) {
        # code...
     
	$count=1;
	$count=$count+$i;
   	 $without_percentage=explode(',',$marks[$i]);
   	 $end = end($without_percentage);
   	   $serial = $end;
   	$divided=explode(' ', $serial,3);
   	//print_r($divided);
   	 echo '
   	       <td>'.$count.'</td>
   	       <td>'.$divided[1].'</td>
   	       <td>'.$divided[2].'</td>
   	       <td>'.$divided[0].'</td></tr>';
      
   }
  
    }
?>
</table>
</tr>
</table>
</div>
</div>
</body>
</html>
</body>
</html>

