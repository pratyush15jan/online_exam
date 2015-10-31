
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

$query=mysql_query("select * from subject");
?>

 <table border="2" align="center" bgcolor="#FFFF99" cellpadding="10px">
      <thead>
     <tr bgcolor="#6699FF">
<th>Subject Id</th>
<th>Subject Name</th>



</tr>
      </thead>
      <tbody>
        <?php
          while($row = mysql_fetch_assoc($query)){
            echo
            "<tr>
              <td>{$row['sub_id']}</td>
              <td>{$row['sub_name']}</td>
			  </tr>";
			  }
			  
            ?>
		</tbody>
 </table>
 </body>
 </html>

