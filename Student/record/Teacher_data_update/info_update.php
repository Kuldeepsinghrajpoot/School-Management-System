<?php 

  $connection = mysqli_connect("localhost","root","");
		          mysqli_select_db($connection,"teacher");


		    $Email   =  mysqli_real_escape_string($connection,$_POST['Email']);

		    $Email1   =  mysqli_real_escape_string($connection,$_POST['Email1']);
		    $Name    =  mysqli_real_escape_string($connection,$_POST['Name']);
		    $Contact =  mysqli_real_escape_string($connection,$_POST['Contact']);
		    $class   =  mysqli_real_escape_string($connection,$_POST['class']);
		   if(mysqli_query($connection,"update teacher_information set Email ='$Email', Name ='$Name',Contact='$Contact',Class='$class' where Email='$Email1'")){
		   	echo "Successfully update";
		   }else{
		   	echo "faild";
		   }



?>