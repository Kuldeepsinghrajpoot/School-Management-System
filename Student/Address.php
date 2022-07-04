<!--  -->
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
         textarea{
            border: 1px solid rgba(0, 0, 0,0.1);
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
                    $arrayName = array();                              
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
                       $arrayName[] ='<img  src="photo/'.$row['Photo'].'" width="50px" height="50px"';
                       
                         }  
                         for ($i=0; $i <1; $i++) { 
                     
                      echo  $arrayName[$i];
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
            $Email=mysqli_real_escape_string($Database,$_SESSION['user']);
            
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
                <table id="table_side" style=" margin: 196px 10rem; top:40px; position: absolute;">
                    <tr>
                        <td>
                            <a href="Return">Information</a>                      
                        </td>
                        <td>
                        <a href="Address"  class="btn active">Address</a>
                        </td>
                        <td>
                            <a href="ps"  >Photo_Signature</a>
                        </td>
                         <td>
               <a href="password.php">Update_Password</a> 
               </td>
                    </tr>
                </table>
            </div>
            <form method="post" id="UPD">
            <DIV >Address</DIV>
            <div class="top1">
                <table >     
                    <?php
                        $a ="'";
                          while($row = mysqli_fetch_array($result)) {
                        echo 
                         '<input type="hidden" name="Email" value="'.$row['Email'].'">
                          <input type="hidden" name="Address" value="Address">
                         <tr>                  
                              <th>Permanet Address</th>                     
                             <td> <textarea  rows="2" cols="58" name="Permanet" id="Permanet" >'.$row['Permanet_Address'].'</textarea></td>
                                                
                         </tr>
                         
                         <tr>                  
                              <th>Temprary Address</th>               
                              <td><textarea rows="2" cols="58" type="text" name="Temprary_Address">'.$row['Temprary_Address'].'</textarea></td>
                         </tr>
                         
                          <th>CityVillage</th>                   
                              <td ><input type="text" name="CityVillage" style="width:425px;" value="'.$row['CityVillage'].'"></td>                
                         </tr>
                        <tr>
                              <th>Dist</th>                   
                              <td><input type="text" name="Dist" style="width:425px;" value="'.$row['Dist'].'"></td>                
                         </tr>
                          <tr>
                           <td> <input type="button" class="btn" onclick="update_change()" name="submit" value="update"></td>
                            </tr>
                         ';}?>
                </table>
            </div>
        </form>
    </div>
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
        <div  class="copy_right">
            <div class="copy_right_information"></div>
            Devloped and Desigen by Student's GOVT Polytechnic College Nowgong 2021 
        </div>
        <?php }
            else{
              header('location:./');
            }?>
    </body>
</html>