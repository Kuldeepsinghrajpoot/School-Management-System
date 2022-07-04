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
            body,select{
            font-family: 'Lora', serif;
            }
            .center{
            border:1px solid rgba(0, 0, 0, 0.1);
            width: 45rem;
            height: auto; 
            margin: 0px 30px;
            bottom: 20px;
            position: relative;
            margin: 5rem 17rem;
            background-color: white;
            box-shadow: 0 0px 30px 0px rgba(0,0,0,0.1);

            }
            .Transaction{
            border-bottom:1px solid rgba(0, 0, 0, 0.1);
            width: 45rem;
            height: 2rem;
            top: 40px;
            background-color: white;
            padding-top:0px;

            font-size: 35px;
            background-color: rgb(0, 128, 255);
            color: white;
            font-weight: bold;
            }
            .btn{
            cursor: pointer;
            text-align: center;
            bottom: 30px;
            border: none;
            left: 20rem;
            width: 100px;
            height: 30px;
            color: white;
            font-size: 1.2rem;
            position: absolute;
            background-color: red;
            font-family: 'Lora', serif;
            }
            .btn:hover{
            background-color: whitesmoke;
            border: 1px solid red;
            color: black;
            transition: 0.3s;
            }
            .btn span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.3s;
            }
            .btn span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.3s;
            }
            .btn:hover span {
            padding-right: 25px;
            }
            .btn:hover span:after {
            opacity: 1;
            right: 0;
            }
            #Select{
            border: 1px solid blue;
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
    
    

<!--  -->
<?php $reg=$_SESSION['Registation_number'];
    require 'connection.php';
    $query=mysqli_query($Database,"select *from student where Registation='$reg'");
    $result=mysqli_fetch_array($query);
    $class=(explode('.', $result['Class'],2));
    $cls=$class;
     $cl=$cls[0];
    
    
    $sql = mysqli_query($Database,"select *from fess where $cl='$cl'");
    $fess=mysqli_fetch_array($sql);
    $payments=$fess[$cl];
    ?>

        
        </style>
  
        <!-- payment_Data -->  
        <div class="center">
            <div class="Transaction" style="font-size: 25px;">PAY FEES</div>
            <form method="post"  id="find_details" method="post">
                <div class="" style="color: white; margin: 40px 15px; background: orangered; width:95.4%;"> Notice</div>
                <ol style="width:93%;border: 1px solid  orangered; margin: -40px 15px;width: 89.5%;">
                    <li>
                        Payment will not be refunded in any case.
                    </li>
                    <li>
                        If you are paying the fee If in any case your payment is failed and the payment is deducted from your account then you will not have to pay again and wait for 24 hours and your fee will  credited.
                    </li>
                    <li>
                        Any query for Contact Email : kuldeepsinghrajpoot4@gmail.com.
                    </li>
                </ol>
            <div>
                <div class="center" style="color: white; margin: 100px 15px; background: rgb(0, 128, 255); width:95.1%; "> Details</div>
                <table style="border: 1px solid rgb(0, 128, 255); position: absolute; margin: 14rem 15px; height: 120px; width: 95.3%;">
                        <tr>
                            <td>
                                Select month
                            </td>
                            <td>
                                <select name="month" id="Select">
                                    <option value="Select">Select</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>

                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Fees
                            </td>
                            <td> 
                                <input type="hidden" name="fess"   id="fees" value="<?php echo $payments;?>"  style="width: 70px; position:absolute;">
                                <input type="text"  value="<?php echo $payments;?>" disabled style="width: 70px;">
                                <input type="hidden" name="username" id="username"   value="<?php echo $reg;?>" style="width: 70px; position: absolute;" >
                            </td>
                        </tr>
                      
                    </table>
                    
                               <button class="btn" type="button"><span>PAY</span></button>
                         
            </form>
            </div>
        </div>
        </div>
    <script type="text/javascript">
      a= document.querySelector('.btn');
      a.addEventListener('click',function(){
        var select = document.getElementById('Select');

        var username=$('#username').val();

        var fees=$('#fees').val();
        var month = $('#Select').val();

            if (select.value=='Select') {
             alert('select Month');
             select.style.border="1px solid red";
                     select.focus();
             return false;
            }
            else{
                jQuery.ajax({
                       url:'check_months.php',
                       type:'post',
                       data:{username:username,month:month,fees:fees},
                       success:function(data) {
                         if (data=='already paid') {
                          alert('Already paid fees of this month');
                         }
                         else{
                          //window.location.href='payment_Data';
                          //target='_blank';
                          window.open('payment_Data','_blank');
                         }
                       }
                });
            }
        
      });
       
            
    </script>

</div>
</div>
</div>
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
</html>
