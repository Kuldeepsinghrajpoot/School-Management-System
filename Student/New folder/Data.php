<?php session_start(); ?>
<html>
<head>
	<title>Informations</title>
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
<!-- <meta name="viewport" content="width=360, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
  <link rel="stylesheet" type="text/css" href="style4.css">
	<script type="text/javascript" src="Data.js"></script>
</head>
<body>
  <center id="contains">
<!-- <h1>SARASWATI HEIGHER SECONDRY SCHOOL NOWGONG CHHATARPUR MADHYA PRADESH</h1> -->

		    <div class="contain">
          <?php 
          if ($_REQUEST){
             $_SESSION['name']       = $_REQUEST['name'];
             $_SESSION['lastname']   = $_REQUEST['lastname'];
             $_SESSION['contact']    = $_REQUEST['contact'];
             $_SESSION['Email']      = $_REQUEST['Email'];
             $_SESSION['[password']  = $_REQUEST['password'];
           }
           ?>
          <form class="form" method="post" action="Database" onsubmit="return ProcessData()">
           
            <fieldset class=" fieldset">
              <legend>Inforamtions</legend>
              <table class="form">
       <tr>
         <TD><label> Regestation Number</label></TD>
         <td>
              <input type="Number" name="Regestation"  id="reg">
          </td>
        </TD>
         <td>  <label> Roll number</label></td>
          <td>  <input type="text" name="Roll number"></td>
       </tr>
       <tr>
         <td><label>  Father's name</label></td>
             <td> <input type="text" name="fatherName"  id="fname"> <div id="error"></div></td>
         <td><label>  Mother's name</label></td>
             <td> <input type="text" name="motherName" id="mname">
</td>
    </tr>

<tr><td>
           <label> Gender:</td><td>
                      <select name="Gender" id="Gender">
                        <option value="select">Select</option>
                        <option value="Male" >Male</option>
                        <option value="Female">Female</option>
                      </select></td>
           <td> <label>Catagory</label>:</td><td>
                      <select name="Catagory" id="Catagory">
                         <option value="Select">Select</option>
                        <option value="OBC">OBC</option>
                        <option value="GEN">GEN</option>
                        <option value="SC">SC</option>
                        <option value="ST">ST</option>
                      </select></td></tr>
            
          <tr> <td> <label>DOB</label></td>
               <td><input type="date" name="dob" id="dob" placeholder="dd/mm/yy"></td></tr>

           <!-- <tr><td> <label> Contact Informations</label></td></tr> -->
           
           </table>
           </fieldset>
<fieldset>
  <legend>Address Details</legend>
           <table class="form">
          <tr><td><label>City/Village</label></td><td><input type="text" name="CV" id="CV"> </td>
            <td><label>Dist</label></td><td><input type="text" name="Dist" id="dist"> </td>

          </tr>
            <tr><Td><label>Temprary Address</label></Td><td>
            <textarea  rows="3" cols="30" name="Temprary" id="Temprary"></textarea></TD>
            <td><label>PIN</label></td><td><input type="number" name="pin" id="pin"> </td></tr>

            <tr><Td> <label>Permanet Address</label></Td><td>
            <textarea  rows="3" cols="30" name="Permanet" id="Permanet"></textarea></TD>
            <td><label>POST</label></td><td><input type="text" name="point" id="POST"> </td></tr>

</table>
</fieldset>
<fieldset>
<table class="form">
  <legend>Contacts Information</legend>
  <tr>
            <td><label>Phone number </label></td><td><input type="number" name="Contactumber" id="contact"> </td>
             <td><label>Parent's phone number </label></td><td>  <input type="number" name="ParentContact" id="ParentContact"></td></tr>
             <td><label>Email Id</label></td><td><input type="email" name="email" id="Email"></td>
</table class="form">
</fieldset>
   <fieldset>
    <legend>photo and Signature</legend>
<table class="form">
 
  <tr><td><label>Photo</label></td><td><input type="file" name="image"></td>
  <td><label>Signature</label></td><td><input type="file" name="signature"></td></tr>
  </table>
</table>
</fieldset>
<tr><td><button>Submit</button></Td></tr>
     </form>
</div>
</center>
</body>
</html>