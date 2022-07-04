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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <?php
            require 'link.php';
            ?>
        <style>
         body{
         font-family: 'Lora', serif;
     
         
         }
         input[type='password']{
            outline: none;
         }
         input[type='text']{
            outline: none;
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
                        <a href="Address"  >Address</a>
                        </td>
                        <td>
                            <a href="ps"  >Photo_Signature</a>
                        </td>
                         <td>
               <a href="password.php" class="btn active">Update_Password</a> 
               </td>
                    </tr>
                </table>
            </div>
            <form method="post" id="UPD">
            <DIV >Reset Password</DIV>
            <div class="top1">
                <table style="text-align: center; left: 7rem; position:relative;">     
                    <input type="hidden" name="Registation" value="<?php echo $_SESSION['Registation_number'];?>">
                        <tr>
                              <td>Old Password*</td>                   
                              <td ><input type="Password"  id="password" name="Password" style="width:225px;" >
                                <div id="error1"></div>
                              </td>
                                <td class="slash"><i id='i' class="fa fa-eye-slash" class="slash" style="font-size:36px"></i></td>                
                         </tr>
                         <tr>
                              <td>New Password* </td>                   
                              <td ><input type="Password"  id="New_password" name="New_Password" style="width:225px;"></td>       <td class="slash1"><i id='ii' class="fa fa-eye-slash" class="slash1" style="font-size:36px"></i></td>           
                         </tr>
                        <tr>
                              <td>Re-type Password*</td>                   
                              <td><input type="Password"  id="Re-type_password" name="Re-type_Password" style="width:225px;"></td>    <td class="slash2"><i id='iii' class="fa fa-eye-slash" class="slash2" style="font-size:36px"></i></td>              
                        </tr>
                        <tr>
                              <td> <input type="button"  id="btn" class="btn" style="border:1px solid rgba(0, 0, 0,0.1);" onclick="update_change()" value="submit"></td>
                        </tr>
                         
                </table>
            </div>
        </form>
    </div>
</div>

             <script src="jquery-3.4.1.min.js"></script>
        <script>
            a=document.querySelector('.slash');
password=document.querySelector('#password');

a1=document.querySelector('.slash1');
new_password=document.querySelector('#New_password');

a2=document.querySelector('.slash2');
re_password=document.querySelector('#Re-type_password');

var condition='True';
var condition1='True';
var condition2='True';

a.addEventListener('click',function(e) {
    if (condition=='True') {
        $('#i').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        condition='False';
        password.setAttribute('type','text');
    }
        else{
    $('#i').addClass('fa fa-eye-slash');
    password.setAttribute('type','password');
    condition='True';
}
});

/*2*/
a1.addEventListener('click',function(e) {
    if (condition1=='True') {
        $('#ii').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        condition1='False';
        new_password.setAttribute('type','text');
    }
        else{
    $('#ii').addClass('fa fa-eye-slash');
    new_password.setAttribute('type','password');
    condition1='True';
}
});
/**/
/*3*/
a2.addEventListener('click',function(e) {
    if (condition2=='True') {
        $('#iii').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        condition2='False';
        re_password.setAttribute('type','text');
    }
        else{
    $('#iii').addClass('fa fa-eye-slash');
    re_password.setAttribute('type','password');
    condition2='True';
}
});
            let q= document.querySelector("#UPD");
            q.addEventListener('click',function(E){
                let id = e.traget.id;
                alert(id);
            });
            function update_change() {
                    password= document.getElementById("password");
                    New_password= document.getElementById("New_password");
                    Re_type_password= document.getElementById("Re_type_password");

                    if ((password.value=='')) {
                      document.getElementById('error1').value='check';
                      password.focus();
                      return false;

                    }
                  jQuery.ajax({
                  url:'password_update/password.php',
                  type:'post',
                  data:jQuery('#UPD').serialize(),
                  success:function(data){
                      //document.getElementById('frmCaptcha').reset();
                      alert(data);
                      $('#UPD')[0].reset();                
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