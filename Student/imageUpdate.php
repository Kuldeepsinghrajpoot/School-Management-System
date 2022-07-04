<?php
  require 'connection.php';
   $Email = mysqli_real_escape_string($Database,$_POST['Email']);
if(isset($_POST))
{
	  
	 if ($_FILES["file"]["name"]) {
	         	$test2  = explode('.', $_FILES["file"]["name"]);
	 	        $ext2   = end($test2);
	 	        $check_image= array("png","jpeg","jpg");
	 	        if(in_array($ext2, $check_image)){

	 	        $name2  = rand(100, 999) . '.' . $ext2; 
	 	        $sql2 = "select *from student where Email='$Email'";
                $result2 = mysqli_query($Database,$sql2);
                $row2 = mysqli_fetch_array($result2);
                $un2=$row2['Photo'];
                 unlink("photo/".$un2);
                 $sql = "update student set Photo='$name2' where Email='$Email'";
	            if (mysqli_query($Database,$sql)) {
                      move_uploaded_file($_FILES["file"]["tmp_name"], "photo/".$name2);
		             echo "successfully update";
	            }
	            else{
		            echo "un successful";
	            }

	        }else{
	         echo "Invalid file";
	        }

	 }

	elseif ($_FILES["singnature"]["name"]) {
         $test   = explode('.', $_FILES["singnature"]["name"]);
         $ext    = end($test);
          $check_image= array("png","jpeg","jpg");
	 	        if(in_array($ext, $check_image)){
         $name   = rand(100, 999) . '.' . $ext; 
  
         $sql = "select *from student where Email='$Email'";
         $result = mysqli_query($Database,$sql);
         $row = mysqli_fetch_array($result);
         $un=$row['Signature'];
         unlink("image/".$un);  
     
	        $sql = "update student set Signature='$name' where Email='$Email'";
	    if (mysqli_query($Database,$sql)) {
		    move_uploaded_file($_FILES["singnature"]["tmp_name"], "image/".$name);
		    echo "successfully update";	
	    }
	     else{
		 echo "un successful";
	    }
	} 
	else {
	    echo "Invalid file";
	}
   }
   else{
 	echo "Already updated";
 } 


}
 
?>