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
 #hidden_value,#Roll_Number_stundent,#Admit_card,#EXAMINATION_RESULT_DECLARE,#TEST_EXAMINATION_RESULT_DECLARE{
	visibility: hidden;
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
#TEST_EXAMINATION_RESULT_CREATE{
	visibility: hidden;
}
#EXAMINATION_RESULT_CREATE_PANEL{
	visibility: visible;
}
#trdata{
	border-bottom: 1px solid black; 
}
.Coloumn{
	overflow-y: hidden;
	overflow-x: hidden;
	position: fixed;
	background-color: white;
	height:all;
	width: 510px;
	margin:-10 0;
	overflow:hidden; 
    top: 75px;
    left:40.4%;
    font-size: 15px;
    box-sizing: border-box;
			box-shadow: 0 0px 30px 0 rgba(0,0,0,0.1);
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
	border: 1px solid rgba(0, 0, 0, 0.1);
	font-size: 20px;
	margin: -40px 40%;
	position: absolute;
	color: black;
	background-color: white;
}
.Coloumn #button:hover{
	color: red;
	background-color: darkcyan;
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
             	  <option value="Quarterly">QUARTERLY</option>
				  <option value="Quarterly">QUARTERLY</option>
				  <option value="halfyear">HALFYEALY</option>
				  <option value="Yearly">YEARLY</option>
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


}
?>
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
<!-- EXAMINTION RESULT DECLARE HERE -->

<?php
require 'connection.php';
        $fetch_query    = mysqli_query($Database,"select *from examination");          
?>
<!-- here student marks in month and other examination name -->
<script type="text/javascript">
/*EXAMINAION RESULT DECLARE HERE METHOD DELARE */
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
                   alert(data);
               }
           });
        }
    }
</script>

</body>
</html>
<?php
 }

    else{
      ?>
         <script language="javascript">
             window.location.href = "../";
        </script>
<?php
     }
?>