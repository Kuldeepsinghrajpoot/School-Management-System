<!DOCTYPE html>
<html>
  <?php 
    session_start();
    session_id();
    require 'connection.php';
    $name=$_SESSION['username'];
     $name1=$_SESSION['user'];
    $query_Registation=mysqli_query($Database,"select *from student where Email ='$name'");
    
     $Registation_array=mysqli_fetch_array($query_Registation);
     $_SESSION['Registation_number']=$Registation_array['Registation'];
      if (isset($name1)==true) {
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
      background-color: whitesmoke;
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
            echo'<img  src="photo/'.$row['Photo'].'"';
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