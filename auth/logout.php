<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/";
session_start();
/// to logout of the current session
include($path."auth/password.php"); 
logout();
/// redirect to readblogs.php
header('Location:' .$path. 'views/index.php'); 
?>