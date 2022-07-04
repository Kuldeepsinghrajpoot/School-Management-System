<?php

require 'connection.php';

$result=mysqli_query($Database,"select *from registration");
$data_Registration = mysqli_real_escape_string($Database,$_POST['data_Registration']);
if ($data_Registration==1) {

            while ($row=mysqli_fetch_array($result)) {
	// code...
	            if($row['Registration_status']=='OPEN'){
		         echo '1';
	}
	       else{
	        echo "open";
       }
    }
}


?>

