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

<title>User Info</title>

</head>
<body>


<?php

include("../database.php");
include("header.php");
echo "<h2 class='style8' align=center>Welcome to student Information Pannel</h2>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/userinfo1.jpg" width="90" height="70" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="user_info.php" class="style4">Users Information </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/result.JPG" width="80" height="70" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Student Result</a></td>
  </tr>
</table>';
   
		exit;


?>   