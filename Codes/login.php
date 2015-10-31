<!--Copyright (C) 2015 Pratyush Singh - All Rights Reserved
This code is the sole property of Pratyush Singh (pratyush15jan@gmail.com)
You may not use, distribute and modify this code or any part of this code at all.
All rights rest solely with Pratyush Singh-->
   <?php
session_start();
?>

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

<body id="page-top">
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION['login']=$loginid;
	}
}
if (isset($_SESSION['login']))
{
echo "<div class='col-md-12 bg-color-blue text-center' >
  <div class='container'>
            <div class='row'>
 <h3 class='title_msg color-already'>Wel come to Online Test</h3>

 </div>
 </div> </div>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Test </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Previous Result</a></td>
  </tr>
</table>';

		exit;


}


?>


 <div class="col-md-12 bg-color-blue text-center" >
  <div class="container">
            <div class="row">
 <h3 class="title_msg color-already">Sign in</h3>

 </div>
 </div> </div>

 <div class="col-sm-12 color-already-black">
<div class="row">
<div class="container">


<div class="col-sm-6 col-sm-offset-3 background_1 marg-t-b border-1px-balack">
<div class="dv100 wiz-membership">
         <span class="fright"> <p>Not a member?  <a href="signup.php" id="" class="ulink"> Join WizIQ</a></p></span></div>



                    <form name="form1" method="post" action="" class="padd-5" onSubmit="return validation();">
                     <table style="width: 100%;" class="padd-5">
       <tr><td>
       <label for="Current Password">Login Id<span class="required">:</span></label></td>
       <td><input type ="text" name="loginid"  class="form-control"/> </td>
        </tr><tr><td></td><td><div id ="errors_login"></div></td></tr>
            <tr><td>
         <label for="Current Password">Password<span class="required">:</span></label>
           </td>
           <td><input type="password" name="pass" class="form-control"></td>
         </tr> <tr><td></td><td><div id ="pass_errors"></div> </td></tr>





       </table>
                     <p>
                     <input name="submit" type="submit" id="submit" value="Login" class="theme_button pull-right">
                       </p>
                </form>


					<p class="contact-form-subject">
                       <input type="checkbox" tabindex="18" name="user_agrement" value="yes">
                                  &nbsp; <i class="color-already-black">Remember me</i><span class="fleft" id="divJoin" style="display: block;">
                         <a href="" class="text11 color-already-black" style="color:#1c67ab">Forgot Password?</a></span>
                    </p>


                     </div>
                 </div>

              </div>

            </div>





      <script>
  function validation(){

   if (document.form1.loginid.value == "") {
     document.getElementById('errors_login').innerHTML="Please enter your loginid";
     document.form1.loginid.focus();

     return false;
}
else if(document.form1.pass.value == "")
{
 document.getElementById('pass_errors').innerHTML="Please enter your password";
 document.form1.pass.focus();
  document.getElementById("errors_login").style.display = "none";
 return false;
}
else
{
    return true;
}
}
</script>
     <!-- jQuery -->
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
