<?php
$dbhost = 'localhost';
$dbuser = 'sungreen_sun';
$dbpass = '$ungreen!786';
		 
$link = mysql_connect($dbhost, $dbuser, $dbpass);
$db_selected = mysql_select_db('sungreen_invoice', $link);
	 
?>