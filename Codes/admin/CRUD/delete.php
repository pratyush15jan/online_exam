<!--Copyright (C) 2015 Pratyush Singh - All Rights Reserved
This code is the sole property of Pratyush Singh (pratyush15jan@gmail.com)
You may not use, distribute and modify this code or any part of this code at all.
All rights rest solely with Pratyush Singh-->


<?php
if(isset($_GET['que_id']))
{
 $sql_query="DELETE FROM question WHERE que_id=".$_GET['que_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
?>