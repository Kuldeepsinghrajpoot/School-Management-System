<?php
   require 'connection.php';
   $Email=mysqli_real_escape_string($Database,$_POST['name']);
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Result</title>
      <meta charset="utf-8">
      <style>
         body{
         font-family: 'Lora', serif;
         }
         input[type='text']{
         font-family: 'Lora', serif;
         width: 220px;
         height: 28px;
         font-size: 15px;
         border: 1px solid #E3E1E1;
         padding: 0;
         z-index: 1;
         }
         input:focus{
         border: 1px solid blue;
         }
         fieldset{
         border: 1px solid blue;
         }
      </style>
   </head>
   <body>
      <div class="Coloumn">
      <table id="table" style=" margin: -50px 140px; top : 10px;padding: 0; height: 50px; width: 100px; position: absolute;">
         <tr>
            <td>
               <button type="button"  onclick="submit_data()">Student</button>                      
            </td>
            <td>
               <button type="Button"  onclick="Address()">Address</button>
            </td>
            <!-- <td>
               <button type="button"  onclick="idCard()">Contact</button>   
               </td> -->
            <td>
               <button type="Button"  onclick="Photo_Signature()">Photo&Signature</button>
            </td>
         </tr>
      </table>
      <?php 
         $Database = mysqli_connect('localhost','root','');
              mysqli_select_db($Database,'school');
             
           $sql="select *from student where Email='$Email'";
                  $result = mysqli_query($Database, $sql);
                  $num=mysqli_num_rows($result);
                  ?>
      <form method="post" id="UPD">
         <fieldset>
            <legend>Contact</legend>
            <table class="tabledata">
               <?php
                  $a ="'";
                  $b =" ";
                    while($row = mysqli_fetch_array($result)) {
                  echo 
                   '
                            <input type="hidden" name="Email" value="'.$row['Email'].'">
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
                   <td>Catagory  </td>
                  <td><input type="text" name="Catagory" style="width:68px"; value="'.$row['Catagory'].'">
                    &nbsp Gender &nbsp
                  <input type="text" name="Gender" style="width:68px"; value="'.$row['Gender'].'">
                  </td>
                  </tr>   
                  <tr>
                    <th>Contact</th>
                   <td><input type="text" name="Contact" id="SocialPratical" value="'.$row['Contact'].'"></td>
                  
                  <th>Email</th>
                  <td><input type="text" name="Email" value="'.$row['Email'].'"></td>
                  </tr>
                  
                   ';}?>
               <td> <button type="button" class="btn btn-default" onclick="update_change()">Submit</button></td>
            </table>
         </fieldset>
      </form>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script>
         function update_change() {
               jQuery.ajax({
               url:'updateData.php',
               type:'post',
               data:jQuery('#UPD').serialize(),
               success:function(data){
                 //  document.getElementById('frmCaptcha').reset();
                   alert(data);                
               }
           });
           }  
      </script>
   </body>
</html>