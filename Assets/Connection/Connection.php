<?php
$ServerName="localhost";
$Username="root";
$Password="";
$Database="db_onroadmech";
$conn=mysqli_connect($ServerName,$Username,$Password,$Database);
if(!$conn)
{
	die("Connection Failed:".mysqli_connect_error());
}
?>
