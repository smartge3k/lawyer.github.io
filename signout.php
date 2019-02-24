<?php
ob_start();
session_start();
$_SESSION['user_id'] = null;
$_SESSION['user_name'] = null;
$_SESSION['user_email'] = null;
$_SESSION['user_password'] = null;
header("Location: signin.php");
?>
