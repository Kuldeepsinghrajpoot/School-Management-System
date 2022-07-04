<?php 
require 'connection.php';

if (isset($_POST['Address'])) {

$Email           = mysqli_real_escape_string($Database,$_POST['Email']);
$Permanet        = mysqli_real_escape_string($Database,$_POST['Permanet']);
$Temprary_Address= mysqli_real_escape_string($Database,$_POST['Temprary_Address']);
$CityVillage     = mysqli_real_escape_string($Database,$_POST['CityVillage']);
$Dist            = mysqli_real_escape_string($Database,$_POST['Dist']);
 //echo $Email.",".$Permanet.",".$Temprary_Address.",".$CityVillage.",".$Dist;
  $query="update student set Permanet_Address='$Permanet' , Temprary_Address='$Temprary_Address',CityVillage='$CityVillage' where Email='$Email'";
  
  if(mysqli_query($Database,$query)){
  	echo "successful";
  }
  else{
  	echo "not successful";
  }
}


elseif (isset($_POST['Information'])) {

     $Email      = mysqli_real_escape_string($Database,$_POST['Email']);
     $FirstName  = mysqli_real_escape_string($Database,$_POST['FirstName']);
     $LastName   = mysqli_real_escape_string($Database,$_POST['LastName']);
     $FatherName = mysqli_real_escape_string($Database,$_POST['FatherName']);
     $MotherName = mysqli_real_escape_string($Database,$_POST['MotherName']);
     $DOB        = mysqli_real_escape_string($Database,$_POST['DOB']);
     $Gender     = mysqli_real_escape_string($Database,$_POST['Gender']);
     $Catagory   = mysqli_real_escape_string($Database,$_POST['Catagory']);
     $Contact    = mysqli_real_escape_string($Database,$_POST['Contact']);

  $query="update student set FirstName='$FirstName', LastName = '$LastName', FatherName ='$FatherName',MotherName='$MotherName',DOB='$DOB', Gender='$Gender', Catagory='$Catagory' ,Contact='$Contact' where Email= '$Email'"; 
  if(mysqli_query($Database,$query)){
  	echo "successful";
  }
  else{
  	echo "not successful";
  }
}
else{
	echo "Already updated";
}

//upload.php

?>