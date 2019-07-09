<?php
include ('../php/dbcon.php');

$email=$_GET['email'];


session_start();
$semail=$_SESSION['adminemail'];

if($semail==$email){
    ?><script>
        alert("Can't delete account");
        window.location.href="manageadmins.php";
    </script><?php
}
else{



if($semail!="royalrecipe@gmail.com"){
    ?><script>
    alert("Access is Denied! Only Superuser can delete the admin");
    window.location.href="manageadmins.php";</script>  <?php
}
else{

    








?>
<script>
    if(confirm("Are you sure you want to remove the user?")){
        <?php

        $dele = "DELETE FROM admins WHERE Email='$email'";
        
        $conn->query($dele);
        ?>
    alert("Successfully Removed User!");
        window.location.href="manageadmins.php";
    }
else{
    window.location.href="manageadmins.php";
    }




</script><?php
}
}
?>













