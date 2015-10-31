
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
$page=$_GET['page'];
if($page==''||$page=='1'){
$page1=0;
}
else {
$page1=($page * 5)-5;
}
    $query=mysql_query("select a.email,a.username,b.score from user a,result b  $page1,5 ");
	?>

      <table border="2" align="center" bgcolor="#FFFF99" cellpadding="10px">
      <thead>
     <tr bgcolor="#6699FF">
<th>EMAIL ID</th>
<th>NAME</th>
<th>SCORE</th>

</tr>
      </thead>
      <tbody>
        <?php
          while($row = mysql_fetch_assoc($query)){
            echo
            "<tr>
              <td>{$row['email']}</td>
              <td>{$row['username']}</td>
              <td>{$row['score']}</td>
              
            </tr>n";
          }
        ?>
		<?php
		$res=mysql_query("select a.email,a.username,b.score from user a,result b");
		$cou=mysql_num_rows($res);
		$a=ceil($cou/5);
		
		for($b=1;$b<$a;$b++){
		?>
		<a href="score.php?page=<?php echo $b;?>" style="="text-decoration:none"><?php echo $b.""; ?></a> <?php
		
		}
		?>
      </tbody>
    </table>

    </body>
    </html>
