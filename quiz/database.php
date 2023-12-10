<?php
//create connection 
$db_host='localhost';
$db_name='project';
$db_user='root';
$db_pass='';
//create mysql object
$mysqli=new mysqli($db_host,$db_user,$db_pass,$db_name);
//eror handling
if($mysqli->connect_error)
{
	printf("connect failed: %s\n, $mysqli->connect_error");
	exit();
}
?>