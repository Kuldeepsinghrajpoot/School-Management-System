<?php 
    session_start();
    session_id();

    require 'connection.php';
     if ($_SESSION['username']==true) {
     	//echo "<script>alert("$_SESSION['username']")</script>";
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
 #Information_Student_Test_Marks,#hidden_value,#Admit_card,#EXAMINATION_RESULT_DECLARE,#TEST_EXAMINATION_RESULT_DECLARE,#Roll_Number_stundent{
	visibility: hidden;
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
#Result_navigations{
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
	<div style="top: -5px;color:black; position:  absolute; margin: 36px 36%;"><input type="" name="" placeholder="Search"></div>
    <div style="top: -5px;position:  absolute; margin: 8px 4%;"><img src="shishu.png" id="img"></div>
	<div style="top: -5px;position:  absolute; margin: 23px 10%;">WELCOME : <?php echo strtoupper($query_retrive['Name']); ?></div>
	<div style="top: -5px;color:black; position:  absolute; margin: 23px 30%;">STUDENT'S : <?php echo  $total_Student;?></div>
	<div style="top: -5px;color:black; position:  absolute; margin: 23px 25%;">CLASS: <?php echo  $class;?></div>
    <div style="top: -5px;color:black; position:  absolute; margin: 10px 40%;"><a href="logout" class="logout" style="top: -5px;color:black; position:  absolute; margin: 23px 180px;"> logout</a></div>
     </div>
	<div class="Contain" align="center" style="color: white;"> 
    <li style="color: white;">
      <ol>
               <a href="Information?url=<?php echo $username;?>" >Information</a>
         </ol>
          <ol>
              <a href="record/Roll_Number?url=<?php echo $username;?>"> Roll Number</a>
          </ol> 
        <ol >
           <a href="record/TestResult?url=<?php echo $username;?>"> TestResult</a>
        </ol>
        <ol>
           <a href="record/ExamResult?url=<?php echo $username;?>">ExamResult</a>
        </ol>
      
          <ol>
           <a href="record/top?url=<?php echo $username;?>">TOP 10</a>
        </ol>
        <ol >
            <a href="record/TestResultCreate?url=<?php echo $username;?>">TestResultCreate</a>
        </ol>
        <ol>
            <a href="record/EXAMINATION_RESULT_CREATE_PANEL?url=<?php echo $username;?>">ExamResultCreate</a>
        </ol>
        
        <ol>
          <a href="record/TestResultDeclare?url=<?php echo $username;?>">TestResultDeclare</a>
        </ol>
        
    </li>
  
</div>
</div>
</div>
	<div id="Information_Student">
	<table>
		<tr>
			<th>SN</th>
			<th>STUDENT'S NAME</th>
			<th>REGISTATION NUMBER</th>
			<th>ROLL NUMBER</th>
			<th>FATHER'S NAME</th>
			<th>MOTHER'S NAME</th>
			<th>DOB</th>
			<th>CATEGORY</th>
			<th>GENDER</th>
			<th>CONTACT</th>
			<th>ADDHAR NUMBER</th>
			<th>SAMAGRA ID</th>
			<th>POST</th>
			<th>DIST</th>
			<th>PIN</th>
			<th>CITY/VILLAGE</th>
			<th>ADDRESS</th>
			<th>ADDMISION DATE</th>  
            <th>ADDMISION FEES</th>  
            <th>PASS OUT YEAR</th>  
            <th>PASS OUT CLASS</th>  
            <th>PASS OUT SCHOOL</th>  
            <th>PASS OUT SCHOOL ADDRESS</th>  
            <th>PASS OUT CITY</th>  
            <th>PASS OUT POST</th>  
            <th>PASS OUT TEHSIL</th>  
            <th>PASS OUT DIST</th> 
            <th>PHOTO </th> 
            <th>SIGNATURE</th>  
		</tr>
		<?php
                       $sql = "select *from student where Class='$class'";
     $result = mysqli_query($Database,$sql);
		 $a=1; while ($row=mysqli_fetch_array($result)) {
      echo '<tr>
			<TD>'.$a++.'</TD>
			<TD>'.$row['FirstName'].' '.$row['LastName'].'</TD>
			<TD>'.$row['Registation'].'</TD>
			<TD>'.$row['RollNumber'].'</TD>
			<TD>'.$row['FatherName'].'</TD>
			<TD>'.$row['MotherName'].'</TD>
			<td>'.$row['DOB'].'</td>
			<TD>'.$row['Catagory'].'</TD>
			<td>'.$row['Gender'].'</td>
			<td>'.$row['Contact'].'</td>
			<TD>'.$row['Addhar'].'</TD>
			<TD>'.$row['samgra_id'].'</TD>
			<TD>'.$row['POST'].'</TD>
			<td>'.$row['Dist'].'</td>
            <td>'.$row['PIN'].'</td>
            <td>'.$cv=$row['CityVillage'].'</td>
			<TD>'.$row['Temprary_Address'].'</TD>
			<td>'.$row['Admission_Date']. '</td>  
            <td>'.$row['Admission_fees']. '</td>  
            <td>'.$row['Passing_Year'].'   </td>  
            <td>'.$row['Passing_Class'].'   </td>  
            <td>'.$row['Pass_out_School'].'</td>  
            <td>'.$row['pass_out_school_address'].'</td>  
            <td>'.$row['pass_out_City'].'  </td>  
            <td>'.$row['pass_out_post'].'  </td>  
            <td>'.$row['pass_out_tehsel'].'</td>             
            <td>'.$row['pass_out_dist'].'  </td> 
            <td><img style="margin:0 0px; border:1px solid blue; height:100px;width:100px;" src="photo/'.$row['Photo'].'"alt="Image";/>  </td>
            <td><img  style="border:1px solid blue; height:100px;width:100px;"src="image/'.$row['Signature'].'"alt="Image"
              />  </td>
		</tr>';}?>
	</table>
</div>
<!-- <a href="javascript:void(0)" style="position: absolute; color: black; top:95%; left: 40%; ">444444444444444444444hello</a> -->
</div>
<div id="Roll_Number_stundent">

	<DIV style="border:1px solid blue; width: 950px; text-align: center; border-bottom: none; background-color: blue;color: white; margin:  30px 110px;">ROLL NUMBER UPDATING</DIV>
<DIV style="border:1px solid blue;  width: 950px; height: auto;  margin: -30px 110px; background-color: white; overflow:hidden; overflow-y: auto;"> 
	
	
	<form method="POST" id="RollNumbers">
			<input type="hidden" style="position: absolute;" name="Class" value="<?php echo $class;?>">

	<table style="border:1px solid blue; width: 880px; height: 130px; text-align: center; border-collapse: collapse; border-color: blue;background-color: white; margin: 40px 40px; padding: 0 -5px;
	transform: translate();
">

		<tr>
			<th style="width: 3%;">SN</th>
			<th >STUDENT'S NAME</th>
			<th>REGISTATION NUMBER</th>
			<th>ROLL NUMBER</th>
			
		</tr>
		<?php
                       $sql = "select *from student where Class='$class'";
     $result = mysqli_query($Database,$sql);
		 $a=1; while ($row=mysqli_fetch_array($result)) {
      echo '<tr> 
			<TD>'.$a++.'</TD>
			<TD style="text-align: left; padding 5px 5px;">'.$row['FirstName'].' '.$row['LastName'].'</TD>
			<TD>'.$row['Registation'].'</TD>
			<TD><input type="text" id="roll" name="'.$row['Registation'].'s'.'" value="'.$row['RollNumber'].'" style="border:none; width:100%; text-align:center"> </TD>
		</tr>';}?>
	</table>
	<input type="button" value="Submit" onclick="update_roll_number()">
</form>
</div>
</DIV>
<div id="Information_Students">
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
       <div id="Information_Student_Test_Marks" style="color: black;">
<form method="post" id="form">	
	<table>
		<tbody>
			<input type="hidden" style="position: absolute;" name="Class" value="<?php echo $class;?>">
			<select id="month" name="month">
				  <option value="july">JULY</option>
				  <option value="AUGUST">AUGUST</option>
				  <option value="SEPTEMBER">SEPTEMBER</option>
				  <option value="OCTOBER">OCTOBER</option>
			</select>
				<button type="button" onclick="Submit_month()">Search</button>
		</tbody>	
	</table>
	<div id="Test_Result_data" style="position: absolute; margin: 40px 0;"></div>
</form>	
</div>
</div>

<!-- Top ten students name and his percentage and fatch data another page  -->
<div  style="position: absolute;" id="hidden_value">
	
<form  method="post" id="top_10_student">
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
<div id="EXAMINATION_RESULT_CREATE_PANEL">
 <div class="Coloumn">
      <div  align="center">
         <h1>EXAMINATION RESULT CREATE</h1>

      </div>
      <form method="post" id="frmCaptcha">
      	<input type="hidden" name="Class" value="<?php echo $class;?>">
         <table class="tabledata">
         	<tr>
            <td>Roll Number</td>
            <td><input type="text" name="Roll" id="Rolldata" required >
           </td>    
            </tr>
            <tr>
            <td>Exame Name</td>
            <td>
             <select type="text" name="MONTH" id="Studentdata"  required>
             	  <option value="QUTERLY">QUTERLY</option>
				  <option value="QUTERLY">QUTERLY</option>
				  <option value="halfyear">HALFYEALY</option>
				  <option value="YEARLY">YEARLY</option>
			</select>
            </td>
            </tr>
            <input type="hidden" name="totalmarks" value="600" id="totalmarks"  style="position: absolute;">
           
         </table>
         <div style="margin: 15px 5px;border:1px solid blue; height: auto;width: all;">
            <table class="tabledata" >
               <tr>
                  <td>SN.</td>
                  <td>SUBJECT</td>
                  <TD>THEORY </TD>
                  <TD>PROJECT</TD>
               </tr>
               <td>01</td>
               <td>Hindi</td>
               <td><input type="text" name="Hindi" id="Hindi" required=""></td>
               <td><input type="text" name="HindiPratical" id="HindiPratical" required=""></td>
               </tr>
               <tr>
                  <td>02</td>
                  <td>English</td>
                  <td><input type="text" name="English" id="English" required=""></td>
                  <td><input type="text" name="EnglishPratical" id="EnglishPratical" required=""></td>
               </tr>
               <tr>
                  <td>03</td>
                  <td>Math</td>
                  <td><input type="text" name="Math" id="Math" required=""></td>
                  <td><input type="text" name="MathPratical" id="MathPratical" required=""></td>
               </tr>
               <tr>
                  <td>04</td>
                  <td>Science</td>
                  <td><input type="text" name="Science" id="Science" required=""></td>
                  <td><input type="text" name="SciencePratical" id="SciencePratical" required=""></td>
               </tr>
               <tr>
                  <td>05</td>
                  <td>Social Science</td>
                  <td><input type="text" name="Social" id="Social" required=""></td>
                  <td><input type="text" name="SocialPratical" id="SocialPratical" required=""></td>
               </tr>
               <tr>
                  <td>06</td>
                  <td>Sanskrit</td>
                  <td><input type="text" name="Sanskrit" id="Sanskrit" required=""></td> 
                  <td><input type="text" name="SanskritPratical" id="SanskritPratical" required=""></td>
               </tr>
               
            </table>
            <table>
            	<tr>
               	<td><input type="button" value="submit"  onclick="submit_result()"  id="button"></td>
               </tr>
            </table>
            </div>
         
      </form>
      <p id="p"></p>
  </div>
</div>
<!-- TEST EXAMINATION RESULT CREATE -->
<div id="TEST_EXAMINATION_RESULT_CREATE">
 <div class="Coloumn">
      <div  align="center">
         <h1>TEST RESULT CREATE</h1>
      </div>
      <form method="post" id="test_Exame_result">
         <table class="tabledata">
         	<tr>
            <td>Roll Number</td>
            <td><input type="text" name="Roll" id="Rolldata"  >
           </td>    
            </tr>
            <tr>
            <td>Exame Name</td>
            <td><input type="text" name="MONTH" id="Studentdata"   ></td>
            </tr>
            <input type="hidden" name="totalmarks" value="10" id="totalmarks"  style="position: absolute;">
           
         </table>
         <div style="margin: 15px 5px;border:1px solid blue; height: auto;width: all;">
            <table class="tabledata">
               <tr id="trdata" style="border: 1px solid black;">
                  <td>SN.</td>
                  <td>SUBJECT</td>
                  <TD>THEORY </TD>
                 
               </tr>
               <td>01</td>
               <td>Hindi</td>
               <td><input type="text" name="Hindi" id="Hindimar" required=""></td>
               
               </tr>
               <tr>
                  <td>02</td>
                  <td>English</td>
                  <td><input type="text" name="English" id="English" required=""></td>
                 
               </tr>
               <tr>
                  <td>03</td>
                  <td>Math</td>
                  <td><input type="text" name="Math" id="Math" required=""></td>
                  
               </tr>
               <tr>
                  <td>04</td>
                  <td>Science</td>
                  <td><input type="text" name="Science" id="Science" required=""></td>
               </tr>
               <tr>
                  <td>05</td>
                  <td>Social Science</td>
                  <td><input type="text" name="Social" id="Social" required=""></td>
                  
               </tr>
               <tr>
                  <td>06</td>
                  <td>Sanskrit</td>
                  <td><input type="text" name="Sanskrit" id="Sanskrit" required=""></td>
               </tr>
            </table>
            <table>
            	<tr>
               	<td><input type="button" value="submit"  onclick="submit_test_result()" id="button"></td>
               </tr>
            </table>
            </div>
         
      </form>
      <p id="p"></p>
</div>
</div>

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
	
	<table style="border:1px solid blue; width: 90%; height: 130px; text-align: center; border-collapse: collapse; border-color: blue;background-color: white; margin: 40px 40px;">
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
                        if ($result['MONTH']=='JULY'){$b1="success";}
                        if (strtoupper($result['MONTH'])=='AUGUST'){$b2="success";}
                        if (strtoupper($result['MONTH'])=='OCTOBER'){$b3="success";}
                        if (strtoupper($result['MONTH'])=='NOVEMBER'){$b4="success";}
                        if (strtoupper($result['MONTH'])=='JANUARY'){$b5="success";}
                        if (strtoupper($result['MONTH'])=='FEBUARY'){$b6="success";}
                      
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
	 echo '</table>
</div>
</DIV>
<!-- TEST RESULT DECLARE HERE  -->

<div id="TEST_EXAMINATION_RESULT_DECLARE">
	<DIV style="border:1px solid blue; width: 70%; text-align: center; border-bottom: none; background-color: blue;color: white; margin: 150px 190px;"> TEST  DECLARE EXAMINATION RESULT</DIV>
<DIV style="border:1px solid blue;  width: 70%; height: 220px;  margin: -150px 190px; background-color: white;"> 
	
	<table style="border:1px solid blue; width: 90%; height: 130px; text-align: center; border-collapse: collapse; border-color: blue;background-color: white; margin: 40px 40px;">
		<tr style="border:1px solid blue; color: white; background-color: rgba(0,0,0,0.9);">
			<td style="border:1px solid blue;">EXAMINATION NAME</td>
			<td style="border:1px solid blue;">DECLARE</td>
		</tr>';
          if ($b1=="success") {
          	# code...
          
	    echo '<tr>	
			<form method="post" id="TEST_EXAMINATION_RESULT_DECLAREING">
					<input type="hidden" style="position: absolute;" name="Class" value="'.$class.'">
				<input type="hidden" name="MONTH" value="july" style="position: absolute;">
				<input type="hidden" name="Totalmarksexam" value="10" style="position: absolute;">
				<td style="border:1px solid blue;">
					JULY TEST
				</td>
				<td style="border:1px solid blue;">
					<input type="button" id="TEST_EXAMINATION_button_data"  onclick="TEST_EXAMINATION_RESULT_DEC()" value="Declare">
				</td>
			</form>
           </tr>';}
            if ($b2=="success") {
         
	    echo' 
           <tr>	
			<form method="post" id="july_TEST_EXAMINATION_RESULT_DECLAREING">
					<input type="hidden" style="position: absolute;" name="Class" value="'.$class.'">
				<input type="hidden" name="MONTH" value="AUGUST" style="position: absolute;">
				<input type="hidden" name="Totalmarksexam" value="10" style="position: absolute;">
				<td style="border:1px solid blue;">
					AUGUST TEST
				</td>
				<td style="border:1px solid blue;">
					<input type="button" id="july_TEST_EXAMINATION_button_data"  onclick="july_TEST_EXAMINATION_RESULT_DEC()" value="Declare">
				</td>
			</form>
           </td>
	    </tr>';}
	     if ($b3=="success") {
       
	    echo' 
           <tr>	
			<form method="post" id="october_TEST_EXAMINATION_RESULT_DECLAREING">
					<input type="hidden" style="position: absolute;" name="Class" value="'.$class.'">
				<input type="hidden" name="MONTH" value="OCTOBER" style="position: absolute;">
				<input type="hidden" name="Totalmarksexam" value="10" style="position: absolute;">
				<td style="border:1px solid blue;">
					OCTOBER TEST
				</td>
				<td style="border:1px solid blue;">
					<input type="button" id="october_TEST_EXAMINATION_button_data"  onclick="october_TEST_EXAMINATION_RESULT_DEC()" value="Declare">
				</td>
			</form>
           </td>
	    </tr>';}
	     if ($b4=="success") {
        
	    echo' 
           <tr>	
			<form method="post" id="nov_TEST_EXAMINATION_RESULT_DECLAREING">
					<input type="hidden" style="position: absolute;" name="Class" value="'.$class.'">
				<input type="hidden" name="MONTH" value="NOVEMBER" style="position: absolute;">
				<input type="hidden" name="Totalmarksexam" value="10" style="position: absolute;">
				<td style="border:1px solid blue;">
					NOVEMBER TEST
				</td>
				<td style="border:1px solid blue;">
				<input type="button" id="nov_TEST_EXAMINATION_button_data"  onclick="nov_TEST_EXAMINATION_RESULT_DEC()" value="Declare">
				</td>
			</form>
           </td>
	    </tr>';}
	     if ($b5=="success") {
        
	    echo' 
           <tr>	
			<form method="post" id="jan_TEST_EXAMINATION_RESULT_DECLAREING">
				<input type="hidden" style="position: absolute;" name="Class" value="'.$class.'">
				<input type="hidden" name="MONTH" value="JANUARY" style="position: absolute;">
				<input type="hidden" name="Totalmarksexam" value="10" style="position: absolute;">
				<td style="border:1px solid blue;">
					JANUARY TEST
				</td>
				<td style="border:1px solid blue;">
				<input type="button" id="jan_TEST_EXAMINATION_button_data"  onclick="jan_TEST_EXAMINATION_RESULT_DEC()" value="Declare">
				</td>
			</form>
           </td>
	    </tr>';}
	     if ($b6=="success") {
        
	    echo' 
           <tr>	
			<form method="post" id="feb_TEST_EXAMINATION_RESULT_DECLAREING">
					<input type="hidden" style="position: absolute;" name="Class" value="'.$class.'">
				<input type="hidden" name="MONTH" value="FEBUARY" style="position: absolute;">
				<input type="hidden" name="Totalmarksexam" value="10" style="position: absolute;">
				<td style="border:1px solid blue;">
					FEBUARY TEST
				</td>
				<td style="border:1px solid blue;">
				<input type="button" id="feb_TEST_EXAMINATION_button_data"  onclick="feb_TEST_EXAMINATION_RESULT_DEC()" value="Declare">
				</td>
			</form>
           </td>
	    </tr>
	</table>
</div>
</DIV>';
}
?>

<!-- here student marks in month and other examination name -->
<script type="text/javascript">
function logout(){
	jQuery.ajax({
		url:'logout.php',
		success:function(data){
			window.location.href='Teacher';
		}
	});
}
	function submit_result(){
		var frmCaptcha = document.getElementById("Hindi");

           if (frmCaptcha.value==="") {               
               frmCaptcha.focus();
               return false;
           } else {
               jQuery.ajax({
               url:'default.php',
               type:'post',
               data:jQuery('#frmCaptcha').serialize(),
               success:function(data){
                  //document.getElementById('frmCaptcha').reset();
                   alert(data);
                   //$("#p").html(data);
               }
           });
           }
         }
        
         /*STUDENTS ROLL NUMBER DECLARE HERE */
      function update_roll_number(){
               jQuery.ajax({
               url:'reciving.php',
               type:'post',
               data:jQuery('#RollNumbers').serialize(),
               success:function(data){
                  //document.getElementById('frmCaptcha').reset();
                   alert(data);
                   //$("#p").html(data);
               }
           });
           }
         

         function submit_test_result(){
		var frmCaptcha = document.getElementById("Hindimar");
           if (frmCaptcha.value==="") {
              frmCaptcha.focus();
               return false;
           } else {
               jQuery.ajax({
               url:'default.php',
               type:'post',
               data:jQuery('#test_Exame_result').serialize(),
               success:function(data){
                  //document.getElementById('frmCaptcha').reset();
                   alert(data);
                   //$("#p").html(data);
               }
           });
           }
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
	function Submit_month(){
		jQuery.ajax({
			url:"Test_data.php",
			type : "post",
			data: jQuery("#form").serialize(),
			success:function(data){
				$("#Test_Result_data").html(data);
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
	function TEST_EXAMINATION_RESULT_DEC(){
		jQuery.ajax({
			url:"ResultDeclare.php",
			type:"post",
			data:jQuery("#TEST_EXAMINATION_RESULT_DECLAREING").serialize(),
			success:function(data){
				alert(data);
				if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}
			}
		});
	}
	
	function july_TEST_EXAMINATION_RESULT_DEC(){
		jQuery.ajax({
			url:"ResultDeclare.php",
			type:"post",
			data:jQuery("#july_TEST_EXAMINATION_RESULT_DECLAREING").serialize(),
			success:function(data){
				alert(data);
				/*if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}*/
			}
		});
	}
	function october_TEST_EXAMINATION_RESULT_DEC(){
		jQuery.ajax({
			url:"ResultDeclare.php",
			type:"post",
			data:jQuery("#october_TEST_EXAMINATION_RESULT_DECLAREING").serialize(),
			success:function(data){
				alert(data);
				/*if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}*/
			}
		});
	}
	function nov_TEST_EXAMINATION_RESULT_DEC(){
		jQuery.ajax({
			url:"ResultDeclare.php",
			type:"post",
			data:jQuery("#nov_TEST_EXAMINATION_RESULT_DECLAREING").serialize(),
			success:function(data){
				alert(data);/*
				if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}*/
			}
		});
	}
	function jan_TEST_EXAMINATION_RESULT_DEC(){
		jQuery.ajax({
			url:"ResultDeclare.php",
			type:"post",
			data:jQuery("#jan_TEST_EXAMINATION_RESULT_DECLAREING").serialize(),
			success:function(data){
				alert(data);/*
				if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}*/
			}
		});
	}
	function feb_TEST_EXAMINATION_RESULT_DEC(){
		jQuery.ajax({
			url:"ResultDeclare.php",
			type:"post",
			data:jQuery("#feb_TEST_EXAMINATION_RESULT_DECLAREING").serialize(),
			success:function(data){
				alert(data);/*
				if (data=='success') {
					$('#button_data').attr("disabled", true);	
				}*/
			}
		});
	}
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