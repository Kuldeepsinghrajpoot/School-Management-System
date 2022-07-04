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
?>
<head>
  
  <title>Student</title>
     <link rel="shortcut icon" type="image/jpg" href="shishu.png">
      <link rel="stylesheet" type="text/css" href="newFrame.css">

      <?php
      require 'link.php';
    ?>
  <style>
        body{
         font-family: 'Lora', serif;
         
         }
    
      </style>

</head>
<body>
 <h1><div style="font-size: 55px;">SARASWATI SHISHU MANDIR</div>NOWGONG CHHATARPUR (MP)</h1>

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
                            <a style="outline: none border-style: none;display: block;color: red; outline:none; text-decoration: none;" href="Logout" > Logout</a> 
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
   $Email=$_SESSION['user'];
   
  $Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
      
   $sql="select *from student where Email='$Email'";
           $sql_front="select *from student where Email='$Email'";
                  $result = mysqli_query($Database, $sql);
                  $num=mysqli_num_rows($result);
                  $result_front = mysqli_query($Database, $sql_front);
                  $num=mysqli_num_rows($result_front);
                
   ?>

                  <div class="AddressUI">
                  <table style=" padding: 10px 0px; top: 10px;" class="tabledata">
                    <?php 
                         while($row_front = mysqli_fetch_array($result_front)) {
                  echo '     
                   <tr>
                 <td>Class  </td>
                  <td>'.$row_front['Class'].'</td>
                  <td>Roll number </td>
                  <td>'.$row_front['RollNumber'].'</td>                 
                  </tr>
                  <tr>
                  <td>FirstName </td>
                  <td>'.$row_front['FirstName'].'</td>
                  <td>LastName   </td>
                  <td>'.$row_front['LastName'].'</th>
                  </tr> 
                  <tr>
                  <td>FatherName </td>
                  <td>'.$row_front['FatherName'].'</td>
                  <td>MotheName  </td>
                  <td>'.$row_front['MotherName'].'</td>
                  </tr>
                  ';
                    }?>
                  </table>
                </div>
      <div class="Coloumn">
        <div id="mDiv">
      <table id="table" style=" margin: 190px 10rem; top : 40px; position: absolute;">
         <tr>
            <td>
               <button type="button"  class="btn active" onclick="submit_data()">Information</button>                      
            </td>
            <td>
            <a href="Address">Address</a>
            </td>
           
            <td>
                <a href="ps" >Photo_Signature</a>
            </td>
             <td>
               <a href="password.php">Reset_Password</a> 
               </td>
         </tr>
      </table>
    </div>
      <form method="post" id="UPD">       
                <DIV>Student Information</DIV>
        <div class="top1">
              <table >   
               <?php
               $a ="'";
                 while($row = mysqli_fetch_array($result)) {
            echo 
                ' <input type="hidden" name="Email" value="'.$row['Email'].'">
                    <input type="hidden" name="Information" value="Information">
                   <tr>
                  
                  <th>FirstName  </th>
                  <td><input type="text" name="FirstName" value="'.$row['FirstName'].'"></td>
                  
                  <th>LastName   </th>
                  <td><input type="text" name="LastName" value="'.$row['LastName'].'"></td>
                  </tr> 
                  
                  <tr>
                    <th>FatherName </th>
                   <td><input type="text" name="FatherName" value="'.$row['FatherName'].'"></td>
                  
                  <th>MotheName  </th>
                  <td><input type="text" name="MotherName" value="'.$row['MotherName'].'"></td>
                  </tr>
                  <tr>
                  <th>Date of birth  </th>
                  <td><input type="text" name="DOB" value="'.$row['DOB'].'"></td>
                   <th>Catagory  </th>
                  
                  <td><input type="text" name="Catagory" style="width:68px"; value="'.$row['Catagory'].'">
                    &nbsp Gender &nbsp
                  <input type="text" name="Gender" style="width:68px"; value="'.$row['Gender'].'">
                  </td>
                  </tr>   
                  </tr>   
                  <tr>
                  <th>Email </th>
                  <td><input type="text" name="Email" value="'.$row['Email'].'">
                   <th>Contact  </th>
                  <td><input type="text" name="Contact" value="'.$row['Contact'].'">
                  </td>
                  </tr>  
                ';}?>
               
                  <td> <input type="button" class="btn" onclick="update_change()" name="submit" value="update"></td>

                </td> 
        </table>

      </div>
                  
               </form>
              
         </div>

      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script>
      function update_change() {
            jQuery.ajax({
            url:'updateData.php',
            type:'post',
            data:jQuery('#UPD').serialize(),
            success:function(data){
                //document.getElementById('frmCaptcha').reset();
                alert(data);                
            }
        });
        }
         var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {

  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}  
      </script>

  
   
</div>
<div  class="copy_right">
        <div class="copy_right_information"></div>Devloped and Desigen by Student's GOVT Polytechnic College Nowgong 2021 </div>
<?php }
else{
  header('location:./');
}?>
</body>
</html>
 

   </body>
</html>

