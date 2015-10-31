<!--Copyright (C) 2015 Pratyush Singh - All Rights Reserved
This code is the sole property of Pratyush Singh (pratyush15jan@gmail.com)
You may not use, distribute and modify this code or any part of this code at all.
All rights rest solely with Pratyush Singh-->

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
}
-->
</style>
<div class="side">
<img src="image/leftheader.gif" style="height:100px; width:50%;"/>
<img src="image/header.gif" style="height:100px; width:50%; float:right" />

</div>
<hr />
	<?php
	if(isset($_SESSION['alogin']))
	{
	 echo "<div align=\"right\"><strong><a href=\"login.php\">Admin Home</a>|<a href=\"signout.php\">Signout</a><strong></div><a href=\"user_detail.php\">Users All Detail</a></strong></div>";
	 	 echo "<div><a href=\"list.php\">View Subject List</a></strong></div>";
		 echo "<div><a href=\"CRUD/editque.php\">View Question List</a></strong></div>";
	 
	
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
  </tr>
</table>
