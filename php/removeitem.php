<?php
include ('dbcon.php');
$foodname=$_GET['foodname'];
$price=$_GET['price'];
$email=$_GET['email'];

?>
<script>
    if(confirm("Are you sure you want to remove the item?")){
        <?php

        $dele = "DELETE FROM foodorders WHERE FoodName='$foodname' AND Email='$email'";
        
        $conn->query($dele);
        ?>
    alert("Successfully Removed Item!");
        window.location.href="cart.php";
    }
else{
    window.location.href="cart.php";
    }




</script>















