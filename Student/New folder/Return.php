<?php session_start();?>
 <head>
  <title>Database</title>
  <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

#customers td, #customers th {
  border: 1px solid #ddd;

  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2; }

#customers tr:hover {background-color: #ddd;}

#customers th {

  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<div><a href="Logout"> Logout</a> </div>
<?php


 if ($_SESSION['username']==true) {
       $Email=$_SESSION['username'];
    $Database = mysqli_connect('localhost','root','');
       mysqli_select_db($Database,'school');
      if ($Database===false) {
        die("could not connect to the Database".mysqli_connection_error());
      }
    echo "<center> <h1> ".$_SESSION['username']. "</h1></center>";
    $sql="select *from student where Email='$Email'";
           $result = mysqli_query($Database, $sql);
           $num=mysqli_num_rows($result);
               // output data of each row
            ?>
             
              <table  id="customers">
                <tr>
                <th>FirstName  </th>
                <th>LastName   </th>
                <th>FatherName </th>
                <th>MotheName  </th>
                <th>Contact    </th>
                <th>Email      </th>
              </tr>
            
            <?php

                 while($row = mysqli_fetch_array($result)) {
          //echo $row["file"]."<br>";
            ?>
                <tr>
              <td><?php echo $row['FirstName'];  ?></td>
              <td><?php echo $row['LastName'];  ?></td>
              <td><?php echo $row['FatherName'];  ?></td>
              <td><?php echo $row['MotherName'];  ?></td>
              <td><?php echo $row['Contact'];  ?></td>
              <td><?php echo $row['Email'];  ?></td>
              </tr>        
  <?php
 }   
?>
 </table>
 <?php


     mysqli_close($Database);
  } 
  else{
    header("location:Login");
  }

?>