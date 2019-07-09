<?php

session_start();
if($_SESSION['active']=="yes"){
    header("Location: ../tablebook.php");

}
else{
    header("Location: ../login.html");
}



?>