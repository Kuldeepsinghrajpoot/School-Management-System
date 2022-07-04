<?php 
   session_start();
   session_id();
   
   
    if ($_SESSION['username']==true) {
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Students Records</title>
      <link rel="shortcut icon" type="image/jpg" href="shishu.png">
      	     <link rel="stylesheet" type="text/css" href="link.css">

      <link rel="stylesheet" type="text/css" href="styleone.css">
      <?php require 'link.php';?>
      <style type="text/css">
      body{
	font-family: 'Lora', serif;
	        background-color: #ECF0F1;

	color: black;
	
}
#img1{
	position: relative;
	top: 2px;
	width: 50px;
	height: 50px;
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
	text-align: center;
	border-bottom: none; 
	background-color: blue;
	color: white;
	margin: 150px 190px;
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
            <div class="Contain" align="center" style="color: white;">
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

      <!-- Registrarion -->
      <div id="Admit_card">
         <div class="Admit_card_info_exam"> Registration Form</div>
         <div class="Admit_card_info">
            <table>
               <tr>
                  <?php  
                     $Database = mysqli_connect("localhost","root","");
                     mysqli_select_db($Database,"school");
                     if ($Database===false) {
                     die("could not connect to the Database".mysqli_connection_error());
                     }
                                     $query_array=mysqli_query($Database,'select *from registration');
                     
                                     $fatching=mysqli_fetch_array($query_array);
                     
                     ?>
                  <td>
                     <div style="font-size: 1.4rem;">Registration Line has&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?PHP echo strtolower($fatching['Registration_status']).'ed';	?></div>
                  </td>
                  <td>
                     <div class="container">
                        <?php 
                           if ($fatching['Registration_status']=='OPEN') {
                           	echo "<input type='checkbox' name='a' value='".$fatching['Registration_status']."'' id='checkbox' checked>";
                           }
                           else{
                           	echo "<input type='checkbox' name='a' value='".$fatching['Registration_status']."'' id='checkbox'>";
                           }
                           ?>
                        <label for="checkbox" ></label>
                     </div>
                  </td>
               </tr>
            </table>
         </div>
      </div>
      <!--  -->
      <!-- here student marks in month and other examination name -->
      <script type="text/javascript">
         var a = document.querySelector('#checkbox');
            a.addEventListener('click',function(e){
            var ab=e.target.value;
                     
         if(ab=='CLOS'){
         
          ab=e.target.value='OPEN';
                     jQuery.ajax({
            url:'Registration_line_open.php',
            type:'post',
            data:{data:ab},
             success:function(data){
         	 alert(data);
         	 	window.location.href='';
         	}
         });
         document.getElementById('checkbox').value='OPEN';
         			
         }
         else if(ab=='OPEN'){
          ab=e.target.value='CLOS';
            jQuery.ajax({
             url:'Registration_line_open.php',
            type:'post',
            data:{data:ab},
             success:function(data){
         	 alert(data);
         	 	window.location.href='';
         	}
         });
         document.getElementById('checkbox').value='CLOS';
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