<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	#tables #ths,#trs,#tds{
		font-size: 20px;
		width: 5px;
	}
	#tables{
		width: 100%;
	}
	#td{
		width: 100%;
	}
</style>
<body>

</body>
</html>

<?php 
  require 'link.php';
  require 'connection.php';
  $sql= "select *from student";
  $result = mysqli_query($Database,$sql);
  $MONTH  = mysqli_real_escape_string($Database,$_POST['MONTH']);
  $Class  = mysqli_real_escape_string($Database,$_POST['Class']);
  $a="'";
  echo '<h1 style="margin: -9px 0; padding: 8px 5rem; color: black;"> TOP TEN STUDENT'.$a.'s IN '.strtoupper($MONTH).' EXAMINATION</h1>';
  $m=0;
  $marks =array();
  	  $query = "select * from student s inner join examination e on s.RollNumber= e.RollNumber where Class='$Class'";
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
<table id="tables" align="left">
	<tr id="trs">
		<th id="ths">SN</th>
		<th id="ths">ROLL NUMBER</th>
        <th id="ths">STUDENT'S NAME</th>
		<Th id="ths">PERCENTAGE</Th>
	</tr>
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
   	 echo '<tr id="trs">
   	       <td id="tds">'.$count.'</td>
   	       <td id="tds">'.$divided[1].'</td>
   	       <td id="tds">'.$divided[2].'</td>
   	       <td id="tds">'.$divided[0].'</td></tr>';
      
   }
  
    }
?>

	</tr>
</table>
