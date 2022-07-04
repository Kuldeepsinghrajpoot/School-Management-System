<?php 

require 'connection.php';


           $Registation = mysqli_real_escape_string($Database,$_POST['Registation']);
           $password = mysqli_real_escape_string($Database,$_POST['Password']);
           $New_password = mysqli_real_escape_string($Database,$_POST['New_Password']);
           $Re_type_password= mysqli_real_escape_string($Database,$_POST['Re-type_Password']);

          if(mysqli_query($Database,"update student set Password='$New_password' where 	Registation='$Registation'")){
	      echo "successfully";
}
else{
	echo " failed ";
}




?>