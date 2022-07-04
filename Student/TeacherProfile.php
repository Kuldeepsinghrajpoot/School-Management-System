<!-- this is used for insert data link in the login.php page-->
<?php
    session_start();
 $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con,'teacher');
  if($_POST['E']){
  if($_POST['E']==true){


        $Email  = mysqli_real_escape_string($con,$_POST['E']);
        $pass   = mysqli_real_escape_string($con,$_POST['pas']); 
         $sql    = "select *from teacher_information where  user_id= '$Email' and password = '$pass'";  
         $result = mysqli_query($con, $sql); 

         if (mysqli_num_rows($result)>0) { 
          $query=mysqli_query($con,"select *from teacher_information where  user_id ='$Email'");
          while ($fetch=mysqli_fetch_array($query)) {
             $_SESSION['username']=true;
             $_SESSION['Class_of_Student'] = $fetch['Class'];
             $Email1=$fetch['Email'];
         }
                   $ex=explode('@', $Email,2);
                 if ($ex[1]=="teacher") {

                       
                        ?>
                        <form method="GET" name="form_data" action="Teachers_Data">
                            <input type="hidden" name="url" value="<?php echo md5($Email1)?>">

                        </form>
                        <script type="text/javascript">
                            document.form_data.submit();
                        </script>
                        <?php
                 }
                 elseif ($ex[1]=="principal") {
                       ?>
                        <form method="GET" name="form_data" action="principle">
                            <input type="hidden" name="url" value="<?php echo md5($Email1)?>">

                        </form>
                        <script type="text/javascript">
                            document.form_data.submit();
                        </script>
                        <?php
                 }
             }

        else{
            ?>
             <script language="javascript">
              alert("Login failed. Invalid username or password");
             window.location.href = "./";
                  </script>
                  <?php
          }   
        }
  }
  else{
   header('location:Teacher');
    
  }
?>