<?php 
    session_start();
    session_id();

    require 'connection.php';

     if ($_SESSION['username']==true) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Students Records</title>
	     <link rel="shortcut icon" type="image/jpg" href="shishu.png">
 <link rel="stylesheet" type="text/css" href="styleonecss/style.css">
 	     <link rel="stylesheet" type="text/css" href="link.css">

         <script src="sweet/sweetalert-dev.js"></script>
	
	<?php require 'link.php';?>
	<style type="text/css">
		
body{
	font-family: 'Lora', serif;
	        background-color: #ECF0F1;

	color: black;
	
}
		.menu_left .h1{
			font-family: 'Lora', serif;
			width: 200%;
			height: 60px;
			margin: -12px -9px;
			color: black;
			background-color:white;
			box-sizing: border-box;
			box-shadow: 0 5px 20px rgba(0,0,0,0.1);
			position: fixed;
		}
		.menu_left .Contain{
			margin: 48px -9px;
			height: 54rem;
			width: 13rem;
			color: red;
			background-color: orangered;
			position: absolute;
			text-align: center;
			box-sizing: border-box;
			box-shadow: 10px 0px 25px -10px rgba(0,0,0,0.1);

		}
		.menu_left .Contain li,ol{
			color: red;
			width: 215px;
			outline: none;
			text-align: center;
			list-style: none;
			padding: 5px 0px;
			text-decoration: none;
            position: relative;
			font-weight: bold;
			font-size: 22px;
			height: 20px;
		}
		a{
			color: white;
		}

#Admit_card{
	width: 84.3%;
	max-height: 100%;
	position: absolute;
	margin:-13.5px 6px;
    top: 5.10rem;
    left:15.2%;
    font-size: 20px;

}
@media only screen and (max-width: 1000px) {
  div #Information_Student{
	visibility: visible;
	width: 68%;
	height: 60%;
	position: relative;
	overflow:hidden; 
    top: 60px;
    left:12%;
    background-color: white;
    overflow-x: scroll;
     overflow-y: scroll;
   }
  #Information_Students{
	visibility: hidden;
	width: 99%;
	height: 90%;
	position: relative;
	overflow:hidden; 
    top: 60px;
    left:10.4%;
    font-size: 20px;
	overflow:hidden; 
    /*overflow-x: scroll;*/
    }   
}
#Information_Student table, #Information_Students table,#Information_Student_Test_Marks table,#hidden_value table{
	border-collapse: collapse;
	border:1px solid #BEBEBE;
	background-color:white; 
	z-index: 1;
}
#Information_Student table tr,td,th{
	border:1px solid #BEBEBE;
	text-align: center;
	font-size: 15px;
	width: 100rem
}
#hidden_value table tr,td,th{
	border:1px solid #BEBEBE;
	text-align: center;
	font-size: 15px;
	width: 100rem
}

#trdata{
	border-bottom: 1px solid black; 
}
.Coloumn{
	overflow-y: hidden;
	overflow-x: hidden;
	position: fixed;
	background-color: #F9F8F8;
	height:all;
	width: 510px;
	margin:-10 0;
	overflow:hidden; 
    top: 75px;
    left:40.4%;
    font-size: 15px;
    border: 1px solid #A9A8A8;
    box-sizing: border-box;
			box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}
.Coloumn table{
	margin:auto;
	margin-top:50px;
}
.Coloumn div{
	border-bottom: 1px solid blue;
	margin-top: -10px;
}
.Coloumn table td,tr{
	padding:3px;
	text-align: left;
	margin-top: -10px;
	font-size: 20px;
	border:none;
}



.logout{ top: -5px;
	color:black; 
	position:  absolute; 
	margin: 23px 180px;
	position: absolute;
	outline: none;
	font-size: 1.2rem;
	text-decoration: none;
}
.logout:hover{
	height: 20px;
	font-size: 1.2rem;
	width: 70px;
	text-align: center;
	margin: 24px 175px;
	position: absolute;
	background-color: white;
	color: darkred;
}
.Admit_card_info_exam{
	width: 70%;
	height: 30px;
	text-align: center;
	border-bottom: none; 
	background-color: blue;
	color: white;
	margin: 150px 190px;
	  background-image: linear-gradient(0deg,darkblue,blue);

}
.Admit_card_info{
	width: 70%; 
	height: all; 
	height: 220px;
	margin: -150px 190px; 
	background-color: white;
	border-right: none;
	box-shadow: 0 0px 30px 0px rgba(0,0,0,0.1);

}
.Admit_card_info table{
	text-align: left;
	width: 95%; 
	height: 150px; 
	left: 20px;
	top: 10px;
	position: relative;
	background-color: white;
	border-collapse: collapse;

}
.th{
	background-color: red;
	color: white;
	border-left: red;
}
#img1{
	position: relative;
	top: 2px;
	width: 50px;
	height: 50px;
}
/*tr:nth-child(odd),#roll:nth-child(even) {background-color: #f2f2f2;}
 #roll:nth-child(even){background-color: #f2f2f2;}*/

</style>
	
</head>
<body>
 <div class="search_bar" style="position: fixed;">
<div class="menu_left" style="position: fixed;">
	<div class="h1">
		<?php
		          $connection = mysqli_connect("localhost","root","");
		          mysqli_select_db($connection,"teacher");
		          require 'connection.php';
                  $username = mysqli_real_escape_string($connection,$_GET['url']);
                  $result_query = "select *from teacher_information where md5(Email)='$username'";
                  $exe = mysqli_query($connection,$result_query);

                  $query_retrive = mysqli_fetch_assoc($exe);
                                

                  
                //  $class = $query_retrive['Class'];        
		?>
    <div style="top: -5px;position:  absolute; margin: 8px 4%;"><img src="shishu.png" id="img1"></div>
	<div style="top: -5px;position:  absolute; margin: 23px 10%;">WELCOME : <?php echo strtoupper($query_retrive['Name']); ?></div>
	
    <div style="top: -5px;color:black; position:  absolute; margin: 10px 40%;"><a href="logout" class="logout"> logout</a></div>
     </div>
	<div class="Contain" style="color: white;"> 
		<li style="color: white;">
				<!-- <ol>
					     <a href="javascript:void(0)" onclick="Yearly_Result()">ExamResult</a>
				</ol>
		    	<ol>
					     <a href="javascript:void(0)" onclick="TOP_TEN_STUDENTS()">TOP 10</a>
				</ol> -->
		    	<ol>
					   <a href="DeclareResult?url=<?php echo $username;?>">Declare Result</a>
				</ol>
				<ol>
					   <a href="AdmitCard?url=<?php echo $username;?>">Admit Card</a>

				</ol>	
				<ol>
					   <a href="Registration?url=<?php echo $username;?>">Registration</a>
				</ol>	
				<ol>
					   <a href="profile.php?url=<?php echo $username;?>">Profile</a>
				</ol>	
		</li>
	</div>
</div>
</div>
	
<!--AMINATION RESULT CREATE PANEL -->

<?php
require 'connection.php';
        $fetch_query    = mysqli_query($Database,"select *from declare_admitcard");
        $result         = mysqli_fetch_array($fetch_query);
             
?>
<!-- EXAMINATION ADMIT CARD DELCARE HERE -->

</div>
<div id="Admit_card">
	<DIV class="Admit_card_info_exam"> DECLARE ADMIT CARD OF EXAMINATION</DIV>
<DIV class="Admit_card_info"> 

	<table align="left">
		<tr>
			<td class="th">EXAMINATION NAME</td>
			<td class="th">DATE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
			<td class="th">DECLARE</td>
		</tr>
	    <tr>	
				<td >
					QUARTERLY EXAMINATION
				</td>
				<td>
					<?php echo $result['Date_Declare'];?>
					
				</td>
				<!-- Quetery examination of student -->
		<form method="post" id="QUARTARLY_EXAMINATION">
			<input type="hidden" name="MONTH" value="QUARTERLY  EXAMINATION" id="QUART" style="position: absolute;">
				<td>
					<div class="container">
		       <?php 
		        $fetch_query_Quter    = mysqli_query($Database,"select *from declare_admitcard where ID='1'");
                           while($result_Quter  = mysqli_fetch_array($fetch_query_Quter)){

                    if ($result['Status']!='True') {
                    	echo "<input type='checkbox' name='status'   value='".$result_Quter['Status']."'' id='checkbox' checked>";
                    }
                    else{
                    	echo "<input type='checkbox' name='status'  value='".$result_Quter['Status']."'' id='checkbox'>";
                    }
                }
		       ?>
		       <label for="checkbox" ></label>
		           </div>
				</td>
		</form>
			<!--  -->
			<!--Second Examination of student and information -->
	    </tr>
	     <tr>	
			
				<input type="hidden" name="MONTH" value="HALFYEARLY EXAMINATION" id="QUART1" style="position: absolute;">
				<td>
					HALFYEARLY EXAMINATION
				</td>
				<td>
					<?php 

                      $fetch_query_half    = mysqli_query($Database,"select *from declare_admitcard where ID='2'");
                           while($result_half  = mysqli_fetch_array($fetch_query_half)){
					echo $result_half['Date_Declare']?>
				</td>
				<!-- halfyear Examination -->
			<form method="post" id="HALFYEARLY_EXAMINATION">
			<td>
					<div class="container">
		        <?php 
		                 
                    if ($result_half['Status']!='True') {

                    	echo "<input type='checkbox' name='status'   value='".$result_half['Status']."'' id='checkbox1' checked>";
                    }
                    else{
                    	echo "<input type='checkbox' name='status'  value='".$result_half['Status']."'' id='checkbox1'>";
                    }
                }

		       ?>
				<label for="checkbox1" ></label>
		          </div>
				</td>
		</form>
	    </tr>
	     <tr>	
				<td>
					YEARLY EXAMINATION
				</td>
				<td>
					<?php 
   		                  $fetch_query_year    = mysqli_query($Database,"select *from declare_admitcard where ID='3'");
                           while($result_year  = mysqli_fetch_array($fetch_query_year)){
              
					 echo $result_year['Date_Declare']?>

				</td>

		<form method="post" id="YEARLY_EXAMINATION"> 
			<input type="hidden" name="MONTH" value="YEARLY EXAMINATION" id="QUART2" style="position: absolute;">
			<td>
					<div class="container">
		       <?php
                    if ($result_year['Status']!='True') {

                    	echo "<input type='checkbox' name='status'   value='".$result_year['Status']."'' id='checkbox2' checked>";
                    }
                    else{
                    	echo "<input type='checkbox' name='status'  value='".$result_year['Status']."'' id='checkbox2'>";
                    }
                }

		       ?>
				<label for="checkbox2" ></label>
		          </div>
				</td>
	     </form>

	    </tr>
	</table>
</div>
</DIV>
</div>

<!-- EXAMINTION RESULT DECLARE HERE -->


<!--  -->
<!-- here student marks in month and other examination name -->
<script type="text/javascript">

	/**************************************/
var a = document.querySelector('#checkbox');
	      a.addEventListener('click',function(e){
	      	        
	    		       stat=$('#checkbox').val();
	    		       QUART=$('#QUART').val();


                  if (stat=='True') {
                  	 stat=$('#checkbox').val();
	    		     QUART=$('#QUART').val();
                  	stat='False';
			    jQuery.ajax({
				   url:'Send_data_of_AdmitCard.php',
				   type:'post',
				  data:{data:stat,data1:QUART,data2:'1'},
				    success:function(data){
					alert(data);
					window.location.href="";

				}
			});
		}
		else if (stat=='False') {
			         stat=$('#checkbox').val();
	    		     QUART=$('#QUART').val();

                  	stat='True';
			    jQuery.ajax({
				    url:'Send_data_of_AdmitCard.php',
				   type:'post',
				   data:{data:stat,data1:QUART,data2:'1'},
				    success:function(data){
					 alert(data);
					 window.location.href="";
				}
			});
		}
	});

var a = document.querySelector('#checkbox1');
	      a.addEventListener('click',function(e){
	      	         
	    		       stat=$('#checkbox1').val();
	    		       QUART=$('#QUART1').val();


                  if (stat=='True') {
                  	 stat=$('#checkbox1').val();
	    		     QUART=$('#QUART1').val();
                  	stat='False';
			    jQuery.ajax({
				   url:'Send_data_of_AdmitCard.php',
				   type:'post',
				   data:{data:stat,data1:QUART,data2:'2'},
				    success:function(data){
					alert(data);
					window.location.href="";
				}
			});
		}
		else if (stat=='False') {
			         stat=$('#checkbox1').val();
	    		     QUART=$('#QUART1').val();

                  	stat='True';
			    jQuery.ajax({
				    url:'Send_data_of_AdmitCard.php',
				   type:'post',
				   data:{data:stat,data1:QUART,data2:'2'},
				    success:function(data){
					 alert(data);
					 window.location.href="";
				}
			});
		}
	});


/*Yearly Examination */

var a = document.querySelector('#checkbox2');
	      a.addEventListener('click',function(e){
	      	         
	    		       stat=$('#checkbox2').val();
	    		       QUART=$('#QUART2').val();


                  if (stat=='True') {
                  	 stat=$('#checkbox2').val();
	    		     QUART=$('#QUART2').val();
                  	stat='False';
			    jQuery.ajax({
				   url:'Send_data_of_AdmitCard.php',
				   type:'post',
				   data:{data:stat,data1:QUART,data2:'3'},
				    success:function(data){
					alert(data);
					window.location.href="";
				}
			});
		}
		else if (stat=='False') {
			         stat=$('#checkbox2').val();
	    		     QUART=$('#QUART2').val();

                  	stat='True';
			    jQuery.ajax({
				    url:'Send_data_of_AdmitCard.php',
				   type:'post',
				   data:{data:stat,data1:QUART,data2:'3'},
				    success:function(data){
					 alert(data);
					 window.location.href="";
				}
			});
		}
	});			
</script>

</body>
</html>
<?php
 }
    else{
      ?>
         <script language="javascript">
             window.location.href = "./";
        </script>
<?php
     }
?>