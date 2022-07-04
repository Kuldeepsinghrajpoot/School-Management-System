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
            /* Style the buttons */
             body{
         font-family: 'Lora', serif;
          
       
         }
               
        </style>
    </head>
    <body>
        <h1>
            <div style="font-size: 55px;">SARASWATI SHISHU MANDIR</div>
            NOWGONG CHHATARPUR (MP)
        </h1>
        <script type="text/javascript">
            var a = cookies();
            alert(a);
        </script>
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
                    </tr>';
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
                        <a href="Address" >Address</a>
                        </td>
                        <td>
                            <a href="ps"  class="btn active">Photo_Signature</a>
                        </td>
                         <td>
               <a href="password">Update_Password</a> 
               </td>
                    </tr>
                </table>
            </div>
            <form method="post" id="form_image">
                <DIV >Photo / Signature</DIV>
                <div class="top1">
                    <table >    
                        <?php
                            $a ="'";
                              while($row = mysqli_fetch_array($result)) {
                            echo'                    
                             <input type="hidden" name="Email" value="'.$row['Email'].'">
                              <input type="hidden" name="Image" value="Image">
                             <tr>
                                  <label style="margin:2px 80px;">Photo</label>    
                            
                                  <td>  <img style="margin:-50px -140px; border:1px solid rgba(0,0,0,0.1);   position: absolute; height:100px; width:100px;" src="photo/'.$row['Photo'].'"alt="Image"/>  </td>
                                  <label  style="margin:0 110px; " >Signature</label>

                                  <td>  <img  style="margin:0 00px; left:-200px;height:100px; width:100px; position:relative;  border:1px solid rgba(0,0,0,0.1); blue;"src="image/'.$row['Signature'].'"alt="Image" ;/>  
                                  </td>
                             </tr>
                             <tr> <td> <input style="margin:0 100px;" type="file" name="file" id="file" /> </td> 
                                  <td> <input style="margin:-10px -240px; position:absolute; "type="file" name="singnature" id="singnature" /> </td>
                              </tr>
                              <tr>
                             <td> <input type="submit" style="margin:0px 249px; border:1px solid rgba(0,0,0,0.1);" class="btn" id="button" name="submit" value="update"></td>
                             </tr>
                            
                             ';}?>
                        </td>

                    </table>
            </div>
        </form>
    </div>
</div>
        <script src="jquery-3.4.1.min.js"></script>
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
                alert(data);
                }
               });
            });
             
            });
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
<!--  -->