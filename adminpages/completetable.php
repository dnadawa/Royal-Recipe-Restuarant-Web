<?php
include ('../php/dbcon.php');

$id=$_GET['id'];


    $dele = "DELETE FROM orders WHERE Order_ID='$id'";
        
        
        if ($conn->query($dele) === TRUE) {
            echo "Record updated successfully";
            header("Location: tables.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }   















