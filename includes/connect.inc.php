<?php

$conn_error = 'Failed to connect';

//connect.inc.php data out of date as of 9-6-16
$mysql_host = '';
$mysql_user = '';
$mysql_pass = '';
$mysql_db   = '';

if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !mysql_select_db($mysql_db)){
	die(mysql_error());
}


?>
