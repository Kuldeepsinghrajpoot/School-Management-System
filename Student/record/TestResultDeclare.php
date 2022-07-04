<?php 
    session_start();
    session_id();

    require 'connection.php';
     if ($_SESSION['username']==true) {
     $Class =	$_SESSION['Class_of_Student'];
     	//echo "<script>alert("$_SESSION['username']")</script>";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Students Records</title>
	     <link rel="shortcut icon" type="image/jpg" href="shishu.png">
	               <link rel="stylesheet" type="text/css" href="styleonecss/style.css"> 


	
	<?php require 'link.php';?>
	<style type="text/css">
		
body{
	font-family: 'Lora', serif;
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
			background-color:navy;
			position: absolute;
			text-align: center;
			box-sizing: border-box;
			box-shadow: 10px 0px 20px rgba(0,0,0,0.1);

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
background-color:red;
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
 #hidden_value,#Roll_Number_stundent,#Admit_card,#TEST_EXAMINATION_RESULT_DECLARE{
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
#Information_Student_Test_Marks{
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
#hidden_value{
	visibility: hidden;
}
#hidden_value table tr,td,th{
	border:1px solid #BEBEBE;
	text-align: center;
	font-size: 15px;
	width: 100rem
}
#Information_Student_Test_Marks{
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
#Result_navigations{
	visibility:hidden;
}
#EXAMINATION_RESULT_CREATE_PANEL,#TEST_EXAMINATION_RESULT_CREATE{
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
	position: absolute;
	background-color: white;
	color: darkred;
}
/**/
#Admit_card{
	width: 84.3%;
	height: 100%;
	position: absolute;
	margin:0.5px 6px;
    top: 5.10rem;
    left:15.2%;
    font-size: 20px;

}
.Admit_card_info_exam{
	width: 70%;
	text-align: center;
	border-bottom: none; 
	background-color: blue;
	color: white;
	margin: 50px 190px;
		  background-image: linear-gradient(0deg,darkgreen,green);

}
.Admit_card_info{
	width: 70%; 
	height: 100%; 
	min-height: 400px;
	margin: -50px 190px; 
	background-color: white;
	border-right: none;
	box-shadow: 0 0px 30px 0px rgba(0,0,0,0.1);
}
.Admit_card_info table{
	text-align: left;
	width: 95%; 
	max-height: all;
	height: 10px;
	min-height: 20px; 
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
	height: 10px;
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
                  $class = $query_retrive['Class'];
                  $query_class = "select *from student where Class='$class'";
                  $query_class_result = mysqli_query($Database ,$query_class);
                  $total_Student  = mysqli_num_rows($query_class_result);
                //  $class = $query_retrive['Class'];        
		?>
    <div style="top: -5px;position:  absolute; margin: 8px 4%;"><img src="shishu.png" id="img"></div>
	<div style="top: -5px;position:  absolute; margin: 23px 10%;">WELCOME : <?php echo strtoupper($query_retrive['Name']); ?></div>
	<div style="top: -5px;color:black; position:  absolute; margin: 23px 30%;">STUDENT'S : <?php echo  $total_Student;?></div>
	<div style="top: -5px;color:black; position:  absolute; margin: 23px 25%;">CLASS: <?php echo  $class;?></div>
    <div style="top: -5px;color:black; position:  absolute; margin: 10px 40%;"><a href="logout" class="logout" style="top: -5px;color:black; position:  absolute; margin: 23px 180px;"> logout</a></div>
     </div>
	<div class="Contain" align="center" style="color: white;"> 
		<li style="color: white;">
			<ol>
			  	     <a href="Information?url=<?php echo $username;?>" > Information</a>
			   </ol>
			    <ol>
				      <a href="Roll_Number?url=<?php echo $username;?>" > Roll Number</a>
			    </ol>	
				<ol >
					 <a href="TestResult?url=<?php echo $username;?>"> TestResult</a>
				</ol>
				<ol>
           <a href="ExamResult?url=<?php echo $username;?>">ExamResult</a>
				</ol>
			
		    	<ol>
					 <a href="top?url=<?php echo $username;?>">TOP 10</a>
				</ol>
				<ol >
					  <a href="TestResultCreate?url=<?php echo $username;?>">TestResultCreate</a>
				</ol>
				<ol>
					  <a href="EXAMINATION_RESULT_CREATE_PANEL?url=<?php echo $username;?>">ExamResultCreate</a>
				</ol>
		    
				<ol>
					<a href="TestResultDeclare?url=<?php echo $username;?>">TestResultDeclare</a>
				</ol>
				<ol>
          <a href="Fee?url=<?php echo $username;?>">Profile</a>
        </ol>
		</li>
	</div>
</div>
</div>
	
<?php
require 'connection.php';
        
             
?>

	    	<?php 

                    $a1=''; $a2=''; $a3='';$success='';$success1='';$success2='';
                     $a4=''; $a5=''; $a6='';$success4='';$success5='';$success6='';$success3='';
 $fetch_query = mysqli_query($Database,"select *from student s join  examination e on s.RollNumber=e.RollNumber where class='$Class' and MONTH='july' "); 
 
                    while($result_month= mysqli_fetch_array($fetch_query)){
                      
                        if ($result_month['MONTH']=='july'){
                        	$a1="july";
                        	
                        	if ($result_month['Declare_Result']=='yes') {
                        	 $success1='yes';
                        	}
                        }
                    }
                    $fetch_query = mysqli_query($Database,"select *from student s join  examination e on s.RollNumber=e.RollNumber where class='$Class' and   MONTH='August'"); 
 
                    while($result_month= mysqli_fetch_array($fetch_query)){
                         if($result_month['MONTH']=='August'){
                        	$a2="August";
                        	
                        	if ($result_month['Declare_Result']=='yes') {
                        		 $success2='yes';
                        	}
                        }
                    }
                    $fetch_query = mysqli_query($Database,"select *from student s join  examination e on s.RollNumber=e.RollNumber where class='$Class' and  MONTH='october'"); 
                    while($result_month= mysqli_fetch_array($fetch_query)){
                        if($result_month['MONTH']=='october'){
                        	$a3="october";
                        	
                        	if ($result_month['Declare_Result']=='yes') {
                        		$success3='yes';
                        	}
                        }
                      
                        /* TEST RESUT DECLARE HERE*/
                       
                      
                  }   
                   $fetch_query = mysqli_query($Database,"select *from student s join  examination e on s.RollNumber=e.RollNumber where class='$Class' and  MONTH='november'"); 
                    while($result_month= mysqli_fetch_array($fetch_query)){
                        if($result_month['MONTH']=='november'){
                        	$a4="november";
                        	if ($result_month['Declare_Result']=='yes') {
                        		$success4='yes';
                        	}
                        }
                      
                        /* TEST RESUT DECLARE HERE*/
                       
                      
                  }      
                   $fetch_query = mysqli_query($Database,"select *from student s join  examination e on s.RollNumber=e.RollNumber where class='$Class' and  MONTH='january'"); 
                    while($result_month= mysqli_fetch_array($fetch_query)){
                        if($result_month['MONTH']=='january'){
                        	$a5="january";
                        	
                        	if ($result_month['Declare_Result']=='yes') {
                        		$success5='yes';
                        	}
                        }
                      
                        /* TEST RESUT DECLARE HERE*/
                       
                      
                  }   
                   $fetch_query = mysqli_query($Database,"select *from student s join  examination e on s.RollNumber=e.RollNumber where class='$Class' and  where MONTH='febuary'"); 
                    while($result_month= mysqli_fetch_array($fetch_query)){
                        if($result_month['MONTH']=='febuary'){
                        	$a6="febuary";
                        
                        	if ($result_month['Declare_Result']=='yes') {
                        		$success6='yes';
                        	}
                        }
                      
                        /* TEST RESUT DECLARE HERE*/
                       
                      

                  } ?>           
                      
	
<!-- TEST RESULT DECLARE HERE  -->

<div id="TEST_EXAMINATION_RESULT_DECLARE" style="visibility: visible;">
	<DIV class="Admit_card_info_exam"> TEST EXAMINATION RESULT DECLARED</DIV>
<DIV class="Admit_card_info"> 
	
	<table align="left">
		<td class="th">EXAMINATION NAME</td>
			<td class="th">DATE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
			<td class="th">DECLARE</td>
		<?php 
		                        $fetch_query = mysqli_query($Database,"select *from examination where MONTH='july'"); 
                    $result= mysqli_fetch_array($fetch_query);
                       if($a1=='july'){

                    ?>
	    <tr>
	            <td>
					July Month Examination
				</td>
				<td>
					<?php echo $result['Date_Declare'];?>
				</td>	
				<input type="hidden" name="MONTH" id="QUART1" value="july" style="position: absolute;">
	    	
        <td>
	        <div class="container">
		        <?php
                      
                        if(($a1=='july')&&($success1=='yes')){

                    	echo "<input type='checkbox'   value='".$success1."' id='checkbox1'>";
                    }
                    else{
                    	echo "<input type='checkbox'  value='no' id='checkbox1' checked>";
                    }
                }

		       ?>
				      <label for="checkbox1" ></label>
		    </div>
		</td>
	</tr>
	<!--  -->
 <?php 
		                        $fetch_query = mysqli_query($Database,"select *from examination where MONTH='August'"); 
                    $result= mysqli_fetch_array($fetch_query);
                                                      if($a2=='August'){

                    ?>
	<tr>
             <td>
					August Month Examination
				    <input type="hidden" name="MONTH" id="QUART2" value="August" style="position: absolute;">
			</td>	
			<td>
									<?php echo $result['Date_Declare'];?>
			</td>

         <td>
	       <div class="container">
		       
                      <?php
                        if(($a2=='August')&&($success2=='yes')){
                    	echo "<input type='checkbox'   value='".$success1."' id='checkbox2'>";
                    }
                    else{
                    	echo "<input type='checkbox'  value='no' id='checkbox2' checked>";
                    }
                }
		       ?>
				      <label for="checkbox2" ></label>
		    </div>
		</td>
	</tr>
	<!--  -->
	<?php  $fetch_query = mysqli_query($Database,"select *from examination where MONTH='october'"); 
                    $result= mysqli_fetch_array($fetch_query);

                       if($a3=='october'){
                    ?>
	<tr>
             <td>
				October Month Examination
				    <input type="hidden" name="MONTH" id="QUART3" value="october" style="position: absolute;">

			</td>	
			<td>
									<?php echo $result['Date_Declare'];?>
			</td>

         <td>
	       <div class="container">
		        <?php 
		                       
                     
                        if(($a3=='october')&&($success3=='yes')){
                    	echo "<input type='checkbox' value='".$success2."' id='checkbox3' >";
                    }
                    else{
                    	echo "<input type='checkbox'  value='no' id='checkbox3' checked>";
                    }
                }
		       ?>
				      <label for="checkbox3" ></label>
		    </div>
		</td>
	</tr>


		<!-- 3 -->
		<?php  $fetch_query = mysqli_query($Database,"select *from examination where MONTH='november'"); 
                    $result= mysqli_fetch_array($fetch_query);

                       if($a3=='november'){
                  ?>
		   <td>
					November Month Examination
				    <input type="hidden" name="MONTH" id="QUART4" value="november" style="position: absolute;">

			</td>	
			<td>
									<?php echo $result['Date_Declare'];?>
			</td>

         <td>
	       <div class="container">
		       
                      <?php
                        if(($a4=='november')&&($success4=='yes')){
                    	echo "<input type='checkbox'   value='".$success1."' id='checkbox4' disabled>";
                    }
                    else{
                    	echo "<input type='checkbox'  value='no' id='checkbox4' checked>";
                    }
                }
		       ?>
				      <label for="checkbox4" ></label>
		    </div>
		</td>
	</tr>
	<!--  -->
	<?php  $fetch_query = mysqli_query($Database,"select *from examination where MONTH='january'"); 
                    $result= mysqli_fetch_array($fetch_query);

                       if($a3=='january'){
                    ?>
	<tr>
             <td>
				January Month Examination
				    <input type="hidden" name="MONTH" id="QUART5" value="january" style="position: absolute;">

			</td>	
			<td>
									<?php echo $result['Date_Declare'];?>
			</td>

         <td>
	       <div class="container">
		        <?php 
		                       
                     
                        if(($a3=='january')&&($success3=='yes')){
                    	echo "<input type='checkbox' value='".$success2."' id='checkbox5' >";
                    }
                    else{
                    	echo "<input type='checkbox'  value='no' id='checkbox5' checked>";
                    }
                }
		       ?>
				      <label for="checkbox5" ></label>
		    </div>
		</td>
		<!--  -->
	</tr>
		<?php  $fetch_query = mysqli_query($Database,"select *from examination where MONTH='febuary'"); 
                    $result= mysqli_fetch_array($fetch_query);

                       if($a3=='febuary'){
                    ?>
	<tr>
             <td>
				January Month Examination
				    <input type="hidden" name="MONTH" id="QUART5" value="febuary" style="position: absolute;">

			</td>	
			<td>
									<?php echo $result['Date_Declare'];?>
			</td>

         <td>
	       <div class="container">
		        <?php 
		                       
                     
                        if(($a3=='febuary')&&($success3=='yes')){
                    	echo "<input type='checkbox' value='".$success2."' id='checkbox6' >";
                    }
                    else{
                    	echo "<input type='checkbox'  value='no' id='checkbox6' checked>";
                    }
                }
		       ?>
				      <label for="checkbox6" ></label>
		    </div>
		</td>
	</tr>
</table>
</div>
</DIV>

?>
<?php
require 'connection.php';
        $fetch_query    = mysqli_query($Database,"select *from declare_admitcard");
        $result         = mysqli_fetch_array($fetch_query);
             if ($result['Month']) {
                 
                echo "<div style='position:absolute;'></div>
                    "; 
            }
?>
<!-- EXAMINATION ADMIT CARD DELCARE HERE -->

</div>


<!-- EXAMINTION RESULT DECLARE HERE -->

<?php
require 'connection.php';
        $fetch_query    = mysqli_query($Database,"select *from examination");
        
             
?>



<!-- here student marks in month and other examination name -->
<script type="text/javascript">
var a = document.querySelector('#checkbox1');
	      a.addEventListener('click',function(e){

	    		       stat=$('#checkbox1').val();
	    		       QUART=$('#QUART1').val();


                  if (stat=='yes') {
                  	 stat=$('#checkbox1').val();
	    		     QUART=$('#QUART1').val();
                  	stat='no';
			    jQuery.ajax({
				   url:'ResultDeclare.php',
				   type:'post',
				  data:{data:stat,MONTH:QUART,Totalmarksexam:'10'},
				    success:function(data){
					alert(data);
										 window.location.href="";

				}
			});
		}
		else if (stat=='no') {
			         stat=$('#checkbox1').val();
	    		     QUART=$('#QUART1').val();

                  	stat='yes';
			    jQuery.ajax({
				    url:'ResultDeclare.php',
				   type:'post',
				   data:{data:stat,MONTH:QUART,Totalmarksexam:'10'},
				    success:function(data){
					 alert(data);
					 window.location.href="";
				}
			});
		}
	});
	      /*2*/
	      var a = document.querySelector('#checkbox2');
	      a.addEventListener('click',function(e){

	    		       stat=$('#checkbox2').val();
	    		       QUART=$('#QUART2').val();


                  if (stat=='yes') {
                  	 stat=$('#checkbox2').val();
	    		     QUART=$('#QUART1').val();
                  	stat='no';
			    jQuery.ajax({
				   url:'ResultDeclare.php',
				   type:'post',
				  data:{data:stat,MONTH:QUART,Totalmarksexam:'10'},
				    success:function(data){
					alert(data);
										 window.location.href="";

				}
			});
		}
		else if (stat=='no') {
			         stat=$('#checkbox2').val();
	    		     QUART=$('#QUART2').val();

                  	stat='yes';
			    jQuery.ajax({
				    url:'ResultDeclare.php',
				   type:'post',
				   data:{data:stat,MONTH:QUART,Totalmarksexam:'10'},
				    success:function(data){
					 alert(data);
					 window.location.href="";
				}
			});
		}
	});
	/* Third Examination of student*/
	 var a = document.querySelector('#checkbox3');
	      a.addEventListener('click',function(e){

	    		       stat=$('#checkbox3').val();
	    		       QUART=$('#QUART3').val();


                  if (stat=='yes') {
                  	 stat=$('#checkbox3').val();
	    		     QUART=$('#QUART3').val();
                  	stat='no';
			    jQuery.ajax({
				   url:'ResultDeclare.php',
				   type:'post',
				  data:{data:stat,MONTH:QUART,Totalmarksexam:'10'},
				    success:function(data){
					alert(data);
										 window.location.href="";

				}
			});
		}
		else if (stat=='no') {
			         stat=$('#checkbox3').val();
	    		     QUART=$('#QUART3').val();

                  	stat='yes';
			    jQuery.ajax({
				    url:'ResultDeclare.php',
				   type:'post',
				   data:{data:stat,MONTH:QUART,Totalmarksexam:'10'},
				    success:function(data){
					 alert(data);
					 window.location.href="";
				}
			});
		}
	});
	/*-----------------------------------------*/
	var a = document.querySelector('#checkbox4');
	      a.addEventListener('click',function(e){

	    		       stat=$('#checkbox4').val();
	    		       QUART=$('#QUART4').val();


                  if (stat=='yes') {
                  	 stat=$('#checkbox4').val();
	    		     QUART=$('#QUART4').val();
                  	stat='no';
			    jQuery.ajax({
				   url:'ResultDeclare.php',
				   type:'post',
				  data:{data:stat,MONTH:QUART,Totalmarksexam:'10'},
				    success:function(data){
					alert(data);
										 window.location.href="";

				}
			});
		}
		else if (stat=='no') {
			         stat=$('#checkbox4').val();
	    		     QUART=$('#QUART4').val();

                  	stat='yes';
			    jQuery.ajax({
				    url:'ResultDeclare.php',
				   type:'post',
				   data:{data:stat,MONTH:QUART,Totalmarksexam:'10'},
				    success:function(data){
					 alert(data);
					 window.location.href="";
				}
			});
		}
	});
	      /*5*/
	      var a = document.querySelector('#checkbox5');
	      a.addEventListener('click',function(e){

	    		       stat=$('#checkbox5').val();
	    		       QUART=$('#QUART5').val();


                  if (stat=='yes') {
                  	 stat=$('#checkbox5').val();
	    		     QUART=$('#QUART5').val();
                  	stat='no';
			    jQuery.ajax({
				   url:'ResultDeclare.php',
				   type:'post',
				  data:{data:stat,MONTH:QUART,Totalmarksexam:'10'},
				    success:function(data){
					alert(data);
										 window.location.href="";

				}
			});
		}
		else if (stat=='no') {
			         stat=$('#checkbox5').val();
	    		     QUART=$('#QUART5').val();

                  	stat='yes';
			    jQuery.ajax({
				    url:'ResultDeclare.php',
				   type:'post',
				   data:{data:stat,MONTH:QUART,Totalmarksexam:'10'},
				    success:function(data){
					 alert(data);
					 window.location.href="";
				}
			});
		}
	});
	/* Third Examination of student*/
	 var a = document.querySelector('#checkbox6');
	      a.addEventListener('click',function(e){

	    		       stat=$('#checkbox6').val();
	    		       QUART=$('#QUART6').val();


                  if (stat=='yes') {
                  	 stat=$('#checkbox6').val();
	    		     QUART=$('#QUART2').val();
                  	stat='no';
			    jQuery.ajax({
				   url:'ResultDeclare.php',
				   type:'post',
				  data:{data:stat,MONTH:QUART,Totalmarksexam:'10'},
				    success:function(data){
					alert(data);
										 window.location.href="";

				}
			});
		}
		else if (stat=='no') {
			         stat=$('#checkbox6').val();
	    		     QUART=$('#QUART6').val();

                  	stat='yes';
			    jQuery.ajax({
				    url:'ResultDeclare.php',
				   type:'post',
				   data:{data:stat,MONTH:QUART,Totalmarksexam:'10'},
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
             window.location.href = "GUI";
        </script>
<?php
     }
?>