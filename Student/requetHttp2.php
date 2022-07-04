<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<a href="ResultStore">a</a>
	<p id="p"> hello</p>
<?php 
 print_r($_POST['Email']);
?>
<button type="button" onclick="loadData()" id="button">Request data</button>
<script>
function loadData() {

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var but =  document.getElementById("p").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "ResultStore", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("Email=<?php echo $_POST['Email']?>");
 // var but=document.getElementById('button');
	//	but.style.visibility="hidden";
	  //  window.print();
		//but.style.visibility="visible";
}

</script>
</body>
</html>