<?php
require 'connection.php';
  $MONTH          = mysqli_real_escape_string($Database,$_POST['MONTH']);
  $MONTH=strtoupper($MONTH);
  $Totalmarksexam = mysqli_real_escape_string($Database,$_POST['Totalmarksexam']);
   $a='';
   $b='';
   $Date=date('d/m/y');
   $fetch_query    = mysqli_query($Database,"select *from student s join examination e on s.RollNumber=e.RollNumber");
 if(mysqli_num_rows($fetch_query)>0) {
          while ($result = mysqli_fetch_array($fetch_query)) {
                if((strtoupper($result['MONTH'])==$MONTH)&&($result['Totalmarksexam']=='10')) { 
                if (mysqli_query($Database,"update  examination set Declare_Result='yes',Date_Declare='$Date'  WHERE MONTH ='$MONTH'")) {
                	$a="yes";
                    }          
            }   
             	elseif((strtoupper($result['MONTH'])==$MONTH)&&($result['Totalmarksexam']=='600')) { 
                if (mysqli_query($Database,"update  examination set Declare_Result='yes' WHERE MONTH ='$MONTH'")) {
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