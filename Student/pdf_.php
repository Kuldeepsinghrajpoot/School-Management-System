<?php
session_start();
session_id();
require('vendor/autoload.php');
require 'connection.php';
//$un=$_SESSION['user'];
   $username=mysqli_real_escape_string($Database,$_SESSION['username']);
   $query1      = mysqli_query($Database,"select *from student where Email='$username'");
   $result1     = mysqli_fetch_array($query1);
   $Registation = $result1['Registation'];
   $query       = mysqli_query($Database,"select *from student");
   $result      = mysqli_fetch_array($query);
   $fetch_query = mysqli_query($Database,"select *from declare_admitcard");
   $results     = mysqli_fetch_array($fetch_query);

	$html='  
<style type="text/css">
    .school_Details{
    margin: 0 20px;
    width: 40rem;
    text-align: center;
    font-size: 20px;
  }
  table{
    width: 65%; padding: px 50PX; margin: 10px 1rem;
    border-collapse: collapse;
    height:100%;
    border:1px solid black;
  }
  table tr,td{
    margin: 0 0;
    padding: 5px 10px;
  }
  .div-contain-data{

  }
  .img_s{
    width: 100px;
    height:100px;
    position: absolute;
    margin: 20px 35rem;
    border:1px solid blue;
  }
  .border{
    border:1px solid black;
    width: 100%;
    height:90%;
    margin: 0 0px;
   
    border-radius: 0px;
  }
  th{
   border:1px solid black;
   border-bottom:2px solid gray; 
   border-right:1px solid gray;
  }
  .tr,.td{
     border-bottom:none;
     border-right:1px solid black;
  }
  img {
    width: 100px;
    height:100px;
    position: absolute;
        transform : translate(47rem ,-71rem);
  }
</style>';
       $html.='<div class="border">
  <DIV class="school_Details"><u> SARASWATI HEIGHER SECONDERY  SCHOOL NOWGONG, CHHATARPUR MADHYA PRADESH<br> Admit Card</u></DIV>';
$html.='<table style="border:none">';

    while($result = mysqli_fetch_array($query)){
     if($result['Registation']==$Registation) {
      $html.='
          
          
        <tr>
           <td>NAME</td>
          <TD>'.$result['FirstName'].' '.$result['LastName'].'</TD>
         </tr>
  <tr>
    <td>FATHERS NAME</td>
    <TD>'.$result['FatherName'].'</TD>
    
  </tr>
  <tr>
    <td>CLASS</td>
    <TD>'.$result['Class'].'</TD>
    
  </tr>
  <tr>
    <td>ROLL NUMBER</td>
    <TD>'.$result['RollNumber'].'</TD>
    
  </tr></div>
  <tr>
    <td>EXAMINATION</td>
    <TD>'.strtoupper($results['Month']).'</TD>
    </tr>
    <tr>
    <td>RELEASE DATE</td>
    <TD>'.strtoupper($results['Date_Declare']).'</TD>
    
  </tr>
  </td>
  </tr>';
 


$html.='</table>';
$html.='<table class="div-contain-data" style="width:100%;">
  <tr>
    <th style="text-align:center;" align="center">SN</th>
    <th>SUBJECT NAME</th>
    <th>PRACTICAL</th>
  </tr>
  
  </tr class="tr">
  <tr>
    <td class="td" align="center">01</td>
    <TD class="td">HINDI</TD>
    <TD class="td" align="center">-</TD>
  </tr>
  <tr class="tr">
    <td class="td" align="center">02</td>
    <TD class="td">ENGLISH</TD>
    <TD class="td" align="center">-</TD>
  </tr>
  <tr class="tr">
    <td class="td" align="center">03</td>
    <TD class="td">SANSKRIT</TD>
    <TD class="td" align="center">-</TD>
  </tr>
  <tr class="tr">
    <td class="td" align="center">04</td>
    <TD class="td">SOCIAL SCIENCE</TD>
    <TD class="td" align="center">-</TD>
  </tr>
  <tr class="tr">
    <td class="td" align="center">05</td>
    <TD class="td">SCIENCE</TD>
    <TD class="td" align="center">-</TD>
  </tr>
  <tr class="tr">
    <td class="td" align="center">06</td>
    <TD class="td">MATH</TD>
    <TD class="td" align="center">-</TD>
  
   <tr>';
  $html.='</table>';

  $html.='<table style="width:100%; border:none; margin:50px 60px;"><tr><td>PRINCIPAL SIGNATURE<td><td>CLASS TEACHER SIGNATURE</td></tr></table></div>';

 $html.='<table style="border:none;"> <tr><td><img src="photo/'.$result['Photo'].'">
  </td></tr></table>';
  }
}

echo $html;
/*}else{
	$html="Data not found";
}*/
/*$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='AdmitCard of.pdf';
$mpdf->output($file,'I');*/
//D
//I
//F
//S
?>