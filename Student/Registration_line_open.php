<?php
require 'connection.php';
 $data_ = mysqli_real_escape_string($Database,$_POST['data']);
if ($data_=='OPEN') {
	$change= 'Opned';
}
else{
	$change = 'Closed';
}
if(mysqli_query($Database,"update registration set Registration_status='$data_'")){
	echo 'line has'.' '.$change.' '.'successfully';
}
else{
	echo 'failed';
}

?>