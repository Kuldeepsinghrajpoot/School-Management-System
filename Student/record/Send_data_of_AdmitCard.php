<?php
require 'connection.php';
    echo $Date= date("d/m/y");
 $MONTH = mysqli_real_escape_string($Database,$_POST['MONTH']);
$fetch_query = mysqli_query($Database,"select *from declare_admitcard");
if (mysqli_num_rows($fetch_query)>0) {
	
          while ($result = mysqli_fetch_array($fetch_query)) {
                if ($result['Month']!=$MONTH) { 
                if (mysqli_query($Database,"update declare_admitcard set Date_Declare='$Date' , Month='$MONTH'")) {
	                 echo "successsss";
                    }
                else{
	                  echo "wrong";
                }
                }
                else{
                	echo "already";
                     
            }
        }
    }
    else{
    	if(mysqli_query($Database,"insert into declare_admitcard(Month,Date_Declare) values('$MONTH','$Date')")){
    		echo 'success';
    	}
    	else{
    		echo "no";
    	}
    }
    
     
?>