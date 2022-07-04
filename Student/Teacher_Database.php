<?php

$Database = mysqli_connect("localhost","root","");
            mysqli_select_db($Database,"teacher");
            if ($Database===false) {
            	die();
            }
    echo $FirstName         = mysqli_real_escape_string($Database,$_POST['FirstName']);
    echo  $Class    = mysqli_real_escape_string($Database,$_POST['Class']);
    echo $Email             = mysqli_real_escape_string($Database,$_POST['Email']);
    echo $Contact           = mysqli_real_escape_string($Database,$_POST['Contact']);
    echo $Password          = mysqli_real_escape_string($Database,$_POST['Password']);
    echo $RetypePassword    = mysqli_real_escape_string($Database,$_POST['Retype_Password']);
    $query ="insert into teacher_information(Name,Contact,Email,Password,Retype_Password,Class)values('$FirstName','$Contact','$Email','$Password','$RetypePassword','$Class')";

    if(mysqli_query($Database,$query)){
    	echo "successfull";
    }
    else{
    	echo "unsuccessfull";
    }
?>