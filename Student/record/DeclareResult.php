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

	
	<?php require 'link.php';?>
	<style type="text/css">
		
body{
	font-family: 'Lora', serif;
	background-color:rgba(0,0,0,0.1);
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
			border:1px solid #BEBEBE;
			position: fixed;
		}
		.menu_left .Contain{
			margin: 47px -9px;
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
a:hover{
color: black;
height: 35px;
width: 208px;
margin: 0 0;
background-color:black;
color: white;
cursor:pointer; 
font-family: 'Lora', serif;
z-index:-1;
		}
		
 #Information_Student{
	visibility: hidden;
	width: 84.5%;
	height:80%;
	position: absolute;
	overflow:hidden; 
    top: 65px;
    left:15.4%;
    background-color: white;
    overflow-y:scroll; 
    overflow-x:scroll;
}#Information_Student::-webkit-scrollbar{
	display: none;
}
 #Information_Students{
	visibility: hidden;
	width: 84.3%;
	max-height: 100%;
	position: absolute;
	margin:-13.5px 6px;
    top: 5.10rem;
    left:15.2%;
    font-size: 20px;
}
#TEST_EXAMINATION_RESULT_CREATE{
	visibility: hidden;
	width: 84.3%;
	max-height: 52rem;
	position: absolute;
	margin:-63.5px -80px;
    top: 3.2rem;
    left:15.2%;
    font-size: 20px;
   overflow: hidden;
}
 #Information_Student_Test_Marks,#hidden_value,#Admit_card,#TEST_EXAMINATION_RESULT_DECLARE,#Roll_Number_stundent,#Registration{
	visibility: hidden;
	width: 84.3%;
	max-height: 100%;
	position: absolute;
	margin:-13.5px 6px;
    top: 5.10rem;
    left:15.2%;
    font-size: 20px;
}
#EXAMINATION_RESULT_DECLARE{
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
#Information_Student_Test_Marks{
	visibility: hidden;
	position: absolute;
}
 #Information_Student_Test_Marks th{
	background-color: rgb(0, 128, 255);
	color: white;
	font-size: 15px;
}
#Information_Students th{
	background-color: rgb(0, 128, 255);
	color: white;
	font-size: 12px;
}
#Information_Student th{
	background-color: rgb(0, 128, 255);
	color: white;
	font-size: 15px;
}
#hidden_value th{
	background-color: rgb(0, 128, 255);
	color: white;
	font-size: 15px;
}
#Result_navigations,#Registration{
	visibility:hidden;

}
#hidden_value,#EXAMINATION_RESULT_CREATE_PANEL,#TEST_EXAMINATION_RESULT_CREATE{
	visibility: hidden;
}
#EXAMINATION_RESULT_CREATE_PANEL{
	visibility: hidden;
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
.Coloumn table tr, td input[type="text"]{
	width: 150px;
	height: 28px;
	font-size: 20px;
	border: 1px solid #E3E1E1;
	padding: 0;
	z-index: 1;
}
.Coloumn table tr, td  #Studentdata ,#Rolldata {
	width: 250px;
	padding-top: -10px;
	height: 28px;
	font-size: 20px;
	border: 1px solid #E3E1E1;
	z-index: 1;
}
.Coloumn .tabledata{
	margin-top: -2px;
	position: relative;
}
.Coloumn  input:focus {
	outline: 0;
	border-color: blue;
}
.Coloumn #button{
	border-style: none;
	text-align: center;
	background-color: blue;
	font-family: 'Noto Sans', sans-serif;
	border: 1px solid #E3E1E1;
	font-size: 20px;
	margin: -40px 40%;
	position: absolute;
	background-color: #F9F8F8;
	color: black;
}
#img{
	width: 55px;
	height: 55px;
	border: 10px;
}
select{
	border:1px solid gray;
	width: 200px;
	height:30px;
	font-family: 'Lora', serif;
	outline: none;
	position: fixed;
}
button{
	height:30px;
	border:none;
    width: 100px;
    cursor: pointer;
    font-size: 15px;
    font-weight: bold;
    margin: 0px 13rem;
    position: fixed;
    font-family: 'Lora', serif;
    border:1px solid rgba(0,0,0,0.1);

}
button:hover{
	position: fixed;
	color: red;
	cursor: pointer;
	font-size: 18px;
	background-color: white;
	width: 100px;
	transition: 0.3s;
	font-family: 'Lora', serif;
}
input[type="button"]{
	height:30px;
	border:none;
    width: 100px;
    font-size: 15px;
    font-weight: bold;
    font-family: 'Lora', serif;
    cursor: pointer;
    border:1px solid rgba(0,0,0,0.1);
}
input[type="button"]:hover{
   border:1px solid rgba(0,0,0,0.1);
	background-color: navy;
	color: white;
	cursor: pointer;
	font-size: 18px;
	width: 100px;
	transition: 0.3s;
	font-family: 'Lora', serif;
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

/*tr:nth-child(odd),#roll:nth-child(even) {background-color: #f2f2f2;}
 #roll:nth-child(even){background-color: #f2f2f2;}*/

</style>
	<script type="text/javascript">
		
		
		function Yearly_Result(){
			 var EXAMINATION_RESULT_DECLARE = document.getElementById('EXAMINATION_RESULT_DECLARE');
	        EXAMINATION_RESULT_DECLARE.style.visibility="hidden";
	        var Admit_Card = document.getElementById('Admit_card');
	        Admit_Card.style.visibility="hidden";
	     		var Information = document.getElementById('hidden_value');
			    Information.style.visibility="hidden";
			    var Information = document.getElementById('Information_Students');
			    Information.style.visibility="visible";
			    var Registration = document.getElementById('Registration');
	        Registration.style.visibility="hidden";
		}
		function TOP_TEN_STUDENTS(argument){
			 var EXAMINATION_RESULT_DECLARE = document.getElementById('EXAMINATION_RESULT_DECLARE');
	        EXAMINATION_RESULT_DECLARE.style.visibility="hidden";
	        var Admit_Card = document.getElementById('Admit_card');
	        Admit_Card.style.visibility="hidden";
	     		var Information = document.getElementById('hidden_value');
			    Information.style.visibility="visible";
			    var Information = document.getElementById('Information_Students');
			    Information.style.visibility="hidden";
			    var Registration = document.getElementById('Registration');
	        Registration.style.visibility="hidden";
		}
		/*HERE HIDDEN FROM INFORMATION */
		
		
		
		function Declare_Admit_Card(){
	         var EXAMINATION_RESULT_DECLARE = document.getElementById('EXAMINATION_RESULT_DECLARE');
	        EXAMINATION_RESULT_DECLARE.style.visibility="hidden";
	        var Admit_Card = document.getElementById('Admit_card');
	        Admit_Card.style.visibility="visible";
	     		var Information = document.getElementById('hidden_value');
			    Information.style.visibility="hidden";
			    var Information = document.getElementById('Information_Students');
			    Information.style.visibility="hidden";
			    var Registration = document.getElementById('Registration');
	        Registration.style.visibility="hidden";
		}
		Information_Students, top_10_student, Admit_card , EXAMINATION_RESULT_DECLARE
		function Declare_Result(){

	        var EXAMINATION_RESULT_DECLARE = document.getElementById('EXAMINATION_RESULT_DECLARE');
	        EXAMINATION_RESULT_DECLARE.style.visibility="visible";
	        var Admit_Card = document.getElementById('Admit_card');
	        Admit_Card.style.visibility="hidden";
	     		var Information = document.getElementById('hidden_value');
			    Information.style.visibility="hidden";
			    var Information = document.getElementById('Information_Students');
			    Information.style.visibility="hidden";
			    var Registration = document.getElementById('Registration');
	        Registration.style.visibility="hidden";
			
		}
		function Registration(argument) {
			// body...
			 var Registration = document.getElementById('Registration');
	        Registration.style.visibility="visible";
			 var EXAMINATION_RESULT_DECLARE = document.getElementById('EXAMINATION_RESULT_DECLARE');
	        EXAMINATION_RESULT_DECLARE.style.visibility="hidden";
	        var Admit_Card = document.getElementById('Admit_card');
	        Admit_Card.style.visibility="hidden";
	     		var Information = document.getElementById('hidden_value');
			    Information.style.visibility="hidden";
			    var Information = document.getElementById('Information_Students');
			    Information.style.visibility="hidden";
		}
		
		
	</script>
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
                                    $class = $query_retrive['Class'];

                  
                //  $class = $query_retrive['Class'];        
		?>
	<div style="top: -5px;color:black; position:  absolute; margin: 36px 36%;"><input type="" name="" placeholder="Search"></div>
    <div style="top: -5px;position:  absolute; margin: 8px 4%;"><img src="shishu.png" id="img"></div>
	<div style="top: -5px;position:  absolute; margin: 23px 10%;">WELCOME : <?php echo strtoupper($query_retrive['Name']); ?></div>
	
    <div style="top: -5px;color:black; position:  absolute; margin: 10px 40%;"><a href="logout" class="logout"> logout</a></div>
     </div>
	<div class="Contain" align="center" style="color: white;"> 
		<li style="color: white;">
				<!-- <ol>
					     <a href="javascript:void(0)" onclick="Yearly_Result()">ExamResult</a>
				</ol>
		    	<ol>
					     <a href="javascript:void(0)" onclick="TOP_TEN_STUDENTS()">TOP 10</a>
				</ol> -->
		    	<ol>
					   <a href="DeclareResult.php?url=<?php echo $username;?>">Declare Result</a>
				</ol>
				<ol>
					   <a href="AdmitCard.php?url=<?php echo $username;?>">Admit Card</a>s

				</ol>	
				<ol>
					   <a href="Registration.php?url=<?php echo $username;?>">Registration</a>
				</ol>	
		</li>
	</div>
</div>
</div>
	
<div id="Information_Students" >
	<form  method="post" id="student_exam">
		<input type="hidden" style="position: absolute;" name="Class" value="<?php echo $class;?>">
	<table>
		<tbody>
			<select id="MONTH" name="month">
				  <option value="QUTERLY">QUARTERLY</option>
				  <option value="halfyear">HALFYEAR</option>
				  <option value="YEARLY">YEARLY</option>
			</select>
			    <button type="button" onclick="Submit_month_exam()" >Search</button>
		</tbody>
	</table>
	<div id="Exam" style="position: absolute; margin: 40px 0;"></div>
	</form>
	</div>
      

<!-- Top ten students name and his percentage and fatch data another page  -->
<div  style="position: absolute;" id="hidden_value">
	
<form  method="post" id="top_10_student ">
	<table>
		<tbody>
			<input type="hidden" style="position: absolute;" name="Class" value="<?php echo $class;?>">
			<select id="MONTH" name="MONTH">
				  <option value="QUTERLY">QUTERLY</option>
				  <option value="halfyear">HALFYEALY</option>
				  <option value="YEARLY">YEARLY</option>

			    </select>
			    <button type="button" onclick="top_10s()" >Search</button>
		</tbody>
				
			
	</table>
	<div id="Tests" style="position: absolute; margin: 40px 0;"></div>
</form>	
</div>
</div>
<!-- EXAMINATION RESULT CREATE PANEL -->

<?php
require 'connection.php';
        $fetch_query    = mysqli_query($Database,"select *from declare_admitcard");
        $result         = mysqli_fetch_array($fetch_query);
             if ($result['Month']) {
                 
                echo "<div style='position:absolute;'></div>
                    <script>$('#button_data').attr('disabled', true);</script>"; 
            }
?>
<!-- EXAMINATION ADMIT CARD DELCARE HERE -->

</div>
<div id="Admit_card">
	<DIV style="border:1px solid blue; width: 70%; text-align: center; border-bottom: none; background-color: blue;color: white; margin: 150px 190px;"> DECLARE ADMIT CARD OF STUDENT</DIV>
<DIV style="border:1px solid blue;  width: 70%; height: 220px;  margin: -150px 190px; background-color: white;"> 

	<table style="border:1px solid blue; width: 90%; height: 130px; text-align: center; border-collapse: collapse; border-color: blue;background-color: white; margin: 40px 40px;">
		<tr style="border:1px solid blue; color: white; background-color: rgba(0,0,0,0.9);">
			<td style="border:1px solid blue;">EXAMINATION NAME</td>
			<td style="border:1px solid blue;">DECLARE</td>
			<TD style="border:1px solid blue;">DELETE ADMIT CARD</TD>
		</tr>
	    <tr>	
			<form method="post" id="QUARTARLY_EXAMINATION">
				<input type="hidden" name="MONTH" value="QUARTARLY EXAMINATION" style="position: absolute;">
				<td style="border:1px solid blue;">
					QUARTARLY EXAMINATION
				</td>

				<td style="border:1px solid blue;">
					<?php echo $result['Date_Declare'];?>
					<input type="button" id="button_data"  onclick="QUARTARLY_EXAMINATION_declare_Admit_card_student()" value="Declare">
				</td>
			</form>
			<form method="post" id="DELETE_QUARTARLY_EXAMINATION">
				<TD style="border:1px solid blue;">
					<input type="hidden" name="Month"  style="position: absolute;" value="QUARTARLY EXAMINATION">

					<input type="button" id="button_data" onclick="DELETE_QUARTARLY_EXAMINATION_declare_Admit_card_student()"value="DELETE">
				</TD>
			</form>
	    </tr>
	     <tr>	
			<form method="post" id="HALFYEARLY_EXAMINATION">
				<input type="hidden" name="MONTH" value="HALFYEARLY EXAMINATION" style="position: absolute;">
				<td style="border:1px solid blue;">
					HALFYEARLY EXAMINATION
				</td>
				<td style="border:1px solid blue;">
					<input type="button" id="button_data"  onclick="HALFYEARLY_EXAMINATION_declare_Admit_card_student()" value="Declare">
				</td>
			</form>
			<form method="post" id="DELETE_HALFYEARLY_EXAMINATION">
				<TD style="border:1px solid blue;">
					<input type="hidden" name="Month"  style="position: absolute;" value="HALFYEARLY EXAMINATION">
					<input type="button"id="button_data"onclick="DELETE_HALFYEARLY_EXAMINATION_declare_Admit_card_student()"value="DELETE">
				</TD>
			</form>
	    </tr>
	     <tr>	
			<form method="post" id="YEARLY_EXAMINATION">
				<input type="hidden" name="MONTH" value="YEARLY EXAMINATION" style="position: absolute;">
				<td style="border:1px solid blue;">
					YEARLY EXAMINATION
				</td>
				<td style="border:1px solid blue;">
					<input type="button" id="button_data"  onclick="YEARLY_EXAMINATION_declare_Admit_card_student()" value="Declare">
				</td>
			</form>
			<form method="post" id="DELETE_YEARLY_EXAMINATION">
				<TD style="border:1px solid blue;">
					<input type="hidden" name="Month"  style="position: absolute;" value="YEARLY EXAMINATION">
					<input type="button" id="button_data"onclick="DELETE_YEARLY_EXAMINATION_declare_Admit_card_student()"value="DELETE">
				</TD>
			</form>
			
	    </tr>
	</table>
</div>
</DIV>
</div>

<!-- EXAMINTION RESULT DECLARE HERE -->

<?php
require 'connection.php';
        $fetch_query    = mysqli_query($Database,"select *from examination");
        
             
?>

<div id="EXAMINATION_RESULT_DECLARE">
	<DIV style="border:1px solid blue; width: 70%; text-align: center; border-bottom: none; background-color: blue;color: white; margin: 150px 190px;"> DECLARE EXAMINATION RESULT</DIV>
<DIV style="border:1px solid blue;  width: 70%; height: 220px;  margin: -150px 190px; background-color: white;"> 
	
	<table style="border:1px solid blue; width: 90%; height: 60px; text-align: center; border-collapse: collapse; border-color: blue;background-color: white; margin: 40px 40px;">
		<tr style="border:1px solid blue; color: white; background-color: rgba(0,0,0,0.9);">
			<td style="border:1px solid blue;">EXAMINATION NAME</td>
			<td style="border:1px solid blue;">DECLARE</td>
		</tr>
	    <tr>	
	    	<?php 
                         $a1=''; $a2=''; $a3='';
                        

                         $b1=''; $b2='';$b3=''; $b4='';$b5=''; $b6=''; 

	    	while($result= mysqli_fetch_array($fetch_query)){
                      
                        if (strtoupper($result['MONTH'])=='QUTERLY'){$a1="success";}
                        if (strtoupper($result['MONTH'])=='HALFYEAR'){$a2="success";}
                        if (strtoupper($result['MONTH'])=='YEARLY'){$a3="success";}
                        /* TEST RESUT DECLARE HERE*/
                       
                      
                  }
                      if ($a1=="success") {                  
	    	
			echo '<form method="post" id="QUARTARLY_EXAMINATION_RESULT_DECLARE">
					<input type="hidden" style="position: absolute;" name="Class" value="'.$class.'">
					 <input type="hidden" name="Totalmarksexam" value="600" style="position: absolute;">
				<input type="hidden" name="MONTH" value="QUTERLY" style="position: absolute;">
				<td style="border:1px solid blue;">
					QUARTARLY EXAMINATION
				</td>
				<td style="border:1px solid blue;">
					 <input type="hidden" name="Totalmarksexam" value="600" style="position: absolute;">
					<input type="button" id="QUARTARLY_EXAMINATION_button_data"  onclick="QUARTARLY_EXAMINATION_RESULT()" value="Declare">
				</td>
			</form>
	    </tr>';
	   }
          if ($a2=="success") {
          echo'

	     <tr>	
			<form method="post" id="HALFYEARLY_EXAMINATION_RESULT_DECLARE">
				<input type="hidden" style="position: absolute;" name="Class" value="'.$class.'">
				 <input type="hidden" name="Totalmarksexam" value="600" style="position: absolute;">
				<input type="hidden" name="MONTH" value="HALFYEAR" style="position: absolute;">
				<td style="border:1px solid blue;">
					HALFYEARLY EXAMINATION
				</td>
				<td style="border:1px solid blue;">
					<input type="button" id="QUARTARLY_EXAMINATION_button_data"  onclick="HALFYEARLY_EXAMINATION_RESULT()" value="Declare">
				</td>
			</form>
	    </tr>';
	   }
	 if ($a3=="success") {
	 	echo '
	     <tr>	
			<form method="post" id="YEARLY_EXAMINATION_RESULT_DECLARE">
				 <input type="hidden" name="Totalmarksexam" value="600" style="position: absolute;">
					<input type="hidden" style="position: absolute;" name="Class" value="'.$class.'">
				<input type="hidden" name="MONTH" value="YEARLY" style="position: absolute;">
				<td style="border:1px solid blue;">
					YEARLY EXAMINATION
				</td>
				<td style="border:1px solid blue;">
					<input type="button" id="QUARTARLY_EXAMINATION_button_data"  onclick="YEARLY_EXAMINATION_RESULT()" value="Declare">
				</td>
			</form>
	    </tr>';
	}
	
?>
</tr>
</table>
</DIV>
</div>
<!-- Registrarion -->

<div id="Registration">
	<DIV style="border:1px solid blue; width: 70%; text-align: center; border-bottom: none; background-color: blue;color: white; margin: 150px 190px;"> Registration Form</DIV>
<DIV style="border:1px solid blue;  width: 70%; height: 220px;  margin: -150px 190px; background-color: white;"> 

	<table style="border:1px solid blue; width: 90%; height: 130px; text-align: center; border-collapse: collapse; border-color: blue;background-color: white; margin: 40px 40px;">
		<tr style="border:1px solid blue; color: white; background-color: rgba(0,0,0,0.9);">
			<td style="border:1px solid blue;">OPEN</td>
			<TD style="border:1px solid blue;">CLOSE</TD>
		</tr>
	    <tr>	
			<form method="post" id="Registration_open">
				<input type="hidden" name="i" value="2" style="position: absolute;">
				<input type="hidden" name="open" value="YES" style="position: absolute;">
				

				<td style="border:1px solid blue;">
					
					<input type="button" id="button_data"  onclick="Registration_open()" value="YES">
				</td>
			</form>
			<form method="post" id="Registration_close">
				<TD style="border:1px solid blue;">
									<input type="hidden" name="id" value="2" style="position: absolute;">

					<input type="hidden" name="open"  style="position: absolute;" value="close">

					<input type="button" id="button_data" onclick="Registration_close()"value="Close">
				</TD>
			</form>
	    </tr>
	     
	</table>
</div>
</DIV>
</div>
<!--  -->
<!-- here student marks in month and other examination name -->
<script type="text/javascript">
function Registration_open(argument) {
                 jQuery.ajax({
                    url:'Registration_line_open.php',
                    method:'post',
                    data:jQuery('#Registration_open').serialize(),
                    success:function(data){
                        alert(data);
                    }
                 });
            }
            function Registration_close(argument) {
                 jQuery.ajax({
                    url:'Registration_line_open.php',
                    method:'post',
                    data:jQuery('#Registration_close').serialize(),
                    success:function(data){
                        alert(data);
                    }
                 });
               }
	function top_10s(){
		jQuery.ajax({
			url:"top_10",
			type:"post",
			data:jQuery("#top_10_student").serialize(),
			success:function(result) {
				$("#Tests").html(result);
			}
		});
	}
	
	function Submit_month_exam(){
		jQuery.ajax({
			url:"Examination.php",
			type : "post",
			data: jQuery("#student_exam").serialize(),
			success:function(data){
				$("#Exam").html(data);
			}
		});
	}
	function QUARTARLY_EXAMINATION_declare_Admit_card_student(){
		jQuery.ajax({
			url:"Send_data_of_AdmitCard.php",
			type:"post",
			data:jQuery("#QUARTARLY_EXAMINATION").serialize(),
			success:function(data){
				alert(data);
				if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}
			}
		});
	}

/*EXAMINAION RESULT DECLARE HERE METHOD DELARE */
function QUARTARLY_EXAMINATION_RESULT(){
		jQuery.ajax({
			url:"ResultDeclare.php",
			type:"post",
			data:jQuery("#QUARTARLY_EXAMINATION_RESULT_DECLARE").serialize(),
			success:function(data){
				alert(data);
				if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}
			}
		});
	}
	function HALFYEARLY_EXAMINATION_RESULT(){
		jQuery.ajax({
			url:"ResultDeclare.php",
			type:"post",
			data:jQuery("#HALFYEARLY_EXAMINATION_RESULT_DECLARE").serialize(),
			success:function(data){
				alert(data);
				if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}
			}
		});
	}
	/* TEST EXAMIN*/
	
	function YEARLY_EXAMINATION_RESULT(){
		jQuery.ajax({
			url:"ResultDeclare.php",
			type:"post",
			data:jQuery("#YEARLY_EXAMINATION_RESULT_DECLARE").serialize(),
			success:function(data){
				alert(data);
				if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}
			}
		});
	}
	/**************************************/
	function DELETE_QUARTARLY_EXAMINATION_declare_Admit_card_student(){
		jQuery.ajax({
			url:"Delete_admit_card.php",
			type:"post",
			data:jQuery("#DELETE_QUARTARLY_EXAMINATION").serialize(),
			success:function(data){
				alert(data);
				/*if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}*/
			}
		});
	}
	function HALFYEARLY_EXAMINATION_declare_Admit_card_student(){
		jQuery.ajax({
			url:"Send_data_of_AdmitCard.php",
			type:"post",
			data:jQuery("#HALFYEARLY_EXAMINATION").serialize(),
			success:function(data){
				alert(data);
				if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}
			}
		});
	}
	function DELETE_HALFYEARLY_EXAMINATION_declare_Admit_card_student(){
		jQuery.ajax({
			url:"Delete_admit_card.php",
			type:"post",
			data:jQuery("#DELETE_HALFYEARLY_EXAMINATION").serialize(),
			success:function(data){
				alert(data);
				if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}
			}
		});
	}
	function YEARLY_EXAMINATION_declare_Admit_card_student(){
		jQuery.ajax({
			url:"Send_data_of_AdmitCard.php",
			type:"post",
			data:jQuery("#YEARLY_EXAMINATION").serialize(),
			success:function(data){
				alert(data);
				if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}
			}
		});
	}
	function DELETE_YEARLY_EXAMINATION_declare_Admit_card_student(){
		jQuery.ajax({
			url:"Delete_admit_card.php",
			type:"post",
			data:jQuery("#DELETE_YEARLY_EXAMINATION").serialize(),
			success:function(data){
				alert(data);
				if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}
			}
		});
	}
	/* HERE STUDENT TOP NAME IN CLASS*/
	
</script>

</body>
</html>
<?php
 }
    else{
      ?>
         <script language="javascript">
             window.location.href = "GUI";
        </script>
<?php
     }
?>