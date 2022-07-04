
<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | Upload File without using Form Submit in Ajax PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 
 </head>
 <body>
  <br /><br />
   <div class="Coloumn">
      <table id="table" style=" margin: -50px 140px; top : 10px;padding: 0; height: 50px; width: 100px; position: absolute;">
    <tr>
      <td>
             <button type="button"  onclick="submit_data()">Student</button>                      
      </td>
       <td>
             <button type="Button"  onclick="Address()">Address</button>
      </td>
     <!--  <td>
             <button type="button"  onclick="idCard()">Contact</button>   
      </td> -->
       <td>
             <button type="Button"  onclick="Photo_Signature()">Photo&Signature</button>
      </td>
    </tr>
  </table>  
  <div class="container" style="width:700px;">
  
  
   <label>Select Image</label>
   <input type="file" name="file" id="file" />
   <br />
   <span id="uploaded_image"></span>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"updateData.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image').html(data);
    }
   });
  }
 });
});
</script>
