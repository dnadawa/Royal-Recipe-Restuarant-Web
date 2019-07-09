<?php

session_start();
if($_SESSION['active']=="yes"){
    header("Location: profile.php");
}
else{
    header("Location: ../login.html");
}



?>