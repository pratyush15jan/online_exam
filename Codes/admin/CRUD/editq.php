
<!--Copyright (C) 2015 Pratyush Singh - All Rights Reserved
This code is the sole property of Pratyush Singh (pratyush15jan@gmail.com)
You may not use, distribute and modify this code or any part of this code at all.
All rights rest solely with Pratyush Singh-->

<?php
include_once '../database.php';
include 'header.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM question WHERE que_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_assoc($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $qued = $_POST['que_desc'];
 $ans1 = $_POST['ans1'];
 $ans2 = $_POST['ans2'];
  $ans3 = $_POST['ans3'];
 $ans4 = $_POST['ans4'];
 $truea = $_POST['true_ans'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE question SET que_desc='$qued',ans1='$ans1',ans2='$ans2',ans3='$ans3',ans4='$ans4',true_ans='$truea' WHERE que_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='editque.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: editque.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">

</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center" border="1" bgcolor="#CCCC66" width="500px">
	<thead>
    <tr>
    <td><input type="text" name="que_desc" placeholder="Question" size='80px' value="<?php echo $fetched_row['que_desc']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="ans1" placeholder="Ans 1" size='80px' value="<?php echo $fetched_row['ans1']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="ans2" placeholder="Ans 2" size='80px' value="<?php echo $fetched_row['ans2']; ?>" required /></td>
    </tr>
	  <tr>
    <td><input type="text" name="ans3" placeholder="Ans 3" size='80px' value="<?php echo $fetched_row['ans3']; ?>" required /></td>
    </tr>
	  <tr>
    <td><input type="text" name="ans4" placeholder="Ans 4" size='80px' value="<?php echo $fetched_row['ans4']; ?>" required /></td>
    </tr>
	  <tr>
    <td><input type="text" name="true_ans" placeholder="Right Ans" size='80px' value="<?php echo $fetched_row['true_ans']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
	</thead>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>