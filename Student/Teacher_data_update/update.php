<?php 

  $connection = mysqli_connect("localhost","root","");
		          mysqli_select_db($connection,"teacher");


		    $Email                =  mysqli_real_escape_string($connection,$_POST['Email']);
		    $Password             =  mysqli_real_escape_string($connection,$_POST['Password']);
		    $Information          =  mysqli_real_escape_string($connection,$_POST['Information']);
		    $New_Password         =  mysqli_real_escape_string($connection,$_POST['New_Password']);
		    $Re_type_new_password =  mysqli_real_escape_string($connection,$_POST['Re-type_new_password']);
		   if(mysqli_query($connection,"update teacher_information set Password ='$New_Password', Retype_Password ='$Re_type_new_password' where Email='$Email'")){
		   	echo "Successfully update";
		   }else{
		   	echo "faild";
		   }



?>