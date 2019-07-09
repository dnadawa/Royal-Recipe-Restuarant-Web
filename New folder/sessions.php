<?php

$login_session =$_SESSION['login_user'];
if(!isset($login_session)){

    header('Location: profile.php'); // Redirecting To Home Page
}
?>