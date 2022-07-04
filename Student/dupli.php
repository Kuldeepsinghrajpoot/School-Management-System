<?php 
    require 'connection.php';
     $sql = "select *from student";
     $result = mysqli_query($Database,$sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Students Records</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php require 'link.php';?>
	<style type="text/css">
		
body{
	font-family: 'Lora', serif;
	background-color:rgba(0,0,0,0.1);
	color: black;
	
}
		.menu_left .h1{
			font-family: 'Lora', serif;
			width: 100%;
			margin: -12px -9px;
			color: black;
			background-color:white;
			box-sizing: border-box;
			box-shadow: 0 5px 20px rgba(0,0,0,0.1);
			border:1px solid #BEBEBE;
			position: fixed;
		}
		.menu_left .Contain{
			margin: 73px -9px;
			height: 54rem;
			width: 13rem;
			color: red;
			background-color:navy;
			position: absolute;
			box-sizing: border-box;
			box-shadow: 10px 0px 20px rgba(0,0,0,0.1);
		}
		.menu_left .Contain li,ol{
			color: red;
			outline: none;
			list-style: none;
			margin: 10px 0;
			padding: 10px 0px;
			text-decoration: none;
            position: relative;
			width: 140px;
			font-weight: bold;
			font-size: 22px;
			height: 20px;
		}
		a{
			color: white;
		}
		/* input{
			margin: -30px 55rem;
			position: absolute;
		}*/
a:hover{
color: black;
height: 35px;
width: 208px;
margin: 0px -50px;
background-color:red;
cursor:pointer; 
font-family: 'Lora', serif;
z-index:1;
		}
		
div #Information_Student{
	visibility: hidden;
	width: 49.3%;
	height: 90%;
	position: relative;
	overflow:hidden; 
    top: 75px;
    left:8.4%;
	overflow:hidden; 
    background-color: white;
    overflow-x: scroll;
}
 #Information_Students{
	visibility: hidden;
	width: 84.3%;
	max-height: 100%;
	position: absolute;
	margin:13.5px 6px;
    top: 8.10rem;
    left:10.2%;
    font-size: 20px;
}
#TEST_EXAMINATION_RESULT_CREATE{
	visibility: hidden;
	width: 84.3%;
	max-height: 100%;
	position: absolute;
	margin:-43.5px -80px;
    top: 3.2rem;
    left:15.2%;
    font-size: 20px;
}
 #Information_Student_Test_Marks,#hidden_value{
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
	height: 90%;
	position: relative;
	overflow:hidden; 
    top: 60px;
    left:12%;
    background-color: white;
    overflow-x: scroll;
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
	background-color: #F9F8F8;
	height: 530px;
	width: 510px;
	margin:auto;
	position: relative;
	overflow:hidden; 
    top: 75px;
    left:10.4%;
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
</style>
	<script type="text/javascript">
		
		function Test_Result(argument) {
			var Information = document.getElementById('Information_Students');
			Information.style.visibility="hidden";
			var Information = document.getElementById('Information_Student');
			Information.style.visibility="hidden";
			var Information_Student_Test_Marks = document.getElementById('Information_Student_Test_Marks');
			Information_Student_Test_Marks.style.visibility="visible";
			var Information = document.getElementById('Tests');
			Information.style.visibility="hidden";
			var Information = document.getElementById('hidden_value');
			Information.style.visibility="hidden";
			var Information = document.getElementById('EXAMINATION_RESULT_CREATE_PANEL');
			Information.style.visibility="hidden";
			var Information = document.getElementById('TEST_EXAMINATION_RESULT_CREATE');
			Information.style.visibility="hidden";
		}
		function Yearly_Result(){
			var Information = document.getElementById('Information_Students');
			Information.style.visibility="visible";
			var Information = document.getElementById('Information_Student');
			Information.style.visibility="hidden";
			var Information_Student_Test_Marks = document.getElementById('Information_Student_Test_Marks');
			Information_Student_Test_Marks.style.visibility="hidden";
			var Information = document.getElementById('Tests');
			Information.style.visibility="hidden";
			var Information = document.getElementById('hidden_value');
			Information.style.visibility="hidden";
			var Information = document.getElementById('EXAMINATION_RESULT_CREATE_PANEL');
			Information.style.visibility="hidden";
			var Information = document.getElementById('TEST_EXAMINATION_RESULT_CREATE');
			Information.style.visibility="hidden";
		}
		function TOP_TEN_STUDENTS(argument){
			var Information = document.getElementById('hidden_value');
			Information.style.visibility="visible";
			var Information = document.getElementById('Tests');
			Information.style.visibility="visible";
            var Information = document.getElementById('Information_Students');
			Information.style.visibility="hidden";
			var Information = document.getElementById('Information_Student');
			Information.style.visibility="hidden";
			var Information_Student_Test_Marks = document.getElementById('Information_Student_Test_Marks');
			Information_Student_Test_Marks.style.visibility="hidden";
			var Information = document.getElementById('EXAMINATION_RESULT_CREATE_PANEL');
			Information.style.visibility="hidden";
			var Information = document.getElementById('TEST_EXAMINATION_RESULT_CREATE');
			Information.style.visibility="hidden";
		}
		/*HERE HIDDEN FROM INFORMATION */
		function hidden_value_S(){
			var Information = document.getElementById('Tests');
			Information.style.visibility="hidden";
			var Information = document.getElementById('hidden_value');
			Information.style.visibility="hidden";
			var Information = document.getElementById('Information_Students');
			Information.style.visibility="hidden";
			var Information = document.getElementById('Information_Student');
			Information.style.visibility="hidden";
			var Information_Student_Test_Marks = document.getElementById('Information_Student_Test_Marks');
			Information_Student_Test_Marks.style.visibility="hidden";
			var Information = document.getElementById('Information_Student');
			Information.style.visibility="visible";
			var Information = document.getElementById('EXAMINATION_RESULT_CREATE_PANEL');
			Information.style.visibility="hidden";
			var Information = document.getElementById('EXAMINATION_RESULT_CREATE_PANEL');
			Information.style.visibility="hidden";
			var Information = document.getElementById('TEST_EXAMINATION_RESULT_CREATE');
			Information.style.visibility="hidden";
		}
		function STUDENT_EXAMINATION_RESULT_CREATE_PANEL(){
			var Information = document.getElementById('Tests');
			Information.style.visibility="hidden";
			var Information = document.getElementById('EXAMINATION_RESULT_CREATE_PANEL');
			Information.style.visibility="visible";
			var Information = document.getElementById('TEST_EXAMINATION_RESULT_CREATE');
			Information.style.visibility="hidden";
			var Information = document.getElementById('hidden_value');
			Information.style.visibility="hidden";
			var Information = document.getElementById('Information_Students');
			Information.style.visibility="hidden";
			var Information = document.getElementById('Information_Student');
			Information.style.visibility="hidden";
			var Information_Student_Test_Marks = document.getElementById('Information_Student_Test_Marks');
			Information_Student_Test_Marks.style.visibility="hidden";
			var Information = document.getElementById('Information_Student');
			Information.style.visibility="hidden";
			
		}
		function STUDENT_TEST_EXAMINATION_RESULT_CREATE_PANEL(){
			var Information = document.getElementById('TEST_EXAMINATION_RESULT_CREATE');
			Information.style.visibility="visible";
			var Information = document.getElementById('Tests');
			Information.style.visibility="hidden";
			var Information = document.getElementById('EXAMINATION_RESULT_CREATE_PANEL');
			Information.style.visibility="hidden";
			var Information = document.getElementById('hidden_value');
			Information.style.visibility="hidden";
			var Information = document.getElementById('Information_Students');
			Information.style.visibility="hidden";
			var Information = document.getElementById('Information_Student');
			Information.style.visibility="hidden";
			var Information_Student_Test_Marks = document.getElementById('Information_Student_Test_Marks');
			Information_Student_Test_Marks.style.visibility="hidden";
			var Information = document.getElementById('Information_Student');
			Information.style.visibility="hidden";
		}
	</script>
</head>
<body>
 <div class="search_bar" style="position: fixed;">
<div class="menu_left" style="position: fixed;">
	<div class="h1">
				<h3 style="color: black;">KULDEEP SINGH RAJPOOT CLASS 12A</h3>
				<div><input type="" name="" placeholder="Search"></div>
    </div>
	<div class="Contain" align="center" style="color: white;"> 
		<li style="color: white;">
			<ol>
			  	     <a href="javascript:void(0)" onclick="hidden_value_S()" > Information</a>
			   </ol>
			    <ol>
				     <a href="javascript:void(0)"> Fees</a>
			    </ol>	
				<ol >
					 <a href="javascript:void(0)" onclick="Test_Result()" >TestResult</a>
				</ol>
				<ol>
					 <a href="javascript:void(0)" onclick="Yearly_Result()">ExamResult</a>
				</ol>
			
		    	<ol>
					 <a href="javascript:void(0)" onclick="TOP_TEN_STUDENTS()">TOP 10</a>
				</ol>
				<ol >
					 <a href="javascript:void(0)" onclick="STUDENT_TEST_EXAMINATION_RESULT_CREATE_PANEL()">TestResultCreate </a>
				</ol>
				<ol>
					 <a href="javascript:void(0)" onclick="STUDENT_EXAMINATION_RESULT_CREATE_PANEL()">ExamResultCreate</a>
				</ol>
			
		    	<ol>
					<a href="javascript:void(0)" onclick="TOP_TEN_STUDENTS()">Declare Result</a>
				</ol>
				
		</li>
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
			<th>TC</th>
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
		<?php $a=1; while ($row=mysqli_fetch_array($result)) {
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
			<td>Y</td>
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
</div>
</div>
<div id="Information_Students">
	<form  method="post" id="student_exam">
	<table>
		<tbody>
			<select id="MONTH" name="month">
				  <option value="Quterly">Quterly</option>
				  <option value="HALFYEALY">HALFYEALY</option>
				  <option value="YEARLY">YEARLY</option>

			    </select>
			    <button type="button" onclick="Submit_month_exam()" >Search</button>
		</tbody>
	</table>
	<div id="Exam"></div>
	</form>
	</div>
       <div id="Information_Student_Test_Marks" style="color: black;">
<form method="post" id="form">	
	<table>
		<tbody>
			<select id="month" name="month">
				  <option value="july">july</option>
				  <option value="August2021">August2021</option>
				  <option value="September">September</option>
				  <option value="October">October</option>
			</select>
				<button type="button" onclick="Submit_month()">Search</button>
		</tbody>	
	</table>
	<div id="Test_Result_data"></div>
</form>	
</div>
</div>

<!-- Top ten students name and his percentage and fatch data another page  -->
<div  style="position: absolute;" id="hidden_value">
	
<form  method="post" id="top_10_student">
	<table>
		<tbody>
			<select id="MONTH" name="MONTH">
				  <option value="Quterly">Quterly</option>
				  <option value="HALFYEALY">HALFYEALY</option>
				  <option value="YEARLY">YEARLY</option>

			    </select>
			    <button type="button" onclick="top_10s()" >Search</button>
		</tbody>
				
			
	</table>
	<div id="Tests"></div>
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
         <table class="tabledata">
         	<tr>
            <td>Roll Number</td>
            <td><input type="text" name="Roll" id="Rolldata" required="" >
           </td>    
            </tr>
            <tr>
            <td>Exame Name</td>
            <td><input type="text" name="MONTH" id="Studentdata"  re ></td>
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
<!-- here student marks in month and other examination name -->
<script type="text/javascript">
	/*jQuery('#frmCaptcha').on('submit',function(e){
	var Hindi            = $("#Hindi").val();
	var Sanskrit         = $("#Sanskrit").val();
	var Social           = $("#Social").val();
	var Math             = $("#Math").val();
	var English          = $("#English").val();
	var Science          = $("#Science").val();
	var SanskritPratical = $("#SanskritPratical").val();
	var SocialPratical   = $("#SocialPratical").val();
	var SciencePratical  = $("#SciencePratical").val();
	var HindiPratical    = $("#HindiPratical").val();
	var EnglishPratical  = $("#EnglishPratical").val();
	var MathPratical     = $("#MathPratical").val();
	

   e.preventDefault();
});*/
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
	/* HERE STUDENT TOP NAME IN CLASS*/
	
</script>
</body>
</html>