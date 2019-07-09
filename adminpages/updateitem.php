<?php
include('../php/dbcon.php');
session_start();
$id=$_SESSION['id'];
$name="";
$category="";
$price="";
$image="";




if(isset($_POST['name'])){
    $name=$_POST["name"];
}

if(isset($_POST['category'])){
    $category=$_POST["category"];
}

if(isset($_POST['price'])){
    $price=$_POST["price"];
}

if(isset($_POST['submit'])){
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
   
 
}




$sql = "UPDATE  foods SET FoodName='$name',Image='{$image}',Category='$category',Price='$price' WHERE FoodID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: items.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}







?>