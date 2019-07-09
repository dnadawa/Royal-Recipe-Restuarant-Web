<?php
session_start();

$_SESSION['adminactive']="no";
header("Location: adminlogin.php");
?>