<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.item{
			width: 20rem;
            height: 17rem;
            margin:  -7.1rem 0rem;
            padding-top: 120px; 
            padding-bottom: 10px; 
            background: transparent;
		}
		.second_item{
			width: 20rem;
            height: 17rem;
             margin:  -7.1rem 0rem;
            padding-top: 120px; 
            padding-bottom: 10px; 
			position: relative;
			background-color: yellow;
			transition: transform 0.8s;
			transform-style: preserve-3d;

		}
		.item:hover .second_item{
            transform: rotateY(180deg);
		}
		.back_item{
			background: red;
			transform: rotatey(180deg);
		}
	</style>
</head>
<body>
<div class="item">
	<div class="second_item">
		<div class="front_item">
			hellow and how are you
		</div>
		<div class="back_item">hello </div>
	</div>
</div>
</body>
</html>

<?php
require 'connection.php';
$name=mysqli_real_escape_string($Database,$_POST['username']);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="newframe.css">
	<style>
    body{
      font-family: 'Lora', serif;
    }
    .identitycard{
  border:1px solid rgb(0, 128, 255);
  width: 35rem;
  height: 28rem;
  margin:  0 90px;
}
.identitycard_frame {
  width: 34.90rem;
  border: 1px solid rgb(0, 128, 255);
  height: 30px;
  font-weight: bold;
  font-size: 25px;
  color: white;
  border-bottom: none;
  background-color: rgb(0, 128, 255); 
  margin:  0 0px;

}
.data_frame{
  border:1px solid rgb(0, 128, 255);
  width: 20rem;
  height: 18rem;
  margin:  -7.5rem 7rem;
  padding-top: 120px; 
  padding-bottom: 10px; 

 
}
 .imges{
 margin:  -8.5rem 7rem;
}
.SARASWATI{
 width: 12.4rem;
  border: 1px solid rgb(255, 128, 0);
  height: auto;
  font-weight: bold;
  font-size: 19.5px;
  color: white;
  border-bottom: none;
  background-color: rgb(255, 128, 0);
  margin:  5px 112px;
  padding: 0 60px;
  text-align: center;
  
}
 #img{
  font-size: 30px;
  width: 50px;
  height: 50px;
  border: 10px;
  padding: 16px 120px;
  opacity: 1;
   margin:  -5.5rem 0rem;
  position: absolute;
  text-align: left;
}
</style>
</head>
<body>
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
     <div class="identitycard">
     <table class="data_frame">

     <?php
     while ($row=mysqli_fetch_array($result)) {
     	?>
     		<div class="identitycard_frame">Student ID Card</div>
        
        <div class="SARASWATI" style="font-size: 40px; word-spacing: 2px; ">SARASWATI <div style="font-size: 15px;">SHISHU MANDIR NOWGONG CHHATARPUR</div></div>
        <img src="shishu.png" id="img">
     		<?php 
            $a="'";
        echo'      
                                <div>  
                                    <img  class="imges" style="margin:  5px 232px;position:relative;" src="photo/'.$row['Photo'].'"alt="Image"height="100px";width="100px";/> 
                                </div>
                               
            	<tr>
            	   <th>Student</th>
            	   <td>:-'.strtoupper($row["FirstName"].$row['LastName']).'</td>
            	</tr>
            	<tr>
            	   <th>Father</th>
            	   <td>:-'.strtoupper($row["FatherName"]).'</td>
            	</tr>
                <tr>
            	   <th>Mother</th>
            	   <td>:-'.strtoupper($row["MotherName"]).'</td>
            	</tr>
            	<tr>
            	   <th>DOB</th>
            	  <td>:-'.$row["DOB"].'</td>
            	</tr>
            	<tr>
            	   <th>Contact</th>
            	   <td>:-'.$row["Contact"].'</td>
            	</tr>

              <tr>
                 <th style="position:fixed;">Address</th>
                 <td style="font-size:14px;">:-'.$row['Permanet_Address'].'</td>
              </tr>';
              }?>
            </div>
            </table>
          </div>
     	<?php
  } 
  else{
    ?>
     <script> window.location.reload();
      </script>
      <?php
  }
?>
</body>
</html>