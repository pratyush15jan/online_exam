
<!--Copyright (C) 2015 Pratyush Singh - All Rights Reserved
This code is the sole property of Pratyush Singh (pratyush15jan@gmail.com)
You may not use, distribute and modify this code or any part of this code at all.
All rights rest solely with Pratyush Singh-->


<?php
include_once '../database.php';
include 'header.php';
$page=$_GET['page'];
if($page==''||$page=='1'){
$page1=0;
}
else {
$page1=($page * 5)-5;
}


// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM question WHERE que_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UPDATE Detail </title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='editq.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='editque.php?delete_id='+id;
 }
}
</script>
</head>
<body>
<center>

<div id="header">
 <div id="content">
  
    </div>
</div>

<div id="body">
 <div id="content">
    <table border="2" align="center" bgcolor="#FFFF99" cellpadding="10" width="80%">
<th>Ques Desc</th>
<th>Ans1</th>
<th>Ans2</th>
<th>Ans3</th>
<th>Ans4</th>
<th>Right Ans</th>
<th colspan="2">Action</th>
   
    </tr>
    <?php
 $sql_query="SELECT * FROM question  limit $page1,5";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
        <td><?php echo $row[7]; ?></td>
     
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="pencil.png"align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="delete.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
<?php
$result=mysql_query('select * from question');
$cou=mysql_num_rows($result);
$a=ceil($cou/5);
for ($b=1;$b<$a;$b++){
?>
<a href="editque.php?page=<?php echo ' '. $b;?> style="="text-decoration:none"><?php echo ''. $b.""; ?></a><?php

}
?>



    </table>
    </div>
</div>

</center>
</body>
</html>