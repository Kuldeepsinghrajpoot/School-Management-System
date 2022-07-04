function Process(argument) {
var Registation=document.getElementById('Registation');
if (Registation.value.length==0) {
Registation.placeholder="Insert Registation number here";
Registation.focus(); 
return false;
Registation.style.color="red";
}
if (Registation.value.length!=12){
Registation.placeholder="Insert Registation number here"; Registation.focus(); return false;
}
var addhar=document.getElementById('Addhar');
if (addhar.value.length==0){
addhar.placeholder="Insert addhar number here";addhar.focus(); return false;
addhar.style.color="red";
}
if (addhar.value.length!=12){
addhar.placeholder="your Addhar number is invalid please insert valid addhar number";
addhar.focus(); return false;  
}
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
/*here checking addhar and samgra id */
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
var samgra_id= document.getElementById('samgra_id');
if (samgra_id.value.length==0) {
samgra_id.focus();
samgra_id.placeholder="insert samgra id";
return false;
}
if(samgra_id.value.length!=9){
samgra_id.focus();
samgra_id.placeholder="check samgra id";
return false;
}
/*Current education details and much more here*/
var Admission_Date= document.getElementById('Admission_Date');
if (Admission_Date.value=='') {
Admission_Date.focus();
Admission_Date.placeholder="insert Admission_Date";
return false;
}
var Admission_fess= document.getElementById('Admission_fees');
if(Admission_fess.value==''){
Admission_fess.focus();
Admission_fess.placeholder="Admission_fees";
return false;
}
var Class= document.getElementById('class');
if(Class.value=='select'){
Class.focus();
Class.color="red";
Class.placeholder="Admission_fees";
return false;
}
/*privious eduction details here*/
var Passing_Year           = document.getElementById('Passing_Year');
var Passing_Class          = document.getElementById('Passing_Class');
var Pass_out_School        = document.getElementById('Pass_out_School');
var pass_out_City          = document.getElementById('pass_out_City');
var pass_out_post          = document.getElementById('pass_out_post');
var pass_out_tehsel        = document.getElementById('pass_out_tehsel');
var pass_out_school_address= document.getElementById('pass_out_school_address');
var pass_out_dist          = document.getElementById('pass_out_dist');
if(Passing_Year.value ==''){
Passing_Year.placeholder='fill this blank here';
Passing_Year.focus();
return false;
}
if(Passing_Class  .value ==''){
Passing_Class          .placeholder='fill this blank here';
Passing_Class   .focus();
return false;
}
if(Pass_out_School.value ==''){
Pass_out_School        .placeholder='fill this blank here';
Pass_out_School .focus();
return false;
}
if(pass_out_City  .value ==''){
pass_out_City.placeholder='fill this blank here';
pass_out_City   .focus();
return false;
}
if(pass_out_post  .value ==''){
pass_out_post.placeholder='fill this blank here';
pass_out_post.focus();
return false;
}
if(pass_out_tehsel.value ==''){
pass_out_tehsel.placeholder='fill this blank here';
pass_out_tehsel .focus();
return false;
}
if(pass_out_school_address.value==''){
pass_out_school_address.placeholder='fill this blank here';
pass_out_school_address.focus();
return false;
}
if(pass_out_dist .value ==''){
pass_out_dist.placeholder='fill this blank here';
pass_out_dist   .focus();
return false;
}
var CV= document.getElementById('CV');
var checkCV =/^[a-z]+$/ig.test(CV.value);
if (CV.value=='') {
CV.placeholder=" Insert City/Village";
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
if(dist.value==''){
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
var file     = document.getElementById('file');
var signature =document.getElementById('signature');
if (file.value=="") {
file.focus();
file.placeholder="select the image";
return false;
}
if (signature.value==""){
signature.focus();
signature.placeholder="select the image";
return false;
}
}