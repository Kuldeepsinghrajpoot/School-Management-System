</html>
<?php
session_start();
session_regenerate_id();
require 'connection.php';
     $Email =mysqli_real_escape_string($Database,$_POST['username']);
     $query = "select *from student where Email='$Email'";
     $result= mysqli_query($Database,$query);
     $row=mysqli_fetch_array($result);
     $CV=$row['RollNumber'];
     $fetchData6 = mysqli_query($Database,"select *from student s join examination e on s.RollNumber = e.RollNumber");
     $V=1;
?>
<!DOCTYPE html>
<html>
<head>
   <title>Marks</title>
   
  <style>
    body{
      font-family: 'Lora', serif;
      
    }
     #submit{
      width: 100%;height: 100%;
      border: none; 
      background-color:white;
      font-family: 'Lora', serif;
      font-size: 17px; 
      margin: 0; 
      padding: 0; 
      cursor: pointer; 
      text-align: center;
      z-index: 1;
    }
    #submit:hover{
      margin: 0;
      padding: 0;
      color: red;
      background-color: rgb(0,0,0,0.19);
      width: 100%;
      z-index: 1;
      transition: 0.5s;
      height: 100%;
       }
       #Examination_result{
        visibility: visible;
       }
       #Examination_month_result{
        visibility: hidden;
       }
       #Examination_result,#Examination_month_result{
        position: absolute;
       }
      
       .EXAMINATION_RESULT_TOP,.EXAMINATION_RESULT_TOP_SECOND{
        border-bottom:1px solid rgb(0, 128, 255);
        width: 40rem;
        height: 1.9rem;
        padding-top:3px;

        font-size: 25px;
        background-color: rgb(0, 128, 255);
        color: white;
        font-weight: bold;
       }
       .EXAMINATION_RESULT_TOP{
             
       }
      #th{
        background:   rgb(0, 255, 255);

       }
       .link_data{
        width: 30rem;
         margin: 10px 170px;padding: 0 -10px;
        color: red;
        display: flex;
       }
    .link_data  #href {
         width: 28rem;
         border:1px solid blue;
         padding: 10px 10px;
         margin: 0px  10px;
         top: -10px;
         color: black;
         text-decoration: none;
         font-size: 16px;
         font-weight: bold;
         position: relative; 
       }
        .center{
        border:1px solid rgb(0, 128, 255);
        width: 40rem;
        height: 20rem; 
        margin: 0px 50px;
        text-align: center;
       }
     .link_data #second_href{
          width: 28rem;
         border:1px solid blue;
         padding: 10px 10px;
         margin: 0px  10px;
         top: -10px;
         color: black; 
         text-decoration: none;
         font-size: 16px;
         font-weight: bold;
         position: relative;
     }

     /*.active{
        background-color: blue;
        color: white;
        box-shadow: 0 10px 10px rgba(0,0,0,0.20);
        transition: 0.4s;
}*/
     #second_href:hover {
      background-color: blue;
      color: white;
       box-shadow: 0 10px 10px rgba(0,0,0,0.20);
       transition: 0.4s;
     }
     #href:hover {
      background-color: blue;
      color: white;
       box-shadow: 0 10px 10px rgba(0,0,0,0.20);
       transition: 0.4s;
     }
     /*.links #second_href,.links #href{
       position: relative;
        padding: 0px -10px;
        height: 20px;
     }*/
</style>
<script type="text/javascript">
 function Examination_result_method(){
     var Examination_result= document.getElementById('Examination_result');
     Examination_result.style.visibility="visible";
     var Examination_month_result=document.getElementById('Examination_month_result');
     Examination_month_result.style.visibility="hidden";
  } 
  function Examination_month_result_method(){
     var Examination_month_result=document.getElementById('Examination_month_result');
     Examination_month_result.style.visibility="visible";
     var Examination_result= document.getElementById('Examination_result');
     Examination_result.style.visibility="hidden";
  
  }
 /*var header = document.getElementById("myDIV");
  var btns = header.getElementsByClassName("butt");
  for(var i=0;i<btns.length;i++){
    btns[i].addEventListener("click",function(){
      var current=document.getElementsByClassName("active");
          current[0].className=current[0].className.replace("active","");
      this.className+=" active";
    });
  
   }*/
</script>
</head>
<body>
   
  <div class="link_data" id="myDIV">
        <div><a href="javascript:void(0)" id="href" class="butt" onclick="Examination_result_method()">Examination Result</a></div>
        <div><a href="javascript:void(0)" id="second_href" class="butt" onclick="Examination_month_result_method()">Examination Month Result</a></div>
  </div>

    
     <div class="center">
    <div id="Examination_result">
  <table id="marksheetData" style="margin: 30px 10px; width: 80%;">
    <div class="EXAMINATION_RESULT_TOP">EXAMINATION RESULT</div>   
   <tr id="tr">
			<td id="th">SN</td>
			<td id="th">Exame Name</td>
			<td id="th">Total/600</td>
            <td id="th">Remark</td>
            <td id="th">Percentage</td>
            <td id="th">Marksheet</td> 
  	 </tr>

      <?php  $l=1;
      /* here making registaion and send data one file to another menas send data in marksheet data of registation*/
    // echo $row['Registation'];
      while ($fetchresult6=mysqli_fetch_array($fetchData6)) {
      	if(($fetchresult6['RollNumber']==$CV)&&($fetchresult6['Totalmarksexam']=='600')&&($fetchresult6['Declare_Result']=='yes')){
   	echo 
      '<tr id="tr"> 
      <td id="td"> '.$l++.'</td>
      <td id="td">'.strtoupper($fetchresult6['MONTH']).'</td>
      <td id="td">'.$fetchresult6['Total'].'</td>
            <td id="td">'.$fetchresult6['Result'].'</td>            
            <td id="td">'.$fetchresult6['Percentage'].'</td>
            <td id="td">
                 <form  target="_blank" action="marksheet" method="post" onsubmit="return process()">
          <input type="hidden" name="Registation" value="'.$CV.'">
          <input type="hidden" name="MONTH" value="'.$fetchresult6['MONTH'].'">
            <button id="submit" align="right" style="" >OPEN</button>
               </form>
         </td>
      </tr>';
    }
    }?>
    </table>
  </div>
<?php require 'connection.php';
     $Email =mysqli_real_escape_string($Database,$_POST['username']);
     $query = "select *from student where Email='$Email'";
     $result= mysqli_query($Database,$query);
     $row=mysqli_fetch_array($result);
     $CV=$row['RollNumber'];
     
     //$fetchData  = mysqli_query($oDatabase,"select *from student s join examination e on s.Registation = e.Registaton");
     $fetchData  = mysqli_query($Database,"select *from student s join examination e on s.RollNumber = e.RollNumber");

     $V=1;
?>
<div id="Examination_month_result">
  <table id="marksheetData" style="margin: 30px 10px; width: 80%;">
    <div class="EXAMINATION_RESULT_TOP_SECOND">MONTHLY EXAMINATION RESULT</div>   
   <tr id="tr">
			<td id="th">SN</td>
			<td id="th">Exame Name</td>
			<td id="th">Total/60</td>
            <td id="th">Remark</td>
            <td id="th">Marksheet</td> 
  	 </tr>
      <?php  $l=1;
      $_REQUEST['user']=$Email;
      while ($fetchresult=mysqli_fetch_array($fetchData)) {
      	if(($fetchresult['RollNumber']==$CV)&&($fetchresult['Totalmarksexam']=='10')&&($fetchresult['Declare_Result']=='yes')){
           	echo 
      '<tr id="tr"> 
      <td id="td"> '.$l++.'</td>
      <td id="td">'.strtoupper($fetchresult['MONTH']).'</td>
      <td id="td">'.$fetchresult['Total'].'</td>
            <td id="td">'.$fetchresult['Result'].'</td>            
            <td id="td">
              <a href="TestMarksheet?Registation='.md5($CV).'$'.md5($fetchresult['MONTH']).'" target="blank"><button id="submit" align="right" style="" >OPEN</button></a>
         </td>
      </tr>';}
      } ?>
    </table>
  </div>
</div>

  <!-- <form  target="_blank" action="Testmarksheet"  method="post" onsubmit="return process()">
          <input type="hidden" name="Registation" value="'.$CV.'">
          <input type="hidden" name="MONTH" value="'.$fetchresult['MONTH'].'">
            <button id="submit" align="right" style="" >OPEN</button>
               </form> -->
</body>
</html>

