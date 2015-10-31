<!--Copyright (C) 2015 Pratyush Singh - All Rights Reserved
This code is the sole property of Pratyush Singh (pratyush15jan@gmail.com)
You may not use, distribute and modify this code or any part of this code at all.
All rights rest solely with Pratyush Singh-->


<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php
include("head.php");
?>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
extract($_GET);
$rs1=mysql_query("select * from subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<div class='col-md-12 bg-color-blue text-center' >
  <div class='container'>
            <div class='row'>
 <h3 class='title_msg color-already'>$row1[1]</h3>

 </div>
 </div> </div>";
$rs=mysql_query("select * from test where sub_id=$subid");
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h3 class=text-center> No Quiz for this Subject </h3>";
	exit;
}
echo "<h3 class= text-center> Select Test </h3>";
echo "<table align=center>";

while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a>";
}
echo "</table>";
?>
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
