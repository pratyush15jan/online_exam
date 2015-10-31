
<!--Copyright (C) 2015 Pratyush Singh - All Rights Reserved
This code is the sole property of Pratyush Singh (pratyush15jan@gmail.com)
You may not use, distribute and modify this code or any part of this code at all.
All rights rest solely with Pratyush Singh-->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>online examination</title>

    <?php include 'head.php';?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   </head>

   <body id="page-top" onLoad="Captcha();">

   <?php include 'header.php';?>
   <?php
session_start();
$_SESSION['name']=$name;
?>

<!--<div class="bg-color col-sm-2 col-sm-offset-5">
<a href="">
                <img  src="img/logo.png" alt="WizIQ" style="height: auto; width: auto;">
            </a>
</div>-->
 
<div class="col-md-12 bg-color-blue">
  <div class="container">
  <div class="row">
 <h3 class="title_msg color-already text-center">Sign up</h3>

 </div>
 </div> </div>
<div class="bg-color-white col-sm-12">
<div class="row">
<div class="container">
<div class="col-sm-6 col-sm-offset-3 background_1 marg-t-b border-1px-balack">
            <h3 class="register_page color-already-black height-60">Create Your WizIQ Account</h3>
        <form name ="myform" action="signupuser.php" onSubmit="return validation();" method="post">
         <div class=" padd-0">
                    <p class="inline-block text-right white-text sign color-already-black ">Already an OA owner ? - <a href="login.php" class="uppercase white-text  bold btn">Sign In</a></p>
                    </div>
       <table style="width: 100%;" class="padd-5">
       <tr><td>
       <label for="Current Password">Login Id<span class="required">:</span></label></td>
       <td><input type ="text" name="lid"  class="form-control"/> </td>
        </tr><tr><td></td><td><div id ="errors"></div></td></tr>
            <tr><td>
         <label for="Current Password">Password<span class="required">:</span></label>
           </td>
           <td><input type="password" name="pass" class="form-control"></td>
         </tr> <tr><td></td><td><div id ="pass_errors"></div> </td></tr>
          <tr><td>
         <label for="Current Password">Confirm Password<span class="required">:</span></label>
           </td>
           <td><input name="cpass" type="password" id="cpass" class="form-control"></td>
         </tr> <tr><td></td><td><div id ="con_pass_errors"></div></td></tr>
         <tr>
         <td>
         <label for="Current Password">Name<span class="required">:</span></label>
           </td>
           <td><input name="name" type="text" id="name" class="form-control"></td>
         </tr><tr><td></td><td><div id ="name_errors"></div> </td></tr>
         <tr><td>
         <label for="Current Password">Address<span class="required">:</span></label>
           </td>
           <td><textarea name="address" id="address" class="form-control"></textarea></td>
         </tr> <tr><td></td><td><div id ="add_errors"></div> </td></tr>
         <tr><td>
         <label for="Current Password">City<span class="required">:</span></label>
           </td>
           <td><input name="city" type="text" id="city" class="form-control"></td>
         </tr> <tr><td></td><td><div id ="city_errors"></div></td></tr>
         <tr><td>
         <label for="Current Password">Phone<span class="required">:</span></label>
           </td>
           <td><input name="phone" type="text" id="phone" class="form-control"></td>
         </tr> <tr><td></td><td><div id ="phone_errors"></div> </td></tr>
         <tr><td>
         <label for="Current Password">E-mail<span class="required">:</span></label>
           </td>
           <td><input name="email" type="text" id="email" class="form-control"></td>
         </tr> <tr><td></td><td><div id ="email_errors"></div> </td></tr>
            <tr><td></td><td>
		
      
           <td><input type ="submit" value="Create" class="theme_button" onClick="alert(ValidCaptcha());"/></td> </tr>

       </table>
     </form>



 </div>
 </div>
 </div>
 </div>

  <script>
  function validation(){
   if (document.myform.lid.value == "") {
     document.getElementById('errors').innerHTML="Please enter your loginid";
     document.myform.lid.focus();

     return false;
}
else if(document.myform.pass.value == "")
{
 document.getElementById('pass_errors').innerHTML="Please enter Your password";
 document.myform.pass.focus();
 document.getElementById("errors").style.display = "none";
 return false;
}

else if(document.myform.cpass.value == "")
{
 document.getElementById('con_pass_errors').innerHTML="Please enter a confirm password";
 document.myform.cpass.focus();
 document.getElementById("pass_errors").style.display = "none";
 return false;
}

else if(document.myform.name.value == "")
{
 document.getElementById('name_errors').innerHTML="Please enter a name";
 document.myform.name.focus();
 document.getElementById("con_pass_errors").style.display = "none";
 return false;
}
else if(document.myform.address.value == "")
{
 document.getElementById('add_errors').innerHTML="Please enter address";
 document.myform.address.focus();
 document.getElementById("name_errors").style.display = "none";
 return false;
}
else if(document.myform.city.value == "")
{
 document.getElementById('city_errors').innerHTML="Please enter a city";
 document.myform.city.focus();
 document.getElementById("add_errors").style.display = "none";
 return false;
}
else if(document.myform.phone.value == "")
{
 document.getElementById('phone_errors').innerHTML="Please enter phone";
 document.myform.phone.focus();
 document.getElementById("city_errors").style.display = "none";
 return false;
}
else if(document.myform.email.value == "")
{
 document.getElementById('email_errors').innerHTML="Please enter email";
 document.myform.email.focus();
 document.getElementById("phone_errors").style.display = "none";
 return false;
}
e=document.myform.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
		   document.getElementById('email_errors').innerHTML="Please enter valid email";
			document.myform.email.focus();
			return false;
		}
else{
    return true;
}

    }
  </script>
  <script type="text/javascript">
                 function Captcha(){
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
                    document.getElementById("mainCaptcha").value = code
                  }
                  function ValidCaptcha(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      if (string1 == string2){
                        return true;
                      }
                      else{        
                        return false;
						exit();
                      }
                  }
                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }
             </script>    
  <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
</body>
</html>
