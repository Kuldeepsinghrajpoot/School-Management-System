
<?php
// Check if image file is a actual image or fake image
if(isset($_POST["StudentsImage"])) {
  $target_dir = "image/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$target_files=$_FILES["fileToUpload"]["name"];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

 // print_r($check);
  if($check !== false) {
    //echo "File is an image - " . $check["mime"] . ".";
     print_r($check["mime"]);
    $uploadOk = 1;
    // here mime is return image extension 
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  
  print_r($target_files);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
   $Database=mysqli_connect('localhost','root','');
              mysqli_select_db($Database,'school');
              if ($Database==false) {
               die();
              }
$query="insert into students(file) values('$target_files') ";
 //echo mysqli_query($Database,$query);
if(mysqli_query($Database,$query)){
  echo "right";
 $sql = "SELECT *FROM students";  
$result = mysqli_query($Database, $sql);

if (mysqli_num_rows($result)>0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo $row["file"]."<br>";
         //echo "string";
                     echo '  
                          <tr>  
                               <td>  
                                     <img src="image/'.($row['file'] ).'" height="100px" width="100px" class="img-thumnail" />
                               </td>  
                          </tr>'; 
    }
}
}else{
  echo "wrong...........";
}
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
?>

</body>
</html>