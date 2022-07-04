function Process(argument) {
	       const check = /^[a-z]+$/ig;
			var name = document.getElementById('name');

			
			var checkData = /[A-Za-z0-9'\.\-\s\,]/ig.test(name.value);
			if (checkData==true) {
				 document.getElementById('error').innerHTML="";
			}else{
             document.getElementById('error').innerHTML="please insert valid name";
             name.focus();
				return false;
			}
			if (name.value.length<3) {
				document.getElementById('error').innerHTML="please insert valid NAME";
				name.focus();
				return false;
			}
			
			//@LAST NAME CHECK HERE .................

			var lastname = document.getElementById('lastname');
			var checkname = /^[a-z]+$/ig.test(lastname.value);
			if(checkname===true){
				document.getElementById('error1').innerHTML="";
			}else{
            document.getElementById('error1').innerHTML="please insert lastname";
             lastname.focus();
				return false;
			}
			if (lastname.value.length<3) {
				document.getElementById('error1').innerHTML="please insert correct lastname";
				lastname.focus();
				return false;
			}
			// PHONE NUMBER HERE
		    var contact = document.getElementById("contact");
			if (contact.value.length!=10) {
				document.getElementById('error2').innerHTML="please insert phone number";
				contact.focus();
				return false;
			}else{
				document.getElementById('error2').innerHTML="";
			}
		
		    // EMAIL ID VALIDATION
			var email = document.getElementById("Email");
			alert(email.value);
			var emailCheck =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
			//var emailCheck = /^([a-zA-Z0-9.!#$%&*+/=?^-_~`][@][gmail][.][com])$/g;
			var Email = emailCheck.test(email.value);
			if (Email==false) {
				document.getElementById('error3').innerHTML="check your email now";
                email.focus();
				return false;
                
			}
			else{
				document.getElementById('error3').innerHTML="";
			}
			if (Email) {
               document.getElementById('error3').innerHTML="";
			}
			else{
				document.getElementById('error3').innerHTML="check your email now";
				email.focus();
				return false;
			}
			  
			  //PASSWORD VALIDATION
    var password = document.getElementById("password");
   // alert(password.value);
   if (password.value){
   	document.getElementById('error4').innerHTML="";
   }
   	else{
   		document.getElementById('error4').innerHTML="ensert password here";
   		password.focus();
   		return false;
   	}
    if (password.value.length<8) {
         document.getElementById('error4').innerHTML="check your password gratter then 8 digit";
         password.focus();
         return false;
    }
    else{
    	document.getElementById('error4').innerHTML="";
    }
    if (password.value.length>15) {
       document.getElementById('error4').innerHTML="check your password less then 8 digit";
    }
    else{
    	 document.getElementById('error4').innerHTML="";
    }
    //RETYPE VALIDATION
     var confirmpassword = document.getElementById("confirmpassword");
   
    if (password.value!=confirmpassword.value){
       document.getElementById('error5').innerHTML="password not matched";
       confirmpassword.focus();
       return false;
    }
    else{
    	document.getElementById('error5').innerHTML="";
    }
}

function LoginProcess(){

	var password = document.getElementById("password");
   // alert(password.value);
   if (password.value){
   	document.getElementById('error4').innerHTML="";
   }
   	else{
   		document.getElementById('error4').innerHTML="ensert password here";
   		password.focus();
   		return false;
   	}
   	
	var email = document.getElementById("Email");
			
			var emailCheck =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
			//var emailCheck = /^([a-zA-Z0-9.!#$%&*+/=?^-_~`][@][gmail][.][com])$/g;
			var Email = emailCheck.test(email.value);
			if (Email==false) {
				document.getElementById('error3').innerHTML="check your email now";
                email.focus();
				return false;
                
			}
			else{
				document.getElementById('error3').innerHTML="";
			}
			if (Email) {
               document.getElementById('error3').innerHTML="";
			}
			else{
				document.getElementById('error3').innerHTML="check your email now";
				email.focus();
				return false;
			}
	}
    function ResetProcess(){

	var email = document.getElementById("Email");
			
			var emailCheck =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
			//var emailCheck = /^([a-zA-Z0-9.!#$%&*+/=?^-_~`][@][gmail][.][com])$/g;
			var Email = emailCheck.test(email.value);
			if (Email==false) {
				document.getElementById('error3').innerHTML="check your email now";
                email.focus();
				return false;
                
			}
			else{
				document.getElementById('error3').innerHTML="";
			}
			if (Email) {
               document.getElementById('error3').innerHTML="";
			}
			else{
				document.getElementById('error3').innerHTML="check your email now";
				email.focus();
				return false;
			}
			var contact = document.getElementById("contact");
			if (contact.value.length!=10) {
				document.getElementById('error2').innerHTML="please insert phone number";
				contact.focus();
				return false;
			}else{
				document.getElementById('error2').innerHTML="";
			}
}
function UDProcess(){
 var password = document.getElementById("password");
   // alert(password.value);
   if (password.value){
   	document.getElementById('error4').innerHTML="";
   }
   	else{
   		document.getElementById('error4').innerHTML="ensert password here";
   		password.focus();
   		return false;
   	}
    if (password.value.length<8) {
         document.getElementById('error4').innerHTML="check your password gratter then 8 digit";
         password.focus();
         return false;
    }
    else{
    	document.getElementById('error4').innerHTML="";
    }
    if (password.value.length>15) {
       document.getElementById('error4').innerHTML="check your password less then 8 digit";
    }
    else{
    	 document.getElementById('error4').innerHTML="";
    }
    var confirmpassword = document.getElementById("confirmpassword");
   
    if (password.value!=confirmpassword.value){
       document.getElementById('error5').innerHTML="password not matched";
       confirmpassword.focus();
       return false;
    }
    else{
    	document.getElementById('error5').innerHTML="";
    }
}
