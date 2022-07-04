<?php
$captcha=$_POST['captcha'];
if($captcha){
	//mysqli_query($con,"insert into enquiry(name,mobile,details) values('$name','$mobile','$details')");
	echo "Thank you";
}else{
	echo "Please enter valid captcha code";
}
?>