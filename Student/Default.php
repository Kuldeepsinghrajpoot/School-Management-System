<?php
session_start();
session_id();
require 'connection.php';
     $Conn = mysqli_connect("localhost","root","");
     mysqli_select_db($Conn,"school");
     if ($Conn===false) {
     	die();
     }
       $Totalmarksexam   = mysqli_real_escape_string($Conn,$_POST['totalmarks']);
       $MONTH            = mysqli_real_escape_string($Conn,$_POST['MONTH']);
       $REGISTATION      = mysqli_real_escape_string($Conn,$_POST['Roll']);
       $Hindi            = mysqli_real_escape_string($Conn,$_POST['Hindi']);
       $English          = mysqli_real_escape_string($Conn,$_POST['English']);
       $Math             = mysqli_real_escape_string($Conn,$_POST['Math']);
       $Sanskrit         = mysqli_real_escape_string($Conn,$_POST['Sanskrit']);
       $Science          = mysqli_real_escape_string($Conn,$_POST['Science']);
       $Social           = mysqli_real_escape_string($Conn,$_POST['Social']);
     if($Totalmarksexam==="600"){
         $find_dupli_Entry=mysqli_query($Database,"select MONTH  ='$MONTH'  from  examination where Registation=' $REGISTATION'");
     
     

       $Hindipratical    = mysqli_real_escape_string($Conn,$_POST['HindiPratical']);
       $Englishpratical  = mysqli_real_escape_string($Conn,$_POST['EnglishPratical']);
       $Mathpratical     = mysqli_real_escape_string($Conn,$_POST['MathPratical']);
       $Sanskritpratical = mysqli_real_escape_string($Conn,$_POST['SanskritPratical']);
       $Sciencepratical  = mysqli_real_escape_string($Conn,$_POST['SciencePratical']);
       $SocialPratical   = mysqli_real_escape_string($Conn,$_POST['SocialPratical']);

      $studentResut=((int)$Hindi)+((int)$English)+((int)$Math)+((int)$Sanskrit)+((int)$Science)+((int)$Social)+((int)$Hindipratical)+
                     ((int)$Englishpratical)+((int)$Mathpratical)+((int)$Sanskritpratical)+((int)$Sciencepratical)+((int)$SocialPratical);
        $HindiTotal    = ((int)$Hindipratical)+((int)$Hindi);
        $EnglishTotal  = ((int)$English)+((int)$Englishpratical);
        $MathTotal     = ((int)$Math)+((int)$Mathpratical);
        $SanskritTotal = ((int)$Sanskrit)+((int)$Sanskritpratical);
        $ScienceTotal  = ((int)$Science)+((int)$Sciencepratical);
        $SocialTotal   = ((int)$Social)+((int)$SocialPratical);
        /*check marks after pratical+theory*/

       if($HindiTotal>=33) {
       $HindiResult="PASS";
       }
       else{
           $HindiResult="FAIL";
       }
        if($EnglishTotal>=33) {
         $EnglishResult="PASS";
       }
       else{
           $EnglishResult="FAIL";
       }
       if($MathTotal>=33) {
         $MathResult="PASS";
       }
       else{
          $MathResult="FAIL";
       }
       if($SanskritTotal>=33) {
        $SanskritResult="PASS";
       }
       else{
           $SanskritResult="FAIL";
       }
       if($ScienceTotal>=33) {
         $ScienceResult="PASS";
       }
       else{
           $ScienceResult="FAIL";
       }
       if($SocialTotal>=33) {
        $SocialResult="PASS";
       }
       else{
           $SocialResult="FAIL";
       }
       /* $query1= "select *from student where Registation='$REGISTATION'";
     $result1= mysqli_query($Conn,$query1);
     $row1=mysqli_fetch_array($result1);
           $cv= $row1['Registation'];*/

            if(($HindiTotal>=33)&&($EnglishTotal>=33)&&($MathTotal>=33)&&($SanskritTotal>=33)&&($ScienceTotal>=33)&&($SocialTotal>=33)) {
          $TotalResut= round($studentResut/6,2)."%";
           if(mysqli_query($Conn, "insert into examination
  (Hindi,English,Math,Social,Science,Sansakrit,HindiPratical,EnglishPratical,  MathPratical,SocialPratical,SanskritPratical,SciencePratical, HindiTotal,EnglishTotal,MathTotal,SansakritTotal,ScienceTotal,SocialTotal,Total,Percentage,Result,HindiResult,MathResult,EnglishResult,SanskritResult,SocialResult,ScienceResult,MONTH,Totalmarksexam,RollNumber)values('$Hindi','$English','$Math','$Social','$Science','$Sanskrit','$Hindipratical','$Englishpratical','$Mathpratical','$SocialPratical','$Sanskritpratical','$Sciencepratical','$HindiTotal','$EnglishTotal','$MathTotal','$SanskritTotal','$ScienceTotal','$SocialTotal','$studentResut','$TotalResut','PASS','$HindiResult','$MathResult','$EnglishResult','$SanskritResult','$SocialResult','$ScienceResult','$MONTH','$Totalmarksexam','$REGISTATION')")){
            echo "successfull";
           }
      else
      {
        echo "already inserted data";
      }
         }
         else{
           if(mysqli_query($Conn, "insert into $cv 
  (Hindi,English,Math,Social,Science,Sansakrit,HindiPratical,EnglishPratical,  MathPratical,SocialPratical,SanskritPratical,SciencePratical, HindiTotal,EnglishTotal,MathTotal,SansakritTotal,ScienceTotal,SocialTotal,Total,Percentage,Result,HindiResult,MathResult,EnglishResult,SanskritResult,SocialResult,ScienceResult,MONTH,Totalmarksexam)values('$Hindi','$English','$Math','$Social','$Science','$Sanskrit','$Hindipratical','$Englishpratical','$Mathpratical','$SocialPratical','$Sanskritpratical','$Sciencepratical','$HindiTotal','$EnglishTotal','$MathTotal','$SanskritTotal','$ScienceTotal','$SocialTotal','$studentResut','-','FAIL','$HindiResult','$MathResult','$EnglishResult','$SanskritResult','$SocialResult','$ScienceResult','$MONTH','$Totalmarksexam')")){
            echo "successfull";
           }
           else{
            echo "already inserted data";
           }
            
}

     }
     elseif ($Totalmarksexam==="10") {
       $sql    = "select * from student s inner join examination e on s.Registation= e.Registation where MONTH='$MONTH'";
       $find_dupli_Entry=mysqli_query($Database,$sql);
    
       
        
       if($Hindi>=3){
          $TestHindi="PASS";
       }
       else{
           $TestHindi="FAIL";
       }
        if($English>=3){
         $TestEnglish="PASS";
       }
       else{
           $TestEnglish="FAIL";
       }
       if($Math>=3){
         $TestMath="PASS";
       }
       else{
          $TestMath="FAIL";
       }
       if($Sanskrit>=3){
        $TestSanskrit="PASS";
       }
       else{
           $TestSanskrit="FAIL";
       }
       if($Science>=3){
         $TestScience="PASS";
       }
       else{
           $TestScience="FAIL";
       }
       if($Social>=3){
        $TestSocial="PASS";
       }
       else{
           $TestSocial="FAIL";
       }
       /***************************************/
       $studenttest=((int)$Hindi)+((int)$English)+((int)$Math)+((int)$Sanskrit)+((int)$Science)+((int)$Social);
           
             if(($Hindi>=4)&&($English>=4)&&($Math>=4)&&($Sanskrit>=4)&&($Science>=4)&&($Social>=4)) {
          $TotalResut= round($studenttest/6,2)."%";
           if(mysqli_query($Conn, "insert into examination 
  (Hindi,English,Math,Social,Science,Sansakrit,Total,Percentage,Result,HindiResult,MathResult,EnglishResult,SanskritResult,SocialResult,ScienceResult,MONTH,Totalmarksexam,RollNumber)values('$Hindi','$English','$Math','$Social','$Science','$Sanskrit','$studenttest','$TotalResut','PASS','$TestHindi','$TestMath','$TestEnglish','$TestSanskrit','$TestSocial','$TestScience','$MONTH','$Totalmarksexam','$REGISTATION')")){
            echo "successfull";
           }
      else{
        echo "occur in feilds ";
      }
         }
         else{
           if(mysqli_query($Conn, "insert into $cv 
  (Hindi,English,Math,Social,Science,Sansakrit,Total,Percentage,Result,HindiResult,MathResult,EnglishResult,SanskritResult,SocialResult,ScienceResult,MONTH,Totalmarksexam)values('$Hindi','$English','$Math','$Social','$Science','$Sanskrit','$studenttest','-','FAIL','$TestHindi','$TestMath','$TestEnglish','$TestSanskrit','$TestSocial','$TestScience','$MONTH','$Totalmarksexam')")){
            echo "successfull";
           }
           else{
            echo "already inserted data";
           }
           }
         
        }   
    
    
 ?>
