<?php
require 'connection.php';
  echo $MONTH          = mysqli_real_escape_string($Database,$_POST['MONTH']);
  $MONTH=strtoupper($MONTH);
  $Totalmarksexam = mysqli_real_escape_string($Database,$_POST['Totalmarksexam']);
   $a='';
   $b='';
   $date=date('d/m/y');
   $fetch_query    = mysqli_query($Database,"select *from student s join examination e on s.RollNumber=e.RollNumber");
 if(mysqli_num_rows($fetch_query)>0) {
          while ($result = mysqli_fetch_array($fetch_query)) {
                if(($result['MONTH']==$MONTH)&&($result['Totalmarksexam']==$Totalmarksexam)) { 
                  echo $result['MONTH'];
                if (mysqli_query($Database,"update  examination set Declare_Result='yes',Date_Declare='$date' WHERE MONTH ='$MONTH'")) {
                	$a="yes";
                    }          
            }   
             	elseif((strtoupper($result['MONTH'])==$MONTH)&&($result['Totalmarksexam']==$Totalmarksexam)) { 
                if (mysqli_query($Database,"update  examination set Declare_Result='yes',Date_Declare='$date' WHERE MONTH ='$MONTH'")) {
                	$b="yes";
                    }   
         }
      }  
  }
    else{
    	echo "no result";
    }
    if ($a=='yes'||$b=='yes'){
    	echo "updated successfully";
    }
    
     
?>