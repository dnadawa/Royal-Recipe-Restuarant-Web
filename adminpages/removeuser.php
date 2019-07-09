<?php
include ('../php/dbcon.php');

$email=$_GET['email'];

?>
<script>
    if(confirm("Are you sure you want to remove the user?")){
        <?php

        $dele = "DELETE FROM users WHERE Email='$email'";
        
        $conn->query($dele);
        ?>
    alert("Successfully Removed User!");
        window.location.href="users.php";
    }
else{
    window.location.href="users.php";
    }




</script>















