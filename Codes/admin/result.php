<!--Copyright (C) 2015 Pratyush Singh - All Rights Reserved
This code is the sole property of Pratyush Singh (pratyush15jan@gmail.com)
You may not use, distribute and modify this code or any part of this code at all.
All rights rest solely with Pratyush Singh-->


<?php
error_reporting(0);
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
$page=$_GET['page'];
if($page==''||$page=='1'){
$page1=0;
}
else {
$page1=($page * 5)-5;
}
   
      $result = mysql_query("SELECT * FROM result limit $page1,5 ");
      ?>
      <table border="2" align="center" bgcolor="#FFFF99" cellpadding="10px">
      <thead>
     <tr bgcolor="#6699FF">

<th>Login Id</th>
<th>Test Id</th>
<th>Test Date/Time</th>
<th>Score</th>
<th>Status</th>

</tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc($result) ){
		  $login=$row['login'];
		  $id=$row['test_id'];
		  $t_date=$row['test_date'];
		  
		 $score=$row['score'];
		 if($score<3){
$status="Fail";
}
else {
$status="Pass";
}
		
            echo
            "<tr>
              
              <td>{$row['login']}</td>
              <td>{$row['test_id']}</td>
              <td>{$row['test_date']}</td>
              <td>{$row['score']}</td>
			  <td>$status</td>
			  </tr>";
          }
        ?>
		<?php
		$res=mysql_query("SELECT * FROM result");
		$cou=mysql_num_rows($res);
		$a=ceil($cou/5);
		
		for($b=1;$b<$a;$b++){
		?>
		<a href="result.php?page=<?php echo $b;?>" style="="text-decoration:none"><?php echo $b.""; ?></a> <?php
		
		}
		?>
      </tbody>
    </table>

    </body>
    </html>
