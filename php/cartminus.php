<?php
include ('dbcon.php');
$foodname=$_GET['foodname'];
$price=$_GET['price'];
$email=$_GET['email'];




$sql = "SELECT Quantity FROM foodorders WHERE FoodName='$foodname' AND Email='$email'";
$result = $conn->query($sql);
if($row=$result->fetch_assoc()){
    $i=$row["Quantity"];
}

$x=$i-1;
if($x<1){
    $x=1;
}




//$up = "DELETE FROM foodorders WHERE FoodName='$foodname' AND Email='$email'";
$up = "UPDATE foodorders SET Quantity='$x' WHERE FoodName='$foodname' AND Email='$email'";
if ($conn->query($up) === TRUE) {
    header("Location: cart.php");
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
        ?>
    














