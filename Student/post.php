 <?php 
//fetch.php
 require 'connection.php';
if(isset($_POST["id"]))
{
 $Database = mysqli_connect("localhost", "root", "", "school");
 $query = "SELECT * FROM student WHERE FirstName = '".$_POST["id"]."'";
 $result = mysqli_query($Database, $query);
 $output = '';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <h1>'.$row["page_title"].'</h1>
  <p>'.$row["page_description"].'</p>
  ';
 }
 echo $output;
}


?>