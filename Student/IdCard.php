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
    <div class="Center" >
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
    <?php
      require 'connection.php';
      $name=$_SESSION['user'];
       ?>
    <?php
      if ($name==true) {
            $Email=$name;
            $Database = mysqli_connect('localhost','root','');
            mysqli_select_db($Database,'school');
           if ($Database===false) {
             die("could not connect to the Database".mysqli_connection_error());
           }
           $query= "select *from student where Email='$Email'";
          $result= mysqli_query($Database,$query);
          ?>
    <div class="border-id">
      <div class="item">
        <div class="second_item">
          <div class="front_item">
            <table class="data_frame">
              <?php
                while ($row=mysqli_fetch_array($result)) {
                 ?>
              <img src="shishu.png" id="img">
              <div class="SARASWATI" style="font-size: 40px; word-spacing: 2px; ">
                SARASWATI 
                <div style="font-size: 15px;">SHISHU MANDIR NOWGONG CHHATARPUR</div>
              </div>
              <?php 
                $a="'";
                echo'      
                                    <div class="imges" >  
                                        <img src="photo/'.$row['Photo'].'"alt="Image"height="100px";width="100px";/> 
                                    </div>
                                   
                  <tr style="padding:0 0;">
                     <th>Student</th>
                     <td>:-'.strtoupper($row["FirstName"].' '.$row['LastName']).'</td>
                  </tr>
                  <tr style="padding:0 0;">
                     <th style="padding:0 0;">Father</th>
                     <td style="padding:0 0;">:-'.strtoupper($row["FatherName"]).'</td>
                  </tr>
                    <tr style="padding:0 0;">
                     <th style="padding:0 0;">Mother</th>
                     <td style="padding:0 0;">:-'.strtoupper($row["MotherName"]).'</td>
                  </tr>
                  <tr style="padding:0 0;">
                     <th style="padding:0 0;">DOB</th>
                    <td style="padding:0 0;">:-'.$row["DOB"].'</td>
                  </tr>
                   <tr style="padding:0 0;">
                     <th style="padding:0 0;">Class</th>
                    <td style="padding:0 0;">:-'.$row["Class"].'</td>
                  </tr>
                  <tr style="padding:0 0;">
                     <th style="padding:0 0;">Contact</th>
                     <td style="padding:0 0;">:-'.$row["Contact"].'</td>
                  </tr>
                
                  <tr>
                     <th style="position:fixed;">Address</th>
                     <td style="font-size:14px;">:-'.$row['Permanet_Address'].'</td>
                  </tr>';
                  }?>
            </table>
            <?php
              } 
              else{
              }
              ?>
          </div>
          <div class="back_item">
            <div class="SARASWATI" style="font-size: 40px; word-spacing: 2px; margin:5px 0;">
              <img src="shishu.png" class="img">SARASWATI 
              <div style="font-size: 15px;">SHISHU MANDIR NOWGONG CHHATARPUR</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div  class="copy_right">
      <div class="copy_right_information"></div>
      Devloped and Desigen by Student's GOVT Polytechnic College Nowgong 2021 
    </div>
    <?php }
      else{
        header('location:../');
      }?>
  </body>
</html>