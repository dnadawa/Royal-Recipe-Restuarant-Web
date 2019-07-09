<?php
include ('../php/dbcon.php');

$id=$_GET['id'];
$food=$_GET['food'];


    $dele = "UPDATE placedorders SET Confirm='Yes' WHERE OrderID='$id' AND FoodItem='$food'";
        
        
        if ($conn->query($dele) === TRUE) {
            echo "Record updated successfully";
            header("Location: foodorders.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }   















?>