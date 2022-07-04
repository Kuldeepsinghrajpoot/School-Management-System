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
    <link rel="stylesheet" type="text/css" href="ResultMarkseet.css">
    <?php
      require 'link.php';
      
      ?>
    <style>
      /* Style the buttons */
     
       body{
            font-family: 'Lora', serif;
               
            }
            .center{
            border:1px solid rgba(0, 0, 0, 0.1);
            width: 53rem;
            height: auto; 
            position: absolute;
            height: 500px;
            overflow: hidden;
            overflow-y: auto;
            margin: -29rem 21rem;
            background-color: white;
            box-shadow: 0 0px 30px 0px rgba(0,0,0,0.1);

            }
            #th{
            background-color:rgb(0, 64, 255);
            color: white;
            margin: -40px 70px;
            position: relative;
            border: 1px solid rgba(0, 0, 0, 0.1);
            }
            .Transaction{
            border-bottom:1px solid rgb(0, 128, 255);
            width: 53rem;
            position: fixed;
            height: 2rem;
           
            font-size: 25px;
            background-color: rgb(0, 128, 255);
            color: white;
            font-weight: bold;
            position: relative;
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
      </div>
    </div>
    </div>
   

<!--  -->

<?php 
    require 'connection.php';
         $Email = $_SESSION['user'];
         $query = "select *from student where Email='$Email'";
        
         $result= mysqli_query($Database,$query);
         $row=mysqli_fetch_array($result);
         $CV=$row['Registation'];
         $fetchData = mysqli_query($Database,"select *from student s join transaction t on s.Registation = t.Registation where TXNAMOUNT");
         $V=1;
    ?>

           
        
        <center>
            <div class="center">
                <div id="Examination_result">
                    <table id="marksheetData" style="margin: 30px 0px; width: 98%; height: auto;">
                        <div class="Transaction">Transaction</div>
                        <tr id="tr">
                            <td id="th">SN</td>
                            <td id="th">MONTH</td>
                            <td id="th">TRANSACTION ID</td>
                            <td id="th">Transaction<br>AMOUNT</td>
                            <td id="th">Transaction<br>DATE  </td>
                            <td id="th">STATUS</td>
                            <td id="th">BANK<br>NAME</td>
                            <td id="th">PAYMENT<br>MODE</td>
                            <!-- <td id="th">DOWN<BR>LOAD</td>  -->
                        </tr>
                        <?php  while ($fetchresult=mysqli_fetch_array($fetchData)) {
                            if ($fetchresult['Registation']==$CV) {
                            
                            ?> 
                        <tr id="tr">
                            <td id="td"><?php echo $V++;?></td>
                            <td id="td"><?php echo $fetchresult['MONTH'];?></td>
                            <td id="td"><?php echo $fetchresult['ORDERID'];?></td>
                            <td id="td"><?php echo $fetchresult['TXNAMOUNT'];?></td>
                            <td id="td"><?php echo $fetchresult['TXNDATE'];?></td>
                            <td id="td"><?php echo $fetchresult['STATUS'];?></td>
                            <td id="td"><?php echo $fetchresult['BANKNAME'];?></td>
                            <td id="td"><?php echo $fetchresult['PAYMENTMODE'];?></td>
                        </tr>
                        <?php  }
                            } ?>
                    </table>
                </div>
            </div>
        </center>
       <div  class="copy_right" style="position: absolute;top: ;">
      <div class="copy_right_information"></div>
      Devloped and Desigen by Student's GOVT Polytechnic College Nowgong 2021 
    </div>
    <?php }
      else{
        header('location:./');
      }?>
    </body>
</html>