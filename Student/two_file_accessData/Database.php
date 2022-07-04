 <?php  
  $connect = mysqli_connect('localhost','root','');
       mysqli_select_db($connect,'school');
        if ($connect===false) {
        die("could not connect to the Database".mysqli_connection_error());
      }
if(isset($_FILES['file'])){   
    print_r($_FILES); 
           $file        = $_FILES['file']['name'];
           $file_loc    = $_FILES['file']['tmp_name'];
           $file_size   = $_FILES['file']['size'];
           $file_type   = $_FILES['file']['type'];
           $folder      ="image/".$file;
 
 /* new file size in KB */
 $new_size = $file_size/1024;  
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 $File =1;
 if ($File==1) {
  
 if(move_uploaded_file($file_loc,$folder)){
  $sql="INSERT INTO students(file,type,size) VALUES('$final_file','$file_type','$new_size')";
  mysqli_query($connect,$sql);
  echo "File sucessfully upload";
  $File=0;
 }
   else
 {
  echo "Error.Please try again";
    }
}
else{
  echo "alreday inserted".$File;

}
  }
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $sql = "SELECT *FROM students";  
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo $row["file"]."<br>";
         //echo "string";
                     echo '  
                          <tr>  
                               <td>  
                                     <img src="image/'.($row['file'] ).'" height="200" width="200" class="img-thumnail" />
                               </td>  
                          </tr>'; 
    }
}
                ?>  
              
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 