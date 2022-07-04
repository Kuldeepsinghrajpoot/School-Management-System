<?PHP
require 'connection.php';
$Months = mysqli_real_escape_string($Database,$_POST['Month']);
      if(mysqli_query($Database,"delete from declare_admitcard where Month='$Months'")){
      	echo "success";
      }
      else {
      	echo "no success";
      }
     // UPDATE student s JOIN examination e on s.Registation = e.Registation SET Declare_Result='yes' WHERE class ='8A'

?>
