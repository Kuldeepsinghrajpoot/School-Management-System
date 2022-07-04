<?php 
 $Registation_number = '';

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
require_once 'connection.php';


?>
<!DOCTYPE html>
<html>
<head>
  <title>Transaction</title>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
  <style type="text/css">
  body{
    background-color: white;
         font-family: 'Lora', serif;

  }
   .front{
            height: 100%;
            width: 100%;
            background-color: white;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            left: -10px;
            margin: -10px -20px;
            right: 0;
            border-bottom: 1px solid gray;
            font-size: 25px;
    }
    .front .links{
                width: 0%;
          height: 100px;
    }
    .front .links h1{
      margin: 20px 65px;
    }
   
    .shishu_img{
      height: 80px;

      left: 60px;
      margin: 10PX 140px;
      width: 77px;
      text-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);


    }
     h1{
      font-size: 15px;
      top: 20px;
      left: 17rem;
      color: 0BA5FC;
      text-align: center;
      position: absolute;
        }
        table{
          margin: 50px 50px;
          padding: 100px 50px;
          border-collapse: collapse;
          border-bottom: 1px solid gray;
        }
        tr td{
          padding: 5px 30px;
          border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                  }

  </style>



</head>
<body>

</body>
 <h1><div style="font-size: 25px;">SARASWATI SHISHU MANDIR</div>NOWGONG CHHATARPUR (MP)</h1>

<div class="front"> 

    <div class="links">
      <img src="shishu.png" class="shishu_img">

      
    </div>
   
</div>
<?php

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;


$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, "EHWyhL5g8HCMU9af", $paytmChecksum); //will return TRUE or FALSE string.

$faild_txt='';
if($isValidChecksum == "TRUE") {
  if ($_POST["STATUS"] == "TXN_SUCCESS") {
    //Process your transaction here as success transaction.
    //Verify amount & order id received from Payment gateway with your application's order id and amount.
  }
  else {
    echo "<div id='table'>Transaction status is failure</div>" . "<br/>";
    $faild_txt='failure';
  }

$Db = mysqli_connect("localhost","root","");
      mysqli_select_db($Db,'school');
      if ($faild_txt!='failure'){
       
     
          $ORDERID     = mysqli_real_escape_string($Db,$_POST['ORDERID'] );  
          $TXNID       = mysqli_real_escape_string($Db,$_POST['TXNID'] );   
          $TXNAMOUNT   = mysqli_real_escape_string($Db,$_POST['TXNAMOUNT']);
          $PAYMENTMODE = mysqli_real_escape_string($Db,$_POST['PAYMENTMODE']);
          $CURRENCY    = mysqli_real_escape_string($Db,$_POST['CURRENCY']); 
          $TXNDATE     = mysqli_real_escape_string($Db,$_POST['TXNDATE'] ); 
          $STATUS      = mysqli_real_escape_string($Db,$_POST['STATUS']);
          $BANKNAME    = mysqli_real_escape_string($Db,$_POST['BANKNAME']);
         // $Email       = mysqli_real_escape_string($Db,$_POST['Email']);
          //echo $Email;
          

      $query =mysqli_query($Db,"select *from temp_orderid where orderid='$ORDERID'");
      while ($rows=mysqli_fetch_array($query)) {
          $Registation_number = $rows['Registation'];
          $MONTH=$rows['Month'];
      }
                    $sql = "insert into transaction (ORDERID,TXNID,TXNAMOUNT,PAYMENTMODE,TXNDATE,STATUS,BANKNAME,Registation,MONTH)values('$ORDERID','$TXNID','$TXNAMOUNT','$PAYMENTMODE','$TXNDATE','$STATUS','$BANKNAME','$Registation_number','$MONTH')";
      if (mysqli_query($Db,$sql)) {
        mysqli_query($Db,"DELETE FROM `temp_orderid` WHERE Registation = '$Registation_number'");
      }
      else{
                mysqli_query($Db,"DELETE FROM `temp_orderid` WHERE Registation = '$Registation_number'");

        ?>
        <script type="text/javascript">
          window.close();
                </script>
        
        <?php
        
      }
  if (isset($_POST) && count($_POST)>0)
  { 
   
    $retive_Data=mysqli_query($Db,"select *from student where Registation='$Registation_number'");
    $html = "<table>";
    while ($result=mysqli_fetch_array($retive_Data)) {
       $html.='  <tr>
      <td>ORDER ID</td>
    <td>'.$ORDERID.'</td>
  </tr>
  <tr>
    <td>Trasnaction Id</td>
    <td>'.$TXNID.'</td>
  </tr>
  <tr>
    <td>Date</td>
    <td>'.$TXNDATE.'</td>
  </tr>   
  <tr>
    <td>Name</td>
    <td>'.$result['FirstName'].' '.$result['LastName'].'</td>
  </tr>
  <tr>
    <td>Father Name</td>
    <td>'.$result['FatherName'].'</td>
  </tr>
  <tr>
    <td>DOB</td>
    <td>'.$result['DOB'].'</td>
  </tr>
  <tr>
    <td>Mobile Number</td>
    <td>'. $result['Contact'].'</td>
  </tr>
  <tr>
    <td>Category</td>
    <td>'.$result['Catagory'].'</td>
  </tr>
  <tr>
    <td>Registation</td>
    <td>'.$Registation_number.'</td>
  </tr>
   <tr>
    <td>Class</td>
    <td>'.$result['Class'].'</td>
  </tr>
  <tr>
    <td>Gender</td>
    <td>'.$result['Gender'].'</td>
  </tr>
  <tr>
    <td>FEE</td>
    <td>'.$TXNAMOUNT.'</td>
  </tr>
  <tr>
    <td>PAYMENT MODE</td>
    <td>'.$PAYMENTMODE.'</td>
  </tr>
    <tr>
    <td>Month</td>
    <td>'.$MONTH.'</td>
  </tr>';
  }
  $html.="</table>";
echo $html;
}

      }
    }
 

else {
  echo " window.close();";
  //Process transaction as suspicious.
}
?>
</html>
