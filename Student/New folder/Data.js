//DATABASE CONNECTIVITY AND THIS CONNECT TO THE FILE OF DATA.PHP FILE 
// IT IS USED FOR THE VALIDATION AND CHECKING DETAILS ARE FILLED OR NOT..

     function ProcessData(){
			var fname = document.getElementById('fname');
			
					
			var checkFatherName = /[A-Za-z\s]/ig.test(fname.value);
			
			if (checkFatherName==false) {
			     fname.value="";
                fname.placeholder=" Insert  FatherName";
                fname.focus();
				return false;
			}
			if (fname.value.length<3) {
				fname.value="";
				 fname.placeholder=" Insert valid  FatherName";
				fname.focus();
				return false;
			}
			
			//@LAST NAME CHECK HERE .................
			var motherName = document.getElementById('mname');
			var checkMotherName = /[A-Za-z\s]/ig.test(motherName.value);
			if(motherName===true){
              mname.value="";
             mname.placeholder=" Insert  FatherName";
             motherName.focus();
				return false;
			}
			if (motherName.value.length<3) {
				mname.value="";
				mname.placeholder=" Insert valid MotherName";
				motherName.focus();
				return false;
			}

			var gender= document.getElementById('Gender');
                  if (gender.value=='select') {
                  	gender.focus();
                  	return false;
                  }
                  var catagory= document.getElementById('Catagory');
                  if (catagory.value=='Select') {
                  	catagory.focus();
                  	return false;
                  }
                  var dob= document.getElementById('dob');
                  if (dob.value=='') {
                  	dob.focus();
                  	return false;
                  }
                  var CV= document.getElementById('CV');
                  var checkCV =/^[a-z]+$/ig.test(CV.value);
                  if (CV.value=='') {
                  	
                    CV.placeholder=" Insert City/Vellage";
                  	CV.focus();
                  	return false;
                  }
                  if(checkCV==true){
                    
                  }
                  else{
                  	  CV.value="";
                      CV.placeholder="Insert City/Vellage";
                      CV.focus();
                  	return false;
                  }
                  var dist= document.getElementById('dist');
                  var checkdist = /^[a-z]+$/ig.test(dist.value);
                  
                  if (dist.value=='') {
                  	dist.focus();
                  	 dist.placeholder=" Insert Dist";
                  	return false;
                  }
                  if(checkdist===true){
                  	
                  }
                  else{
                  	dist.focus();
                  	 dist.placeholder=" Insert valid Dist";
                  	return false;
                  }
                var ParentContact = document.getElementById("ParentContact");
               
			if (ParentContact.value.length!=10) {
				ParentContact.placeholder=" insert phone number";
				ParentContact.focus();
				return false;
			}
			var Contact = document.getElementById("contact");
			if (Contact.value.length!=10) {
				Contact.placeholder=" insert phone number";
				Contact.focus();
				return false;
			}
		
		    // EMAIL ID VALIDATION
			var email = document.getElementById("Email");
			var emailCheck =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
			//var emailCheck = /^([a-zA-Z0-9.!#$%&*+/=?^-_~`][@][gmail][.][com])$/g;
			var Email = emailCheck.test(email.value);
			if (Email==false) {
				email.placeholder=" insert Email"
                email.focus();
				return false;
            }
			if (email.value=="") {
              email.placeholder=" insert Email";;
			}
			
			 var Temprary= document.getElementById('Temprary');
                  var checkTemprary = /[A-Za-z0-9'\.\-\s\,]/ig.test(Temprary.value);
                  
                  if (Temprary.value=='') {
                  	Temprary.placeholder="Insert  Temprary Address";
                  	Temprary.focus();
                  	return false;
                  }
                  if(checkPermanet===false){                  	
                  	Temprary.placeholder="Insert Valid Temprary Address";
                  	Temprary.focus();
                  	return false;
                  } 
                   var Permanet= document.getElementById('Permanet');
                  var checkPermanet = /[A-Za-z0-9'\.\-\s\,]/ig.test(Permanet.value);
                 
                  if (Permanet.value=='') {
                  	Permanet.placeholder="Insert Permanet Address";
                  	Permanet.focus();
                  	return false;
                  }
                  if(checkPermanet===false){
                  	Permanet.placeholder="Insert Valid Permanet Address";
                  	Permanet.focus();
                  	return false;
                  }
                  var pin = document.getElementById("pin");
			if (pin.value.length!=6) {
				pin.value="";
				pin.placeholder=" insert PIN number";
				pin.focus();
				return false;
			}
			
			var POST= document.getElementById('POST');
			var checkPOST = /^[a-z]+$/ig.test(POST.value);
			if (POST.value=='') {
                  	POST.focus();
                  	 POST.placeholder=" Insert POST";
                  	return false;
                  }
                  if(checkPOST==false){
                  	POST.value="";
                  	POST.placeholder=" Insert POST";
                  	POST.focus();
                  	 
                  	return false;
                  }
           
     }
