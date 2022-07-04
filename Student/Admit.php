<?php
    require 'connection.php';
   $username=mysqli_real_escape_string($Database,$_GET['url']);
   $query1 = mysqli_query($Database,"select *from student where md5(Email)='$username'");
   $result1 = mysqli_fetch_array($query1);
   $Registation=$result1['Registation'];
   $query = mysqli_query($Database,"select *from student");
  // $result = mysqli_fetch_array($query);
   $_SESSION['user']=$username;
?>
<!DOCTYPE html>
<html>
<head>
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
<style type="text/css">
    body{
      font-family: 'Lora', serif;

    }
    .school_Details{
                width: 40rem;
        text-align: center;
        font-size: 20px;
         margin: 0 40px;
        opacity: 1;
    }
    /*table{
        width: 24rem; padding: 0 10PX; margin: 20px 10px;
        border-collapse: collapse;
    }
    table tr,td{
        margin: 0 0;
        padding: 0 -50px;
    }*/
    .img_s{
        width: 100px;
        height:100px;
        position: absolute;
        margin: 20px 35rem;
        border:1px solid blue;
    }
    .border{
        border:1px solid gray;
        width: 43.5rem;
        margin: 0 40px;
        
        height: 30rem;
        
    }
    

     #img1{
    
   opacity: 1;
   height: 50px;
   width: 50px;
  position: absolute;
 margin: 0px -70px;
   

}
.center{
    
    border:1px solid gray;
}

#img{
    text-shadow: 3px 3px 3px #BEBEBE;
   opacity: 0.20;
   height: 300px;
   width: 290px;
  position: absolute;
 margin: 80px 190px;
 text-align: center;
}
#td_{
    border-right: 1px solid black; 
}
th{
    background-color: rgba(20,20,200,0.1);
    color: black;
    border-bottom: 1px solid;
}
</style>
</head>
<body>
    <?php 
    require 'connection.php';
   
    
    $Examination='';
             $fetch_query = mysqli_query($Database,"select *from declare_admitcard");
            while($results = mysqli_fetch_array($fetch_query)){
                if ($results['Month']=='QUARTARLY EXAMINATION') {
                      $Examination='QUARTARLY EXAMINATION';
                      $date_Examination_Declare=$results['Date_Declare'];
                }
                else if($results['Month']=='HALFYEARLY EXAMINATION'){
                      $Examination='HALFYEARLY EXAMINATION';
                      $date_Examination_Declare=$results['Date_Declare'];
                }
                else if($results['Month']=='YEARLY EXAMINATION'){
                      $Examination='YEARLY EXAMINATION';
                      $date_Examination_Declare=$results['Date_Declare'];
                }
            }

             if ($Examination) {
                ?>
    <div style=" position: absolute; margin: -30px 42rem; cursor: pointer;">
        
    </div>
    <div class="border">
    <DIV class="school_Details"><img src="shishu.png" id="img1"> <u> SARASWATI HEIGHER SECONDERY  SCHOOL NOWGONG, CHHATARPUR MADHYA PRADESH<br>Admit Card</u></DIV>
<table style="margin: 0 10px;">
    <?php
     $data='';
    while($result = mysqli_fetch_array($query)){

        if(($result['Registation']==$Registation)) {
  $data='
    <tr>
        <td>NAME</td>
        <TD>'.strtoupper($result['FirstName']).' '.strtoupper($result['LastName']).'</TD>
         
    </tr>
    <img src="photo/'.$result['Photo'].'" class="img_s">
    <tr>
        <td>FATHERS NAME</td>
        <TD>'.strtoupper($result['FatherName']).'</TD>
        
    </tr>
    <tr>
        <td>CLASS</td>
        <TD>'.strtoupper($result['Class']).'</TD>
        
    </tr>
    <tr>
        <td>ROLL NUMBER</td>
        <TD>'.strtoupper($result['RollNumber']).'</TD>
        
    </tr>
    <tr>
        <td>EXAMINATION</td>
        <TD>'. $Examination.'</TD>
        </tr>
        <tr>
        <td>RELEASE DATE</td>
        <TD>'.$date_Examination_Declare.'</TD>
        
    </tr>
 <img src="shishu.png" id="img">

    ';

}
}
echo $data;

    ?>

</table>
<table align="center" class="center" style="border-collapse: collapse; border:1px solid gray; width: 42rem;">
    <tr style="">
        
        <Th id="td_"  rowspan="2" style=" text-align: center;">SN</Th>
        <th id="td_"  colspan="2" style="border:1px solid black; text-align: center;">SUBJECT NAME</th>
    </tr>
    <tr>
        <th id="td_"  style=" text-align: center;">THEORY</th>
        <Th id="td_"  style=" text-align: center;">PRATICAL</Th>
    </tr>

    <tr>
        <td id="td_"  style=" text-align: center;">01</td>
        <TD id="td_"  style=" text-align: center;">HINDI</TD>
        <TD id="td_"  style=" text-align: center;">-</TD>
    </tr>
    <tr>
        <td id="td_"  style=" text-align: center;">02</td>
        <TD id="td_"  style=" text-align: center;">ENGLISH</TD>
        <TD id="td_"  style=" text-align: center;">-</TD>

    </tr>
    <tr>
        <td id="td_"  style=" text-align: center;">03</td>
        <TD id="td_"  style=" text-align: center;">SANSKRIT</TD>
        <TD id="td_"  style=" text-align: center;">-</TD>
    </tr>
    <tr>
        <td id="td_"  style=" text-align: center;">04</td>
        <TD id="td_"  style=" text-align: center;">SOCIAL SCIENCE</TD>
        <TD id="td_"  style=" text-align: center;">-</TD>
    </tr>
    <tr>
        <td id="td_"  style=" text-align: center;">05</td>
        <TD id="td_"  style=" text-align: center;">SCIENCE</TD>
        <TD id="td_"  style=" text-align: center;">-</TD>
    </tr>
    <tr>
        <td id="td_"  style=" text-align: center;">06</td>
        <TD id="td_"  style=" text-align: center;">MATH</TD>
        <TD id="td_"  style=" text-align: center; ">-</TD>
    </tr>
</table>
<table style="padding: 20px 50px; width:110%;">
    <tr>
        <td style="margin: 0 20px;">
            <div>PRINCIPAL SIGNATURE</div>
        </td>
        <td>
            <div>CLASS TEACHER SIGNATURE</div>
        </td>
    </tr>
</table><div style="margin: 20px 30px; position: absolute; width: 20rem"> </div>
<div style="position: absolute; width: 20rem; margin: 10px 27rem; "> </div>
<?php
}
else{
    echo "<script> alert('Admit Card not found'); </script>"."<DIV style='border:1px solid blue; width: 100%; border:1px solid gray; text-align: center; border-bottom: none; background-color: blue;color: white; font-size:20px; box-shadow: 0 0 10px 10px rgba(0,0,0,0.1); margin: 150px 130px;'>Admit Card not found</DIV>";
}
?>
</div>
<script src="jquery-3.4.1.min.js"></script>
      <script>
            setTimeout(function(){ 

                window.close();

                 }, 3000);
            window.print();
            
  
      </script>
</body>
</html>