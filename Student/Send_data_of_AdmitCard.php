<?php
require 'connection.php';

   $Date   = date("d/m/y");
   $Status = mysqli_real_escape_string($Database,$_POST['data']);
  echo $MONTH  = mysqli_real_escape_string($Database,$_POST['data1']);
   $ID     = mysqli_real_escape_string($Database,$_POST['data2']);

$ID1='';
$ID2='';
$ID3='';

   if ($ID=='1') {
      $ID1='1';
   }else if ($ID=='2') {
      $ID2='2';
   }else{
      $ID3='3';
   }

$fetch_query1 = mysqli_query($Database,"select *from declare_admitcard where ID='$ID1'");
$fetch_query  = mysqli_fetch_array($fetch_query1);    
/*one*/
         if ($fetch_query['Status']=='True'){
             if (mysqli_query($Database,"update declare_admitcard set Status='$Status',Date_Declare ='-' , Month='-' where ID='$ID1'")){
             mysqli_query($Database,"update declare_admitcard set Status='False',Date_Declare ='-' ,   Month='-' where ID='2'");
              mysqli_query($Database,"update declare_admitcard set Status='False',Date_Declare ='-' ,   Month='-' where ID='3'");
             echo "successfully update";
        }else{
          echo "failed"; 
          }
    }
        
      else if ($fetch_query['Status']=='False'){   
 if (mysqli_query($Database,"update declare_admitcard set Status='$Status', Month='$MONTH',Date_Declare ='$Date' where ID='$ID1'")){
             mysqli_query($Database,"update declare_admitcard set Status='False',Date_Declare ='-' , Month='-' where ID='2'");
              mysqli_query($Database,"update declare_admitcard set Status='False',Date_Declare ='-' , Month='-' where ID='3'");
             echo "successfully update";
        }else{
          echo "failed"; 
          }
    }
        /**/
     /*Two*/

  $fetch_query2 = mysqli_query($Database,"select *from declare_admitcard where ID='$ID2'");
  $fetch_query1  = mysqli_fetch_array($fetch_query2);
          if ($fetch_query1['Status']=='True') {
          if (mysqli_query($Database,"update declare_admitcard set Status='$Status',Date_Declare ='-' , Month='-' where ID='$ID2'")) {
            mysqli_query($Database,"update declare_admitcard set Status='False',Date_Declare ='-' ,Month='-' where ID='1'");
             mysqli_query($Database,"update declare_admitcard set Status='False',Date_Declare ='-' , Month='-' where ID='3'");
             echo "successfully update";
        } else{
          echo "failed"; 
          }
    }    
     else if ($fetch_query1['Status']=='False') {
         if (mysqli_query($Database,"update declare_admitcard set Status='$Status', Month='$MONTH',Date_Declare ='$Date' where ID='$ID2'")) {
             mysqli_query($Database,"update declare_admitcard set Status='False',Date_Declare ='-' , Month='-' where ID='1'");
              mysqli_query($Database,"update declare_admitcard set Status='False',Date_Declare ='-' , Month='-' where ID='3'");
             echo "successfully update";
         }else{
          echo "failed"; 
          }
    }
        
        /**/
        /*Three*/
         $fetch_query3 = mysqli_query($Database,"select *from declare_admitcard where ID='$ID3'");
         $fetch_query3  = mysqli_fetch_array($fetch_query3);
          if ($fetch_query3['Status']=='False') {
          
         if (mysqli_query($Database,"update declare_admitcard set Status='$Status', Month='$MONTH',Date_Declare ='$Date' where ID='$ID3'")) {
             mysqli_query($Database,"update declare_admitcard set Status='False',Date_Declare ='-' , Month='-' where ID='1'");
              mysqli_query($Database,"update declare_admitcard set Status='False',Date_Declare ='-' , Month='-' where ID='2'");
             echo "successfully update";
         }else{
          echo "failed"; 
          }
    }
     else if ($fetch_query3['Status']=='True') {
        if (mysqli_query($Database,"update declare_admitcard set Status='$Status',Date_Declare ='-', Month='-' where ID='$ID3'")) {
            mysqli_query($Database,"update declare_admitcard set Status='False',Date_Declare ='-', Month='-' where ID='1'");
            mysqli_query($Database,"update declare_admitcard set Status='False',Date_Declare ='-', Month='-' where ID='2'");
             echo "successfully update";
        } else{
          echo "failed"; 
          }
    }    
        /**/
?>