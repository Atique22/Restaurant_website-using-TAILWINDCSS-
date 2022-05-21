<?php

session_start();

if(isset($_POST['emailPhone']))
{
	unset($_POST['emailPhone']);

}
session_destroy();
header("Location: LOGIN.php");
die;