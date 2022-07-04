<?php

require 'connection.php';

$check='';
$result=mysqli_query($Database,"select *from registration");

            while ($row=mysqli_fetch_array($result)) {
    // code...
                if($row['Registration_status']=='OPEN'){
                 $check='1';
    }
           else{
            echo "closed";
       }
    }
    

if ($check=='1') {
    // code...


?>
<html>
   <head>
      <title>Informations</title>
      <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
          <link rel="shortcut icon" type="image/jpg" href="shishu.png">
      <!-- <meta name="viewport" content="width=360, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
      <link rel="stylesheet" type="text/css" href="data.css">
      <script type="text/javascript" src="data_Script.js"></script>
      <style type="text/css">
         #suceess{
            visibility: hidden;
         }
      </style>
 
      
   </head>
   <body>
      <div id="background-blur">
      <div id="contains">
         <!-- <h1>SARASWATI HEIGHER SECONDRY SCHOOL NOWGONG CHHATARPUR MADHYA PRADESH</h1> -->
         <div class="contain">
           
            <form class="form" method="post" action="DataBase" id="form-data-sending"  enctype="multipart/form-data" onsubmit="return Process()">
                <input type="hidden"  name="name"     value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>"    >
                <input type="hidden"  name="lastname" value="<?php if(isset($_POST['lastname'])){echo $_POST['lastname'];}?>">
                <input type="hidden"  name="contact"  value="<?php if(isset($_POST['contact'])){echo $_POST['contact'];}?>" >
                <input type="hidden"  name="Email"    value="<?php if(isset($_POST['Email'])){echo $_POST['Email'];}?>"   >
                <input type="hidden"  name="password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];}?>">
<!-- General information of students here -->
              
                  <table class="form"  style="width: 100%;height: auto;border:1px solid blue; margin: 10px 0;background-color: white; border-radius: 0px;">
                     <div class="Student_informations"  style="width: 100%;height:30px; padding: 5px 0; background-color: rgb(0, 0, 255); color: white; font-weight: bold; border:1px solid blue; border-bottom: none; margin: -10px 0; border-radius: 0px; "> General Information of student's </div>
                     <tr>
                        <TD><label> Registation Number</label></TD>
                        <td>
                           <input type="Number" name="Registation"  id="Registation">
                        </td>
                        <TD><label> Addhar number</label></TD>
                        <td>
                           <input type="Number" name="Addhar"  id="Addhar" maxlength="12">
                        </td>
                        </TD>
                        
                     </tr>
                     <tr>
                        <td><label>  Father's name</label></td>
                        <td>
                           <input type="text" name="fatherName"  id="fname"> 
                           <div id="error"></div>
                        </td>
                        <td><label>  Mother's name</label></td>
                        <td> <input type="text" name="motherName" id="mname"></td>
                     </tr>
                     <tr>
                        <td>
                           <label>
                              Gender:</label>
                        </td>
                        <td>
                        <select name="Gender" id="Gender">
                        <option value="select">Select</option>
                        <option value="Male" >Male</option>
                        <option value="Female">Female</option>
                        </select></td>
                        <td> <label>Catagory</label>:</td>
                        <td>
                           <select name="Catagory" id="Catagory">
                              <option value="Select">Select</option>
                              <option value="OBC">OBC</option>
                              <option value="GEN">GEN</option>
                              <option value="SC">SC</option>
                              <option value="ST">ST</option>
                           </select>
                        </td>
                     </tr>
                     <tr>
                        <td> <label>DOB</label></td>
                        <td><input type="date" name="dob" id="dob" placeholder="dd/mm/yy"></td>
                     
                        <td> <label>Samgra Id</label></td>
                        <td><input type="number" name="samgra_id" id="samgra_id" ></td>
                     </tr>
                     <!-- <tr><td> <label> Contact Informations</label></td></tr> -->

                  </table>

                   <!-- Education Details here  -->

                   <table class="form"  style="width: 100%;height: auto; position: relative; border:1px solid blue; margin: 0px 0;background-color: white; border-radius: 0px;">
                     <div class="Student_informations"  style="width: 100%;height:30px; padding: 5px 0; background-color: rgb(0, 0, 255); color: white; font-weight: bold; border:1px solid blue; border-bottom: none; margin: -0px 0; border-radius: 0px; ">Education Details </div>
                     <tr>
                        <td>Admission Date</td>
                        <td><input type="date" name="Admission_Date" id="Admission_Date"></td>
                        <td>Admission Fees</td>
                        <td><input type="number" name="Admission_fees" id="Admission_fees"></td>
                        <td> <label>Class</label>:</td>
                        <td>
                           <select name="class" id="class" style="width: auto;">
                              <option value="select">Select</option>
                                                            <option value="6.A">6A</option>
                              <option value="6.B">6B</option>
                              <option value="6.C">6C</option>
                              <option value="7.A">7A</option>
                              <option value="7.B">7B</option>
                              <option value="7.C">7C</option>
                              <option value="8.A">8A</option>
                              <option value="8.B">8B</option>
                              <option value="8.C">8C</option>
                              <option value="9.A">9A</option>
                              <option value="9.B">9B</option>
                              <option value="9.C">9C</option>
                              <option value="10.A">10A</option>
                              <option value="10.B">10B</option>
                              <option value="10.C">10C</option>
                              <option value="11.Math">11Math</option>
                              <option value="11.Comerce">11 Comerce</option>
                              <option value="11.Bio">11 Bio</option>
                              <option value="11.Ag">11 Ag</option>
                               <option value="12.Math">11Math</option>
                              <option value="12.Comerce">11 Comerce</option>
                              <option value="12.Bio">11 Bio</option>
                              <option value="12.Ag">11 Ag</option>
                           </select>
                        </td>
                     </tr>
                  </table>
                        
<!-- Privious Education Details here -->
                   <table class="form"  style="width: 100%;height: auto; position: relative; border:1px solid blue; margin: -10px 0;background-color: white; border-radius: 0px;">
                     <div class="Student_informations"  style="width: 100%;height:30px; padding: 5px 0; background-color: rgb(0, 0, 255); color: white; font-weight: bold; border:1px solid blue; border-bottom: none; margin: 10px 0; border-radius: 0px; "> Privious Education Details </div>
                     <tr>
                        <TD><label> Passing Year</label></TD>
                        <td>
                           <input type="Number" name="Passing_Year" id="Passing_Year" >
                        </td>
                        </TD>
                        <td>  <label>Passing Class</label></td>
                        <td>  <input type="text" name="Passing_Class" id="Passing_Class"></td>
                     </tr>
                     <tr>
                        <td><label>  Pass out School</label></td>
                        <td>
                           <input type="text" name="Pass_out_School"  id="Pass_out_School" style="width:259%;"> 
                           <div id="error"></div>
                        </td>
                     </tr>
                        <td><label>  City</label></td>
                        <td> <input type="text" name=" pass_out_City" id="pass_out_City"></td>
                    
                        <td>POST</td>
                        <td><input type="text" name="pass_out_post" id="pass_out_post"> </td>
                        
                     </tr>
                    
                     <tr>
                        <td>School Address</td>
                        <td><input type="text" name="pass_out_school_address" id="pass_out_school_address" style="width:259%;"></td>
                     </tr>
                      <tr>
                        <td> <label>Tehsel</label></td>
                        <td><input type="text" name="pass_out_tehsel" id="pass_out_tehsel"></td>
                        <td> <label>Distc</label></td>
                        <td><input type="text" name="pass_out_dist" id="pass_out_dist" ></td>
                     </tr>
                     <!-- <tr><td> <label> Contact Informations</label></td></tr> -->

                  </table>
              
              <!-- Address details here -->
                  <table table class="form"  style="width: 100%;height: auto;border:1px solid blue; margin: -20px 0;background-color: white; border-radius: 0px;">
                     <div class="Student_informations"  style="width: 100%;height:30px; padding: 5px 0; background-color: rgb(0, 0, 255); color: white; font-weight: bold; border:1px solid blue; border-bottom: none; margin: 20px 0; border-radius: 0px; "> Address </div>
                     <tr>
                        <td><label>City/Village</label></td>
                        <td><input type="text" name="CV" id="CV"> </td>
                        <td><label>Dist</label></td>
                        <td><input type="text" name="Dist" id="dist"> </td>
                     </tr>
                     <tr>
                        <Td><label>Temprary Address</label></Td>
                        <td>
                           <textarea  rows="3" cols="30" name="Temprary" id="Temprary"></textarea>
                        </TD>
                        <td><label>PIN</label></td>
                        <td><input type="number" name="pin" id="pin"> </td>
                     </tr>
                     <tr>
                        <Td> <label>Permanet Address</label></Td>
                        <td>
                           <textarea  rows="3" cols="30" name="Permanet" id="Permanet"></textarea>
                        </TD>
                        <td><label>POST</label></td>
                        <td><input type="text" name="point" id="POST"> </td>
                     </tr>
                  </table>
   <!-- Signature and photo here -->
                <table table class="form"  style="width: 100%;height: auto;border:1px solid blue; margin: -30px 0;background-color: white; border-radius: 0px;">
                     <div class="Student_informations"  style="width: 100%;height:30px; padding: 5px 0; background-color: rgb(0, 0, 255); color: white; font-weight: bold; border:1px solid blue; border-bottom: none; margin:30px 0; border-radius: 0px; "> Photo & Signature</div>
               <tr><td><label>Photo</label></td><td><input type="file" name="file"  id="file" /></td>
               <td><label>Signature</label></td><td><input type="file" name="signature" id="signature"></td></tr>
               </table> 

               <tr>
                  <td><button> Submit</button></Td>
               </tr>
            </form>
         </div>
      </center>
   </td>
</tr>
</td>
</tr>
</td>
</tr>
</table>
</form>
</div>

   </div>
      <!-- <div  id="suceess" style='
              margin:-60rem 30rem;
              width:270px;
              height:270px;
              border:1px solid rgba(0,0,0,0.1);
              background:white;
              color:black;
              position: fixed;
              box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1), 0px 0px 10px 5px rgba(0,0,0,0.1);'>
              <div style="margin: 200px 0; text-align: center;">Successfully Account  has been Created <div>
               <div style="position: absolute; margin: -13rem 50px; ">
                  <img src="suceess.png">
               </div>
              </div>
          </div>
      </div> -->
      <!-- <script src="jquery-3.4.1.min.js"></script>
      <script type="text/javascript">
         function Submit(){
         jQuery.ajax({
            url:'DataBase.php',
            type:'post',
            data:jQuery('#form-data-sending').serialize(),
            success:function(data){
               alert(data);
               var suceess=document.getElementById('suceess');
              suceess.style.visibility='visible';
               var  background_blur =document.getElementById('background-blur');
               background_blur.style.filter='blur(4px)';

            }
         });
      }
      </script> -->
   </body>
</html>
<?php 
}
else {
    header("location:./");
}
?>