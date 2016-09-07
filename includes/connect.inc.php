<?php

$conn_error = 'Failed to connect';

$mysql_host = '';
$mysql_user = '';
$mysql_pass = '';
$mysql_db	= 'Test Database';

if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !mysql_select_db($mysql_db)){
	die(mysql_error());
}


?>
