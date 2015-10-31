
<!--Copyright (C) 2015 Pratyush Singh - All Rights Reserved
This code is the sole property of Pratyush Singh (pratyush15jan@gmail.com)
You may not use, distribute and modify this code or any part of this code at all.
All rights rest solely with Pratyush Singh-->

<?php
include('db.php');
if(isset($_POST['submit'])){
$que_desc=$_POST['que'];
$opt1=$_POST['option1'];
$opt2=$_POST['option2'];
$opt3=$_POST['option3'];
$opt4=$_POST['option4'];
$righta=$_POST['righta'];
$query="insert into ques_add(que_desc,opt1,opt2,opt3,opt4,righta)values('$que_desc','$opt1','$opt2','$opt3','$opt4','$righta'";
if(mysql_query($query)){
echo "Inserted Succesfully";

}
else {
echo "Something Wrong";
}

}

?>
<form method="post" action="addques.php">
<table align="center" width="700" border="1" bgcolor="#66CC00">
<th>Enter Your Question Here</th>
<tr>
<tr><td>Question</td>
<td><textarea name="que" rows="4" cols="40">
</textarea></td></tr>
<tr>
<td>Option1</td>
<td><input type="text" name="option1"/></td>
</tr>
<tr>
<td>Option2</td>
<td><input type="text" name="option2"/></td>
</tr>
<tr>
<td>Option3</td>
<td><input type="text" name="option3"/></td>
</tr>
<tr>
<td>Option4</td>
<td><input type="text" name="option4"/></td>
</tr>
<tr>
<td>Right Ans</td>
<td><input type="text" name="righta"/></td>
</tr>
<tr>

<td align="center"><input type="submit" name="submit"/></td>
</tr>
