
<!--Copyright (C) 2015 Pratyush Singh - All Rights Reserved
This code is the sole property of Pratyush Singh (pratyush15jan@gmail.com)
You may not use, distribute and modify this code or any part of this code at all.
All rights rest solely with Pratyush Singh-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
  <?php
  error_reporting(0);
include("head.php"); ?>
<body>
<?php
session_start();
$_SESSION['name']=$name;
include("header.php");
extract($_POST);
include("database.php");
$rs=mysql_query("select * from user where login='$lid'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=text-center>Login Id Already Exists</div>";
	exit;
}
$query="insert into user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysql_query($query)or die("Could Not Perform the Query");
echo "<div class='col-sm-12 marg-t-20'>";
echo "<div class='container' >";
echo "<div class='col-sm-6 col-sm-offset-3' style='padding: 20px;
    border: 1px solid #D6C3C3; background-color: #CFFD9C;'>";

echo "<div class= text-center style='color:black;'><h3>Welcome <b>$name </b></h3></div>";
echo "<br><div class=text-center style='color: green; font-size:20px;'>Your Login ID <b> $lid</b> Created Sucessfully</div>";
echo "<br><div class=text-center style='color: green;font-size:20px;'>Please Login using your Login ID to take Test</div>";
echo "<br><div class=text-center><a href=login.php class='theme_button'>Login</a></div>";
echo "</div></div></div>";

?>

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

