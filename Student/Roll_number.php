<?php
 
 require 'connection.php';

 $query=mysqli_query($Database,"select *from student where Class ='8A'");
 ?>
 <form method="post" id="sending" action="reciving.php">
 <table>
 	<?php
 	$a='';
 while ($result=mysqli_fetch_assoc($query)) {
 	echo '<tr>
            <td>
              '.$result['FirstName'].'
            <td>
            <td>
              <input type="text" name="'.$result['Registation'].'s'.'" value="'.$result['RollNumber'].$a++.'">
            <td>
            <td>
             
            <td>
 	     </tr>';
 }
?>
 <input type="submit">
</table>
</form>
