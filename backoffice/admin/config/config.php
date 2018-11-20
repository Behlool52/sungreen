<?php
//$username = "designsintellect";
//$password = "qFNj0IcTQqs17Tn";
//$hostname = "localhost"; 

$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("designsi_sungreen",$dbhandle)
  or die("Could not select examples");
  
?>
