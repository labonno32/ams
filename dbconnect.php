<?php 

	$database = "ams";
	$host = "localhost";
	$userid = "amsadmin";
	$pass = "aapass";

	$connection = mysql_connect( $host, $userid, $pass );

	$db_select = mysql_select_db($database, $connection);

?>