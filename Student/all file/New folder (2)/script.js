function Process(argument) {
			var name = document.getElementById('name');
			const check = /[a-z]/i;
			var checkData = check.test(name.value);
			if (name.value) {
				
			}else{
             alert("error");
             name.focus();
				return false;
			}
			if (name.value.length<3) {
				alert("wrong..................");
				name.focus();
				return false;
			}
			if (checkData==false) {
                alert("error");
                name.focus();
				return false;
			}
			//LAST NAME CHECK HERE .................
			var name1 = document.getElementById('lastname');
			const check1 = /[a-z]/i;
			var checkData1 = check1.test(name1.value);
			if (name1.value) {
				
			}else{
             alert("error");
             name1.focus();
				return false;
			}
			if (name1.value.length<3) {
				alert("wrongsssss..................");
				name1.focus();
				return false;
			}
			if(checkData1==false) {
                alert("error");
                name1.focus();
				return false;
			}
		    var contact = document.getElementById("contact");
		   
			if (contact.value.length!=10) {
				alert("wrong");
				contact.focus();
				return false;
			}

			var email = document.getElementById("Email");
			var emailCheck =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
			//var emailCheck = /^([a-zA-Z0-9.!#$%&*+/=?^-_~`][@][gmail][.][com])$/g;
			var Email = emailCheck.test(email.value);
			/*if (Email==false) {
				alert("check your email now");
                email.focus();
				return false;
                
			}*/
			if (Email) {

			}
			else{
				alert("wrong");
				email.focus();
				return false;
			}

    var password = document.getElementById("password");
   // alert(password.value);
   if (password.value){}
   	else{
   		alert("ensert password here");
   		password.focus();
   		return false;
   	}
    if (password.value.length<8&&password.value.length>15){
         alert("wrong");
         password.focus();
         return false;
    }
     var confirmpassword = document.getElementById("confirmpassword");
   
    if (password.value!=confirmpassword.value){
       alert("password not matched");
       confirmpassword.focus();
       return false;
    }
  
}
