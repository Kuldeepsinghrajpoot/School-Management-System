<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Result</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="Result.css">
   </head>
   <body>
      <div class="Coloumn">
      <div  align="center" style="margin-top: -10px;padding: 0">
         <h1>Student's Result</h1>
      </div>
      <form method="post" id="frmCaptcha">
         <table>
            <tr>
            <th>
            <td>REGISTATION NUMBER</td>
            <td><input type="text" name="REGISTATION" id="REGISTATION"   ></td>
            </th>
            </tr>
            <tr>
            <th>
            <td>MONTH</td>
            <td><input type="text" name="MONTH" id="Studentdata"   ></td>
            </th>
            </tr>
            <tr>
               <th>
               <td>Roll Number</td>
               <td><input type="text" name="Roll" id="Rolldata"  >
               </td>
               </th>
            </tr>
            <tr>
            </tr>
         </table>
                  <div style="border:1px solid blue;">
            <table class="tabledata">
               <tr id="trdata" style="border: 1px solid black;">
                  <td>SN.</td>
                  <td>SUBJECT NAME.</td>
                  <TD>THEORY </TD>
                  <TD>PRATICAL</TD>
               </tr>
               <td>01</td>
               <td>Hindi</td>
               <td><input type="text" name="Hindi" id="Hindi"></td>
               <td><input type="text" name="HindiPratical" id="HindiPratical"></td>
               </tr>
               <tr>
                  <td>02</td>
                  <td>English</td>
                  <td><input type="text" name="English" id="English"></td>
                  <td><input type="text" name="EnglishPratical" id="EnglishPratical"></td>
               </tr>
               <tr>
                  <td>03</td>
                  <td>Math</td>
                  <td><input type="text" name="Math" id="Math"></td>
                  <td><input type="text" name="MathPratical" id="MathPratical"></td>
               </tr>
               <tr>
                  <td>04</td>
                  <td>Science</td>
                  <td><input type="text" name="Science" id="Science"></td>
                  <td><input type="text" name="SciencePratical" id="SciencePratical"></td>
               </tr>
               <tr>
                  <td>05</td>
                  <td>Social Science</td>
                  <td><input type="text" name="Social" id="Social"></td>
                  <td><input type="text" name="SocialPratical" id="SocialPratical"></td>
               </tr>
               <tr>
                  <td>06</td>
                  <td>Sanskrit</td>
                  <td><input type="text" name="Sanskrit" id="Sanskrit"></td>
                  <td><input type="text" name="SanskritPratical" id="SanskritPratical"></td>
               </tr>
            </table>
         </fieldset>
         <button type="button" class="btn btn-default" onclick="submit_data()">Submit</button>
      </div>
      </form>
      <p id="p"></p>
      <script src="jquery-3.4.1.min.js"></script>
      <script>
         function submit_data(){
           var frmCaptcha = document.getElementById("Hindi");
           if (frmCaptcha.value==="") {
               alert("blank");
               
               frmCaptcha.focus();
               return false;
           } else {
               jQuery.ajax({
               url:'default.php',
               type:'post',
               data:jQuery('#frmCaptcha').serialize(),
               success:function(data){
                  /* document.getElementById('frmCaptcha').reset();
                   alert(data);*/
                   $("#p").html(data);
               }
           });
           }
         }
         
      </script>
   </body>
</html>