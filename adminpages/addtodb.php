<?php
include('../php/dbcon.php');
$id="";
$name="";
$category="";
$price="";
$image="";


if(isset($_POST['id'])){
    $id=$_POST["id"];
}

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

$selq="SELECT FoodID FROM foods WHERE FoodID='$id'";
$result = $conn->query($selq);
if($row=$result->fetch_assoc()){
    ?>
    <script>
        alert ("Item already Exists!");
        window.location.href = "additem.php";
    </script><?php

}else{

$sql = "INSERT INTO foods VALUES ('$id', '$name', '{$image}','$category','$price')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: additem.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}






?>