<!--Copyright (C) 2015 Pratyush Singh - All Rights Reserved
This code is the sole property of Pratyush Singh (pratyush15jan@gmail.com)
You may not use, distribute and modify this code or any part of this code at all.
All rights rest solely with Pratyush Singh-->

<?php
session_start();
error_reporting(1);
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);

if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quiz System</title>
 
	
	

</head>




   
</body>
</html>


<?php
include("head.php");
?>
<title>Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
$query=mysql_query("SELECT * from test");
while($row=mysql_fetch_array($query)){
$que=$row[total_que];
}
?>
<?php 
mysql_data_seek($rs,$_SESSION['qn']);
$q=$_SESSION['qn']+1;
?>


 <div class="col-sm-12 bg-color-blue">

          <div class="container">
            <div class="col-sm-3 padd-15">
              <p class=" color-already">Total Question <?php  echo $que;  ?></p>
                 </div>
                <div class="col-sm-5 padd-15">
                 

 
            

                   </div>
                    <div class="col-sm-4 padd-15">
                      <p class=" color-already">Attempted <?php echo $q;  ?> Questions</p>
                        </div>
                         
                     </div>

                  </div>
	<div class="col-sm-12 marg-t-20">	
		<div class="container" style="background-color: #DEDEDE !important;">		  
<div class="col-sm-6 col-sm-offset-3">	  

<?php
$query="select * from question";

$rs=mysql_query("select * from question where test_id=$tid",$cn) or die(mysql_error());
if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	mysql_query("delete from useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
	$_SESSION[trueans]=0;
	$_SESSION[skip]=0;
	
}
else
{	
		if($submit=='Next Question')
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
							
				}
				else if ($ans==0){
				$_SESSION[skip]=$_SESSION[skip]+1;
				
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submit=='Get Result')
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				else if ($ans==0){
				$_SESSION[skip]=$_SESSION[skip]+1;
				
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center class='table-bordered padd-5' style='width:100%;'><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
				//$w=$_SESSION[qn]-$_SESSION[trueans];
				$ts=$_SESSION[trueans]+$_SESSION[skip];
				$w=$_SESSION[qn]-$ts;
				
				
			
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "<tr class=fans><td>Skip Question<td> ". $_SESSION[skip];
				
				echo "</table>";
			
				mysql_query("insert into result(login,test_id,test_date,score) values('$login',$tid,'".date("d/m/Y")."',$_SESSION[trueans])") or die(mysql_error());
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$rs=mysql_query("select * from question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION['qn']>mysql_num_rows($rs)-1)
{
unset($_SESSION['qn']);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}
mysql_data_seek($rs,$_SESSION['qn']);
$row= mysql_fetch_row($rs);
echo "<form name=myfm method=post action=quiz.php class='padd-5'>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION['qn']+1;
echo "<tR><td><span><b>&#2346;&#2381;&#2352;&#2358;&#2381;&#2344; ".  $n .": $row[2]</b></style>";
echo "<tr><td><input type=radio name=ans value=1 >&nbsp;<span>$row[3]</span>";
echo "<tr><td> <input type=radio name=ans value=2 >&nbsp;$row[4]";
echo "<tr><td><input type=radio name=ans value=3 >&nbsp;$row[5]";
echo "<tr><td><input type=radio name=ans value=4 >&nbsp;$row[6]";

if($_SESSION['qn']<mysql_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question' class='theme_button'></form>";
else
echo "<tr><td><input type=submit name=submit value='Get Result' class='theme_button'></form>";
echo "</table></table>";
?>

</div></div></div>
 <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
</body>
</html>