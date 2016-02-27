<?php 
$localhost='localhost';
$user='root';
$password='';
$db_name='registration';
if (!mysql_connect($localhost,$user,$password)||!mysql_select_db($db_name)) {
	die(mysql_error());
}



 ?>