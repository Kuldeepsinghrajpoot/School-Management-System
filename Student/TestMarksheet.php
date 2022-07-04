<?php
   include'connection.php';
   if (isset($_GET['Registation'])) {
           $api = $_GET['Registation'];
          $Registation= explode('$',$api,2);
       // $Registation=  mysqli_escape_string($Database,$_GET['Registation']);

               $MONTH=$Registation[1];
                $Registation=$Registation[0];

        $query= "select *from student s join examination e on s.RollNumber = e.RollNumber";
        $result= mysqli_query($Database,$query);
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Report card of students</title>
      <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="Marksheet.css">
           <link rel="shortcut icon" type="image/jpg" href="shishu.png">

      <style>
         body{
            font-family: "Lora", serif;
         }
      </style>
       <script>
            setTimeout(function(){ 

                window.close();

                 }, 3000);
            window.print();
            
  
      </script>
   </head>
   <body>
      </div>
      </div>
      <div id="contains">
         
         <fieldset>
            <FIELDSET align="center" id="fieldset">
               <img src="shishu.png" id="img">
               SARASWATI SHISHU MANDIR NOWGONG,
               CHHATARPUR MADHYA PRADESH
            </FIELDSET>
            <div>
               <center>
                  <div class="STATUS">STUDENT'S DETAILS</div>
               </center>
               <table id="tablePhoto">
                 <?php
                     while ($row2=mysqli_fetch_array($result)) {
                       if((md5($row2['RollNumber'])==$Registation)&&(md5($row2['MONTH'])==$MONTH)){
                     echo '<center><img id="Photo" src="photo/'.$row2['Photo'].'"alt="Image"/></center>'; 
                          ?>
               </table>
               <table id="table2">
                  
                  <tr id="td">
                     <TD id="td">ROLL NUMBER</TD>
                     <td id="td"><?php echo $row2["RollNumber"]?></td>
                  </tr>
                  <tr id="td">
                     <TD id="td">CLASS</TD>
                     <td id="td"><?php echo $row2["Class"];?></td>
                  <tr id="td">
                     <TD id="td">STUDENT'S NAME</TD>
                     <td id="td"><?php echo $row2["FirstName"]." ". $row2['LastName']?></td>
                  </tr>
                  <tr id="td">
                     <TD id="td">FATHER'S NAME</TD>
                     <td id="td"><?php echo $row2["FatherName"];?></td>
                  </tr>
                  <tr id="td">
                     <TD id="td">MOTHER'S NAME</TD>
                     <td id="td"><?php echo $row2["MotherName"];?></td>
                  </tr>
                  <tr>
                     <td id="td">EXAMINATION</td>
                     <td id="td"><?php echo strtoupper($row2["MONTH"]);?></td>
                  </tr>
               </table>
               <center>
                  <div class="STATUS">STUDENT'S MARKS</div>
               </center>
               <table id="table" style="width: 100%;">
                  <tr>
                     <td>SN</td>
                     <td>SUBJECT'S NAME</td>
                     <td>MAX MARKS</td>
                     <td>MIN THEORY</td>
                     <center><img src="shishu.png" id="img1"></center>
                     <td align="center">OBTAINS MARKS</td>
                     <td>REMARK</td>
                  </tr>
                  </tr>
                  
                  <tr>
                     <td>01</td>
                     <td align="left">SNSAKRIT</td>
                     <td>10</td>
                     <td>4</td>
                     <td><?php echo $row2['Sansakrit'];?></td>
                     <td><?php echo $row2['SanskritResult'];?></td>
                  </tr>
                  <tr>
                     <td>02</td>
                     <td align="left">HINDI</td>
                     <td>10</td>
                     <td>4</td>
                     <td><?php echo $row2['Hindi'];?></td>
                     <td><?php echo $row2['HindiResult'];?></td>
                  </tr>
                  <tr>
                     <td>03</td>
                     <td align="left">ENGLISH</td>
                     <td>10</td>
                     <td>4</td>
                     <td><?php echo $row2['English'];?></td>
                     <td><?php echo $row2['EnglishResult'];?></td>
                  </tr>
                  <tr>
                     <td>04</td>
                     <td align="left">MATH</td>
                     <td>10</td>
                     <td>4</td>
                     <td><?php echo $row2['Math'];?></td>
                     <td><?php echo $row2['MathResult'];?></td>
                  </tr>
                  <tr>
                     <td>05</td>
                     <td align="left">SCIENCE</td>
                     <td>10</td>
                     <td>4</td>
                     <td><?php echo $row2['Science'];?></td>
                     <td><?php echo $row2['ScienceResult'];?></td>
                  </tr>
                  <tr>
                     <td>06</td>
                     <td align="left">SOCIAL SCIENCE</td>
                     <td>10</td>
                     <td>4</td>
                     <td><?php echo $row2['Social'];?></td>
                     <td><?php echo $row2['SocialResult'];?></td>
                  </tr>
                  <Tr>
                     <td colspan="4" align="right">TOTAL</td>
                     <td colspan="1" align="center"><?php echo $row2['Total'];?></td>
                  </Tr>
                 
                  <tr>
                     <TD id="Col" colspan="2" align="right"  style="border: 1px solid white;">RESULT&nbsp :</TD>
                     <td id="Col" colspan="1" align="left" style="border: 1px solid white;"><?php echo $row2['Result'];?></td>
                  </tr>
                  <?php
                     }
                     }
                   }
                     ?>             
            </div>
            </table>
      </div>
      </fieldset>            
   </body>
</html>