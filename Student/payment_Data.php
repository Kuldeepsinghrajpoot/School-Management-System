<?php

session_start();
session_id();
$username=$_SESSION['Registation'];
$month=$_SESSION['Month'];
$fees=$_SESSION['fees'];
$ORD=$_SESSION['ORD'];


	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	 require 'connection.php';
	 $MONTH = mysqli_real_escape_string($Database,$month);
	  $fees = mysqli_real_escape_string($Database,$fees);
     $sql1   = "select *from amount where MONTH ='$MONTH'";
      $query1=mysqli_query($Database,$sql1);
      while ($result1 = mysqli_fetch_array($query1)) {
      	// echo  $result1['8'];
      }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transaction</title>
	<?php require 'link.php';?>
	<style type="text/css">
	body{
		background-color: white;
	}
		/*#form{
			border:1px solid black;
			width: 90%;
			height: 90%;
			margin: 20px 40px;
		}*/
		
		table {
			width: 50%;
			height: all;
			border-collapse: collapse;
			left:20rem;
			height: 15rem;
			font-size: 1.2rem;
					background: white;

			top: 10rem;
			position: relative;
			text-align: center;
			border: 1px solid rgba(0, 0, 0, 0.1);
		}

		table tr,td,th{
			
			border-collapse: collapse;
			color: red;
			border-right: 1px solid rgba(0, 0, 0, .1);
			}
			th{
				color :red
			}
	button{
		border: none;
		width: 100%;
		height: 100%;
background-image: linear-gradient(skyblue,lightblue);		font-size: 1.2rem;
		pointer-events: cousor;
		cursor: pointer;
	}
		/*th{
			background-color: blue;
			color: white;
		}*/
	</style>
</head>
<body>

<form method="post" action ="pgRedirect" name="form">
	<table id="table_">
		<tr>
			<TD colspan="1" id="tr_" align="center">ORDER ID</TD>
			<TD colspan="2" id="tr_" align="center"><div><?PHP echo $ORD;?></div></TD>
		</tr>
		
		            <tr id="tr_">
				        	<Td id="tr_">MONTH</Td>
				        	<td id="tr_"><?PHP ECHO $MONTH?></td>
				    </tr>
				    <TR ID="tr_">
				    	
				    		<td ID="tr_">AMOUNT</td>
				    		<td ><?php echo  $fees;?></td>
				    	
				    </TR>
				    
				    	<td id="tr_">LATE FEES</td>
				    	<TD id="idd"> <?php echo  $fees;?></TD>
				    
     						<input type="hidden" tabindex="10"type="text" id="fees" name="TXN_AMOUNT" value="<?php echo $fees;?>"  style="position: absolute;">

     		                 <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" style="position: absolute;">
				             <input  type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" style="position: absolute;">
				            <input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001" type="hidden" style="position: absolute;">

				            <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"name="ORDER_ID" autocomplete="off"value="<?php echo  $ORD?>" style="position: absolute;"> 

				            <input type="hidden" name="month" id='MONTH' value="<?php echo $MONTH ?>">
				             <input type="hidden" name="username" value="<?php echo $username ?>">
				    </tr>
		<tr>
			<TD colspan="1" id="tr_" align="right">TOTAL</TD>
			<TD colspan="2" id="tr_" align="left"><div id="TOTAL_AMOUNT"></div></TD>
		</tr>

		<tr>
			<td style="border: none; position: relative; left: 10rem;" ><button>Pay Now</button></td>
		</tr>
	</table>
				
</form>
<script type="text/javascript">
	
	

var doc=Number(document.getElementById('fees').value);
var month=document.getElementById('MONTH');
console.log(month.value);

const a =month.value;

/*switch case statement here*/
let day='';
switch (a) {
 case "January":
    day = "0";
    break;
    
case "February":
    day = "1";
    break;
 case "March":
    day = "2";
    break;
 case "April":
    day = "3";
    break;
  case "May":
    day = "4";
    break;
 case "June":
    day = "5";
    break;
    
    case "July":
    day = "6";
    break;
case "August":
    day = "7";
    break;
case "September":
    day = "8";
    break;
 case "October":
    day = "9";
    break;
 case "November":
    day = "10";
    break;
  case "December":
    day = "11";
    break;
}
day = Number(day);
console.log(day);
/**/

var month_this = new Date();
var result = month_this.getMonth();
console.log(result);

if (day>=result) {
	        document.getElementById('TOTAL_AMOUNT').innerHTML=doc+0;
    document.getElementById('fees').value=doc+0;
         document.getElementById('idd').innerHTML=0;

}
else{
	document.getElementById('TOTAL_AMOUNT').innerHTML=doc+5;
    document.getElementById('fees').value=doc+5;
         document.getElementById('idd').innerHTML=5;
 

}


//document.form.submit();
</script>
</body>
</html>