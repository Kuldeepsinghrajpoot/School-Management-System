
  <?php
  require 'connection.php';
$Database = mysqli_connect("localhost", "root", "", "school");
$query = "select * from student where Email";
$result = mysqli_query($Database, $query);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | Dynamic Menu with Dynamic content in PHP using Jquery Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container">
   <br />
   <h2 align="center">Dynamic Menu with Dynamic content in PHP using Jquery Ajax</h2>
   <br />
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
           <a class="navbar-brand" href="#">Webslesson Tutorial</a>
        </div>
        <ul class="nav navbar-nav">
      <?php
      while($row = mysqli_fetch_array($result))
      {
       echo '
       <li id="'.$row["FirstName"].'"><a href="#">id="'.$row["Lastname"].'"><a href="#"></li>
       ';
      }
      ?>
        </ul>
     </div>
   </nav>
   <br />
   <span id="page_details"></span>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 function load_page_details(id)
 {
  $.ajax({
   url:"post.php",
   method:"POST",
   data:{id:id},
   success:function(data)
   {
    $('#page_details').html(data);
   }
  });
 }

 load_page_details(1);

 $('.nav li').click(function(){
  var page_id = $(this).attr("id");
  load_page_details(page_id);
 });
 
 
});
</script>
 