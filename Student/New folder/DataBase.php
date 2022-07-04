
<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Database</title>
</head>
<body>
<?php
      $Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
      if ($Database===false) {
        die("could not connect to the Database".mysqli_connection_error());
      }
      if ($_REQUEST) {
         $FatherName   = mysqli_real_escape_string($Database,$_REQUEST['fatherName']);
         $MotherName   = mysqli_real_escape_string($Database,$_REQUEST['motherName']);
         $pin          = mysqli_real_escape_string($Database,$_REQUEST['pin']);
         $FirstName    = mysqli_real_escape_string($Database,$_SESSION['name']);
         $LastName     = mysqli_real_escape_string($Database,$_SESSION['lastname']);             
         $Contact      = mysqli_real_escape_string($Database,$_SESSION['contact']);
         $ParentContact= mysqli_real_escape_string($Database,$_REQUEST['ParentContact']);           
         $Email        = mysqli_real_escape_string($Database,$_SESSION['Email']);       
         $password     = mysqli_real_escape_string($Database,$_SESSION['[password']);
         $dob          = mysqli_real_escape_string($Database,$_REQUEST['dob']);           
         $Gender       = mysqli_real_escape_string($Database,$_REQUEST['Gender']);       
         $Catagory     = mysqli_real_escape_string($Database,$_REQUEST['Catagory']);
         $City         = mysqli_real_escape_string($Database,$_REQUEST['CV']);
         $Dist         = mysqli_real_escape_string($Database,$_REQUEST['Dist']);           
         $point        = mysqli_real_escape_string($Database,$_REQUEST['point']);
         $Temprary     = mysqli_real_escape_string($Database,$_REQUEST['Temprary']);  
         $Permanet     = mysqli_real_escape_string($Database,$_REQUEST['Permanet']);
      /*$Image      = mysqli_real_escape_string($Database,$_REQUEST['image']);*/

   /*     $query = "select *from student where Email  ='$Email'";
        $query1= "select *from student where Contact='$Contact'";
       $Fatch =mysqli_query($Database,$query);
       $Fatch1=mysqli_query($Database,$query1);
      
  if (mysqli_num_rows($Fatch)>0){
    if (isset($_POST['contact'])) {       
       echo "<script>alert('Email  alredy insert here')</script>";
    }
    
      }
    if (mysqli_num_rows($Fatch1)>0){
        
        
          echo "<script>alert('contact alredy insert here')</script>";
          header("wrong");
         
       }
         else{*/
           $querys ="insert into student
           (FirstName,LastName,Contact,Email,Password,FatherName,MotherName,pin,DOB,Catagory,Dist,Gender,POST,CityVillage,Temprary_Address,Permanet_Address,Parents_phone_number)

           values('$FirstName','$LastName', '$Contact','$Email','$password','$FatherName','$MotherName','$pin','$dob','$Catagory','$Dist','$Gender','$City','$point','$Temprary','$Permanet','$ParentContact')";
           if(mysqli_query($Database,$querys)){
            ?>
            <script language="javascript">
    alert("Record inserted successfully");
    top.location.href = "Create"; //the page to redirect
    /* setTimeout(function(){
       location.reload();
   },10000);*/
</script> <?php
            echo "successfully";
           }
           else{
            echo "unsuccessfully";
           }
          
         // header("Location: Data");  
 }
 else {
    echo "0 results";
}

     mysqli_close($Database);  
?>
</form>


<!-- <script type="text/javascript">
  
</script> -->

</body>
</html>