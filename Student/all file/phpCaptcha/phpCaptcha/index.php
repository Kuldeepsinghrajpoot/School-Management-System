<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Captcha Form</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
     
   </head>
   <body>
   <div class="Coloumn">
      <div  align="center" style="margin-top: -10px;padding: 0"><h1>Student's Result</h1></div>
      <form method="post" id="frmCaptcha"> 
        <table>
                <tr>
                  <th>
                     <td>Student's Name</td>
                     <td><input type="text" name="Student" id="Student"></td>
                  </th>
                </tr>
                <tr>
                  <th>
                     <td>Roll Number</td>
                     <td><input type="text" name="Roll" id="Roll"></td>
                  </th>
                </tr>
                <tr>
                  <th>
                     <td>Hindi</td>
                     <td><input type="text" name="Hindi" id="Hindi"></td>
                  </th>
                </tr>
                <tr>
                  <th>
                     <td>English</td>
                     <td><input type="text" name="English" id="English"></td>
                  </th>
                </tr>
                <tr>
                  <th>
                     <td>Math</td>
                     <td><input type="text" name="Math" id="Math"></td>
                  </th>
                </tr>
                <tr>
                  <th>
                     <td>Science</td>
                     <td><input type="text" name="Science" id="Science"></td>
                  </th>
                </tr>
                <tr>
                  <th>
                     <td>Social Science</td>
                     <td><input type="text" name="Social" id="Social"></td>
                  </th>
                </tr>
                <tr>
                  <th>
                     <td>Sanskrit</td>
                     <td><input type="text" name="Sanskrit" id="Sanskrit"></td>
                  </th>
                </tr>
        </table>
                  <button type="button" class="btn btn-default" onclick="submit_data()">Submit</button>
               </form>
            </div>
         </div>
      </div>
	  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	  <script>
	  function submit_data(){
		jQuery.ajax({
			url:'insert.php',
			type:'post',
			data:jQuery('#frmCaptcha').serialize(),
			success:function(data){
				alert(data);
			}
		});
	  }
	  </script>
   </body>
</html>