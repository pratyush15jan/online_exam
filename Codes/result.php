
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
<title>Online Quiz  - Result </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">

</head>

<body>
<?php
include("header.php");
include("database.php");
$page=$_GET['page'];
if($page==''||$page=='1'){
$page1=0;
}
else {
$page1=($page * 5)-5;
}
extract($_SESSION);

$rs=mysql_query("select s.sub_name,t.test_name,t.total_que,r.test_date,r.score,r.status from subject s, test t, result r where
t.test_id=r.test_id and r.login='$login' limit $page1,5",$cn) or die(mysql_error());

echo "<div class='col-md-12 bg-color-blue text-center' >
  <div class='container'>
            <div class='row'>
 <h3 class='title_msg color-already'>Result</h3>

 </div>
 </div> </div>";
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<br><table  align=center class='padd-5 table-bordered' style='width:40%;' ><tr class=style2><td class='text-center'>Subject<td class='text-center'>Test Name <td class='text-center'>Total Que<td class='text-center'>Right<td class='test-canter'>Status<td class='text-center'> Percentege";
while($row=mysql_fetch_row($rs))
{
$subject=$row[0];
$testname=$row[1];
$total=$row[2];
$score=$row[4];
$num=$score;
$s=$_SESSION[skip];
$tot=$total;


$persent=$num/$tot;
$final=number_format($persent * 100,2).'%';





if($score<3){
$status="<font color=red>Fail</font>";


}
else {
$status="Pass";
}

echo "<tr class=style8><td class='text-center'>$subject<td class='text-center'> $testname<td class='text-center'> $total<td class='text-center'> $score<td class='text-center' > $status<td class='text-center'> $final";
}
echo "</table>";
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
	<span style="margin-left:350px; position:absolute; margin-top:20px;" >
		<?php
		$res=mysql_query("select s.sub_name,t.test_name,t.total_que,r.test_date,r.score,r.status from subject s, test t, result r where
t.test_id=r.test_id and r.login='$login'");
		$cou=mysql_num_rows($res);
		$a=ceil($cou/5);
		
		for($b=1;$b<$a;$b++){
		?>
		
		<a style="margin-left:10px;" href="result.php?page=<?php echo $b;?>"  "><?php echo $b.""; ?></a> <?php
		
		}
		?>
	
	</span>	
	
	
</body>
</html>
