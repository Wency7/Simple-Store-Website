<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "merchee";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

?>