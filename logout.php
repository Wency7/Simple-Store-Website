<?php

session_start();

if(isset($_SESSION['AccountID']))
{
	unset($_SESSION['AccountID']);

}

header("Location: MercheeLogin.php");
die;
?>