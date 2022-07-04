<?php
   require 'connection.php';
   $Email=mysqli_real_escape_string($Database,$_POST['username']);  
  $Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
   $sql="select *from student where Email='$Email'";
           $sql_front="select *from student where Email='$Email'";
                  $result = mysqli_query($Database, $sql);
                  $num=mysqli_num_rows($result);
                  $result_front = mysqli_query($Database, $sql_front);
                  $num=mysqli_num_rows($result_front);
                
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
         .btn {  
             border: none;
             outline: none;
             padding: 5px 5px;
             background-color: #f1f1f1;
             cursor: pointer;
             font-size: 18px;
          }
          textarea{   
           font-family: 'Lora', serif;
           font-weight: bold;
           font-size: 13px;
          }

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: rgb(255, 128, 0);
  color: white;
}
.AddressUI{
  box-shadow: inset 5px 5px 5px rgba(0,0,0,0.05),
             inset -5px -5px 5px rgba(0,0,0,0.05);
  position: relative;  width: 40rem; margin: -40px 60px; padding: 10px 10px;
   border:none;
    background: linear-gradient(-50deg,rgb(0, 128, 255,0.05),rgba(200,200,200,0.1));
}
 tr,td{
padding: 6px 5px;
position: relative;
}
      </style>
   </head>
   <body>
     <legend></legend>
                  <div class="AddressUI">
                  <table style="width: 100%; padding: 10px 10px; top: 10px;" class="tabledata">
                    <?php 
                         while($row_front = mysqli_fetch_array($result_front)) {
                  echo '     
                   <tr>
                   <th>Class  </th>
                  <td>'.$row_front['Class'].'&nbsp&nbsp&nbsp&nbsp Section&nbsp&nbsp&nbsp&nbsp :&nbsp&nbsp&nbsp&nbsp'.$row_front['Class'].'</td>
                  <th>Roll number </th>
                  <td>'.$row_front['RollNumber'].'</td>                 
                  </tr>
                  <th>FirstName </th>
                  <td>'.$row_front['FirstName'].'</td>
                  <th>LastName   </th>
                  <td>'.$row_front['LastName'].'</td>
                  </tr> 
                  <tr>
                  <th>FatherName </th>
                  <td>'.$row_front['FatherName'].'</td>
                  <th>MotheName  </th>
                  <td>'.$row_front['MotherName'].'</td>
                  </tr>
                  <tr>
                  
                  ';
                    }?>
                  </table>
                </div>
      <div class="Coloumn">
        <div id="mDiv">
      <table id="table" style=" margin: 20px 160px; top : 40px; position: relative;">
         <tr>
            <td>
               <button type="button"  class="btn " onclick="submit_data()">Student</button>                      
            </td>
            <td>
               <button type="Button"  class="btn " onclick="Address()">Address</button>
            </td>
            <!-- <td>
               <button type="button"  onclick="idCard()">Contact</button>   
               </td> -->
            <td>
               <button type="Button"  class="btn active" onclick="Photo_Signature()">Photo&Signature</button>
            </td>
         </tr>
      </table>
    </div>
      <form method="post" id="form_image">       
               <DIV style="width: 41rem; background-color: rgb(0, 128, 255);height: 30px; font-size: 25px; border:1px solid rgb(0, 128, 255); padding: 0px 10px; border-bottom: none; text-align: center; margin-top: 50px; top: 40px; margin: 50px 55px; font-weight: bold;color: white;">Photo and Signature</DIV>
        <div style="width: 41rem; border:1px solid rgb(0, 128, 255); padding: 10px 10px; top: 40px; margin: -50px 55px;">
              <table >    
               <?php
               $a ="'";
                 while($row = mysqli_fetch_array($result)) {
            echo 
                 ' 
                     
                <input type="hidden" name="Email" value="'.$row['Email'].'">
                 <input type="hidden" name="Image" value="Image">
                <tr>
                     <label style="margin:2px 120px;">Photo</label>    

                     <td>  <img style="margin:0 100px; border:1px solid blue;" src="photo/'.$row['Photo'].'"alt="Image"height="100px";width="100px";/>  </td>
                     <label  style="margin:0 110px;" >Signature</label>
                     <td>  <img  style="margin:0 -220px;border:1px solid blue;"src="image/'.$row['Signature'].'"alt="Image" height="100px";width="350px";/>  </td>
                </tr>
                <tr> <td> <input style="margin:0 100px;" type="file" name="file" id="file" /> </td> 
                     <td> <input style="margin:0 -200px;"type="file" name="singnature" id="singnature" /> </td>
                 </tr>
                 <tr>
                <td> <input type="submit" style="margin:0px 249px;" class="btn" id="button" name="submit" value="update"></td>
                </tr>
               
                ';}?>
               
                  
                </td> 
              </table>
        </table>
      </div>
    </form>
       
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script>
$(document).ready(function(){
 $("#form_image").on('submit',function(e){
  e.preventDefault();
  var form_data = new FormData(this);
 
   $.ajax({
    url:"imageUpdate.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
    Photo_Signature();
    alert(data);
    }
   });
});
 
});

</script>
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script>
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
   </body>
</html>
