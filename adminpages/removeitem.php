<?php
include ('../php/dbcon.php');

$id=$_GET['id'];

?>
<script>
    if(confirm("Are you sure you want to remove the item?")){
        <?php

        $dele = "DELETE FROM foods WHERE FoodID='$id'";
        
        $conn->query($dele);
        ?>
    alert("Successfully Removed Item!");
        window.location.href="items.php";
    }
else{
    window.location.href="items.php";
    }




</script>















