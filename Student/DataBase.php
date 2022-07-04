<!DOCTYPE html>
<html>
<head>
  <title>Database</title>
   <style>
                @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;0,700;1,600&display=swap');
       </style>
      <style type="text/css">
         body{
            font-family: 'Lora', serif;
         }
      </style>
</head>
<body>
<?php
      $Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
      if ($Database===false) {
        die("could not connect to the Database".mysqli_connection_error());
      }
    
      if ($_POST) {
         $FatherName         = mysqli_real_escape_string($Database,$_POST['fatherName']);
         $MotherName         = mysqli_real_escape_string($Database,$_POST['motherName']);
         $pin                = mysqli_real_escape_string($Database,$_POST['pin']);
         $FirstName          = mysqli_real_escape_string($Database,$_POST['name']);
         $LastName           = mysqli_real_escape_string($Database,$_POST['lastname']);             
         $Contact            = mysqli_real_escape_string($Database,$_POST['contact']);
         $Email              = mysqli_real_escape_string($Database,$_POST['Email']);      
         $password           = mysqli_real_escape_string($Database,$_POST['password']);
         $dob                = mysqli_real_escape_string($Database,$_POST['dob']);          
         $Gender             = mysqli_real_escape_string($Database,$_POST['Gender']);      
         $Catagory           = mysqli_real_escape_string($Database,$_POST['Catagory']);
         $City               = mysqli_real_escape_string($Database,$_POST['CV']);
         $Dist               = mysqli_real_escape_string($Database,$_POST['Dist']);          
         $point              = mysqli_real_escape_string($Database,$_POST['point']);
         $Temprary           = mysqli_real_escape_string($Database,$_POST['Temprary']); 
         $Permanet           = mysqli_real_escape_string($Database,$_POST['Permanet']);
         $Registation        = mysqli_real_escape_string($Database,$_POST['Registation']);   
         $Addhar             = mysqli_real_escape_string($Database,$_POST['Addhar']);
         $samgra_id          = mysqli_real_escape_string($Database,$_POST['samgra_id']);     
         $Admission_Date     = mysqli_real_escape_string($Database,$_POST['Admission_Date']);  
         $Admission_fees     = mysqli_real_escape_string($Database,$_POST['Admission_fees']);
         $class              = mysqli_real_escape_string($Database,$_POST['class']);
         $Passing_Year       = mysqli_real_escape_string($Database,$_POST['Passing_Year']);    
         $Passing_Class      = mysqli_real_escape_string($Database,$_POST['Passing_Class']);
         $Pass_out_School    = mysqli_real_escape_string($Database,$_POST['Pass_out_School']);
         $pass_out_City      = mysqli_real_escape_string($Database,$_POST['pass_out_City']);
         $pass_out_post      = mysqli_real_escape_string($Database,$_POST['pass_out_post']);    
    $pass_out_school_address = mysqli_real_escape_string($Database,$_POST['pass_out_school_address']);
         $pass_out_tehsel    = mysqli_real_escape_string($Database,$_POST['pass_out_tehsel']);
         $pass_out_dist      = mysqli_real_escape_string($Database,$_POST['pass_out_dist']);

           /*$class = explode('.',$class,2);

              if ($class==6!!$class==7!!$class==8!!$class==9!!$class==10) {
                $subject1='Hindi';
                $subject2='English';
                $subject3='Sanskrit';
                $subject4='SocialScience';
                $subject5='Math';
                $subject6='Science';
                $subject7='Computer';

              }
              if ($class==9!!$class==10) {
                $p1='-';
                $p2='-';
                $p3='-';
                $p4='-';
                $p5='Science';
                              }
              if ($class==11) {
                $subject1='Hindi';
                $subject2='English';
                $subject3='Math';
                $subject4='Physics';
                $subject5='Chemistry';

                $p1='-';
                $p2='-';
                $p3='-';
                $p4='Physics';
                $p5='Chemistry';
                // code...
              }
              if ($class==11) {
                $subject1='Hindi';
                $subject2='English';
                $subject3='BIO';
                $subject4='Physics';
                $subject5='Chemistry';

                $p1='-';
                $p2='-';
                $p3='Physics';
                $p4='Bio';
                $p5='Chemistry';
                // code...
              }if ($class==11) {
                $subject1='Hindi';
                $subject2='English';
                $subject3='b';
                $subject4='Physics';
                $subject5='Chemistry';

                $p1='-';
                $p2='-';
                $p3='Physics';
                $p4='Bio';
                $p5='Chemistry';
                // code...
              }
*/



 
           $files=explode('.',$_FILES['file']['name']);
           $file_loc=$_FILES['file']['tmp_name'];
           $end =end($files);
           $new_file_name = strtolower($end);
           $final_file = rand(100,999).'.'. $new_file_name;
           $folder ="photo/".$final_file;
           $signature_Students = explode('.',$_FILES['signature']['name']);
           $signature_Students_new =end( $signature_Students);
           $new_extension =strtolower($signature_Students_new);
           $extension  = array("png","jpeg","jpg");
          
        if (in_array($new_extension, $extension)){
              $signature_new = rand(100,999).'.'.$signature_Students_new;
              $new_size_signature = (int)($signature_new);
               $new_size_signature =  $new_size_signature/1024;
           if ($new_size_signature<2) {
                 //echo  $new_size_signature;
                  
          $querys ="insert into student
           (FirstName,LastName,Contact,Email,Password,FatherName,MotherName,pin,DOB,Catagory,Dist,Gender,POST,CityVillage,Temprary_Address,Permanet_Address,Photo,Registation,Addhar,samgra_id,Admission_Date,Admission_fees,class,Passing_Year,Passing_Class,Pass_out_School,pass_out_City,pass_out_post,pass_out_school_address,pass_out_tehsel,pass_out_dist,Signature)

           values('$FirstName','$LastName', '$Contact','$Email','$password','$FatherName','$MotherName','$pin','$dob','$Catagory','$Dist','$Gender','$City','$point','$Temprary','$Permanet','$final_file','$Registation','$Addhar','$samgra_id','$Admission_Date','$Admission_fees','$class','$Passing_Year','$Passing_Class','$Pass_out_School','$pass_out_City','$pass_out_post','$pass_out_school_address','$pass_out_tehsel','$pass_out_dist','$signature_new')";
           if(mysqli_query($Database,$querys)){
            move_uploaded_file($_FILES['signature']['tmp_name'],"image/".$signature_new);
            move_uploaded_file($file_loc, $folder);

             echo "
            <div style='
              margin:50px 30rem;
              width:270px;
              height:270px;
              border:1px solid rgba(0,0,0,0.1);
              background:white;
              color:black;
              position: absolute;
              box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1), 0px 0px 10px 5px rgba(0,0,0,0.1);'>
              <div style='margin: 200px 0; text-align: center; font-weight:bold;'>Successfully Account  has been Created <div>
                <div style='position: absolute; margin: -13rem 50px;  font-family: 'Lora', serif; '>
                  <img src='suceess.png'>
                </div>
              </div>
                   <script>
        setTimeout(function(){
          window.location.href='./';
        },3000);
      </script>";
           }
           else{
           echo "
            <div style='
              margin:50px 30rem;
              width:270px;
              height:270px;
              border:1px solid rgba(0,0,0,0.1);
              background:white;
              color:black;
              position: absolute;
              box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1), 0px 0px 10px 5px rgba(0,0,0,0.1);'>
              <div style='margin: 200px 0; text-align: center; font-weight:bold;'>Faild <div>
                <div style='position: absolute; margin: -13rem 50px;  font-family: 'Lora', serif;'>
                  <img src='error.jpg'>
                </div>
              </div>
            ";
           }
            }
            else
                echo "large";
             
            }else{
              echo"
            <div style='
              margin:50px 30rem;
              width:270px;
              height:270px;
              border:1px solid rgba(0,0,0,0.1);
              background:white;
              color:black;
              position: absolute;
              box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1), 0px 0px 10px 5px rgba(0,0,0,0.1);'>
              <div style='margin: 210px 10px; text-align: center; font-weight:bold;'>Faild <div>
                <div style='position: absolute; margin: -13rem 50px;   font-family: 'Lora', serif;'>
                  <img src='error.jpg'>
                </div>
              </div>
            ";
            }
            }
    
 
 else {
  ?>
  <!-- <script language="javascript">
    top.location.href = "Create"; 
</script> -->
<?php 
}
     mysqli_close($Database);  
?>
</form>
</body>
</html>