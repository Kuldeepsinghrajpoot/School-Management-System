<?php
 include'connection.php';
 if (isset($_POST['Registation'])) {
            $Registation = mysqli_real_escape_string($Database ,$_POST['Registation']);
                  $MONTH = mysqli_real_escape_string($Database ,$_POST['MONTH']);

      $query= "select *from student s join examination e on s.RollNumber = e.RollNumber";
      $result= mysqli_query($Database,$query);
      
    
?>
<!DOCTYPE html>
<html>
<head>
  <title>Report card of students</title>
  <link rel="stylesheet" type="text/css" href="Marksheet.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=360, initial-scale=1.0, maximum-scale=1.0, user-scalable=no left-width=0px" /> -->
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
             <center> <div class="STATUS">STUDENT'S DETAILS</div></center>
             <table id="tablePhoto">
             <?php
              while ($row2=mysqli_fetch_array($result)) {
                if(($row2['RollNumber']==$Registation)&&($row2['MONTH']==$MONTH)) {
                
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
            <center> <div class="STATUS">STUDENT'S MARKS</div></center>
                
                <table id="table" style="width: 100%;">
                  
                  <tr rowspan="2">
                     <td rowspan="2" >SN</td>
                     <td rowspan="2" >SUBJECT'S NAME</td>
                     <td rowspan="2" >MAX MARKS</td>
                     <td rowspan="2" >MIN THEORY</td>
                     <center><img src="shishu.png" id="img1"></center>
                     <TD rowspan="2" > MAX PRATICAL</TD>

                     <TD rowspan="2"  >MIN PRATICAL</TD>
                     <td colspan="3" align="center">OBTAINS MARKS</td>
                     <td rowspan="2">REMARK</td>
                  </tr>
                  <tr>
                    <td>THEORY</td>
                    <TD>PRATICAL</TD>
                    <td>TOTAL</td>
                  </tr>

                  <tr >
                    <td>01</td>
                    <td align="left">SNSAKRIT</td>
                    <td>100</td>
                        <td>33</td>
                        <td>10</td>
                        <td>5</td>
                        <td><?php echo $row2['Sansakrit'];?></td>
                        <td><?php echo $row2['SanskritPratical'];?></td>
                        <td><?php echo $row2['SansakritTotal'];?></td>
                        <td><?php echo $row2['SanskritResult'];?></td>

                  </tr>
                  <tr>
                    <td>02</td>
                    <td align="left">HINDI</td>
                    <td>100</td>
                        <td>33</td>
                        <td>10</td>
                        <td>5</td>
                        <td><?php echo $row2['Hindi'];?></td>
                        <td><?php echo $row2['HindiPratical'];?></td>
                        <td><?php echo $row2['HindiTotal'];?></td>
                        <td><?php echo $row2['HindiResult'];?></td>
                  </tr>


                      <tr>
                    <td>03</td>
                    <td align="left">ENGLISH</td>
                    <td>100</td>
                        <td>33</td>
                        <td>10</td>
                        <td>5</td>
                        <td><?php echo $row2['English'];?></td>
                        <td><?php echo $row2['EnglishPratical'];?></td>
                        <td><?php echo $row2['EnglishTotal'];?></td>
                        <td><?php echo $row2['EnglishResult'];?></td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td align="left">MATH</td>
                    <td>100</td>
                        <td>33</td>
                        <td>10</td>
                        <td>5</td>
                        <td><?php echo $row2['Math'];?></td>
                        <td><?php echo $row2['MathPratical'];?></td>
                        <td><?php echo $row2['MathTotal'];?></td>
                        <td><?php echo $row2['MathResult'];?></td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td align="left">SCIENCE</td>
                    <td>70</td>
                        <td>25</td>
                        <td>30</td>
                        <td>15</td>
                        <td><?php echo $row2['Science'];?></td>
                        <td><?php echo $row2['SciencePratical'];?></td>
                        <td><?php echo $row2['ScienceTotal'];?></td>
                        <td><?php echo $row2['ScienceResult'];?></td>
                  </tr>
                  <tr>
                    <td>06</td>
                    <td align="left">SOCIAL SCIENCE</td>
                    <td>100</td>
                        <td>33</td>
                        <td>10</td>
                        <td>5</td>
                        <td><?php echo $row2['Social'];?></td>
                        <td><?php echo $row2['SocialPratical'];?></td>
                        <td><?php echo $row2['SocialTotal'];?></td>
                        <td><?php echo $row2['SocialResult'];?></td>
                  </tr>
                 <Tr> <td colspan="8" align="right">TOTAL</td>
                  <td colspan="1" align="center"><?php echo $row2['Total'];?></td>
                 </Tr>
                 <tr> <td colspan="5" align="right">MARKS IN WORD</td>
                  <td colspan="4" align="right">Four Hundred Sixty </td></tr>
                    
                    <tr>
                        <TD id="Col" colspan="2" align="right"  style="border: 1px solid white; ">RESULT&nbsp :</TD>
                        <td id="Col" colspan="1" align="left" style="border: 1px solid white;"><?php echo $row2['Result'];?></td>
                    </tr>
                    <tr>
                        <TD id="Col" colspan="2" align="right"  style="border: 1px solid white;">PERCENTAGE&nbsp :</TD>
                        <td id="Col" colspan="1" align="left" style="border: 1px solid white;"><?php echo $row2['Percentage'];?></td>
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