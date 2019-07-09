<?php
session_start();
//unset($_SESSION["nome"]);
$_SESSION['active']="no";
header("Location: ../login.html");
?>