
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
    header("Location: profile.php"); // Redirecting To Home Page
}
?>