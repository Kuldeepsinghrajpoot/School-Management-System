<?php
 
 require 'connection.php';
 $Class = mysqli_real_escape_string($Database,$_POST['Class']);
 $query=mysqli_query($Database,"select *from student where Class ='$Class'");
$a='';
$b='';
 while ($result=mysqli_fetch_assoc($query)) {
 	       $student = $result['Registation'].'s';
 	      $SRegistation=$_POST[$student];
          $Registation = $result['Registation'];
 	   if(mysqli_query($Database,"update student set RollNumber='$SRegistation' where Registation='$Registation'")){
 	   	$a = "successfully";
 	   }
 	   else{
 	   	$b= "not successfully".'<br>';
 	   }
 }
 if ($a=="successfully") {
 	echo "successfully";
 }
 else{
 	echo "not successfully";
 }
?>
