<!DOCTYPE html>
<html>
  <?php 
    session_start();
        session_id();

    require 'connection.php';
    $name=$_SESSION['user'];
    $query_Registation=mysqli_query($Database,"select *from student where Email ='$name'");
    
     $Registation_array=mysqli_fetch_array($query_Registation);
     $_SESSION['Registation_number']=$Registation_array['Registation'];
      if (isset($name)==true) {
      // code...
    
    ?>
  <head>
    <title>Student</title>
    <link rel="shortcut icon" type="image/jpg" href="shishu.png">
    <link rel="stylesheet" type="text/css" href="newFrame.css">
    <?php
      require 'link.php';
      
      ?>
    <style>
      /* Style the buttons */
      body{
   
      }
       #submit{
       border: none; 
      background-color:white;
      font-family: 'Lora', serif;
      font-size: 17px; 
     
      cursor: pointer; 
      text-align: center;
      z-index: 1;
      }
      #submit:hover{
     
      background-color: rgb(0,0,0,0.19);
      width: 100%;
      z-index: 1;
      transition: 0.5s;
      height: 200px;
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
      height: 1.9rem;
      padding-top:3px;
      font-size: 25px;
      background-color: rgb(0, 128, 255);
      color: white;
      font-weight: bold;
      }
      .EXAMINATION_RESULT_TOP{
        width: 100%;
      }
      #th{
      background:   rgb(0, 255, 255);
      }
      .link_data  li ol{
        position: relative;
      margin: 10px 10px;
      padding: 5px 5px;
      color: red;
      height: 25px;
      left: 170px;
      background-color: white;
              border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 0px 30px 0px rgba(0,0,0,0.1);

      text-decoration: none;
      }
      .link_data  li ol a{
        padding: 6px 12px;
        text-decoration: none;
        z-index: 1;
      }
      .link_data li ol a:hover{
         height: 27px;
        z-index: 1;
        color: red;
        text-decoration: none;
        position: relative;
         height: 27px;
        z-index: 1;
      }
     
      .center{
      border:1px solid rgba(0, 0, 0, 0.1);
      width: 90%;
      height: 20rem; 
      left: 30px;
      position: relative;
      background-color: white;
      text-align: center;
      
            box-shadow: 0 0px 30px 0px rgba(0,0,0,0.1);

      }
      li{
        width: all;
        display: flex;
        text-decoration: none;
       position: relative;
      
      }
    </style>
  </head>
  <body>
    <h1>
      <div style="font-size: 55px;">SARASWATI SHISHU MANDIR</div>
      NOWGONG CHHATARPUR (MP)
    </h1>
    <div class="front">
      <div class="links">
        <img src="shishu.png" class="shishu_img">
      </div>
    </div>
    <div class="Center">
      <!--  <div id="disable-link" style="position: absolute; left: 180px; top: 90px;"></div> -->
      <div class="top">
        <div id="FirstName">                          
          <?php                                
            $con = mysqli_connect("localhost","root",'');
            mysqli_select_db($con,"school");
            $query="select *from Student where Email='$name'";
            $result= mysqli_query($con,$query);
            while($row=mysqli_fetch_array($result)){                             
            echo $row["FirstName"]." ".$row['LastName'];
            ?>
        </div>
        <div id="student_image">
          <?php
            echo'<img  src="photo/'.$row['Photo'].'" width="50px" height="50px"';
             }       
            ?>
        </div>
        <div id="Logout">
          <a style="outline: none border-style: none;display: block;color: red; outline:none; text-decoration: none; background: white;" href="Logout" > Logout</a> 
        </div>
      </div>
      <div class="div1">
        <table>
          <tr>
            <td>
              <a href="Return">Profile</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="IdCard">Id Card</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="Admit_Card">Admit Card</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="ResultStore">Result</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="Payment">Pay Fee</a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="Transaction">Transaction</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
   <?php
  
  require 'connection.php';
       $Email =mysqli_real_escape_string($Database,$_SESSION['user']);
       $query = "select *from student where Email='$Email'";
       $result= mysqli_query($Database,$query);
       $row=mysqli_fetch_array($result);
       $CV=$row['RollNumber'];
       $fetchData6 = mysqli_query($Database,"select *from student s join examination e on s.RollNumber = e.RollNumber");
       $V=1;
  ?>
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

      var header = document.getElementById("myDIV");
       var btns = header.getElementsByClassName("butt");
       for(var i=0;i<btns.length;i++){
         btns[i].addEventListener("click",function(){
           var current=document.getElementsByClassName("active");
               current[0].className=current[0].className.replace(" active"," ");
           this.className+=" active";
         });
       
        }
    </script>
    <div class="link_data" id="myDIV">
      <li>
        <ol>
          <a href="javascript:void(0)"    onclick="Examination_result_method()">Examination Result</a>
        </ol>
        <ol>
          <a href="javascript:void(0)"   onclick="Examination_month_result_method()">Examination Month Result</a>
        </ol>
      </li>
    </div>
    <div class="center">
      <div id="Examination_result" >
        <table id="marksheetData" style="width: 100%; height: all;">
          <div class="EXAMINATION_RESULT_TOP" >EXAMINATION RESULT</div>
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
        $Email =$_SESSION['user'];
        $query = "select *from student where Email='$Email'";
        $result= mysqli_query($Database,$query);
        $row=mysqli_fetch_array($result);
        $CV=$row['RollNumber'];
        
        //$fetchData  = mysqli_query($oDatabase,"select *from student s join examination e on s.Registation = e.Registaton");
        $fetchData  = mysqli_query($Database,"select *from student s join examination e on s.RollNumber = e.RollNumber");
        
        $V=1;
        ?>
      <div id="Examination_month_result">
        <table id="marksheetData" style="width: 100%; height: all;">
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
</div>
    
    <!-- <form  target="_blank" action="Testmarksheet"  method="post" onsubmit="return process()">
      <input type="hidden" name="Registation" value="'.$CV.'">
      <input type="hidden" name="MONTH" value="'.$fetchresult['MONTH'].'">
        <button id="submit" align="right" style="" >OPEN</button>
           </form> -->

   <div  class="copy_right">
      <div class="copy_right_information"></div>
      Devloped and Desigen by Student's GOVT Polytechnic College Nowgong 2021 
    </div>
    <?php }
      else{
        header('location:../');
      }?>
    
</body>
</html>